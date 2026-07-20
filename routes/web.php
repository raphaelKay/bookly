<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::view('/', 'welcome')->name('home');

Route::group(['prefix' => '', 'as' => '', 'middleware' => []], function() {
    Route::controller(PageController::class)->group(function() {
        Route::get('', function(PageController $controller) {
            if (auth()->check() && auth()->user()->hasVerifiedEmail()) {
                return $controller->bookly(request());
            }
            
            return auth()->check() ? redirect()->route('verification.notice') : $controller->index(request());
        })->name('home');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
