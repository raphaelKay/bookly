<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(Request $request)
    {
        return view('index', [
            // ...
        ]);
    }

    public function bookly(Request $request)
    {
        return view('bookly', [
            // ...
        ]);
    }

    public function privacy(Request $request)
    {
        return view('privacy', [
            // ...
        ]);
    }

    public function terms(Request $request)
    {
        return view('terms', [
            // ...
        ]);
    }

    public function contact(Request $request)
    {
        return view('contact', [
            // ...
        ]);
    }
}
