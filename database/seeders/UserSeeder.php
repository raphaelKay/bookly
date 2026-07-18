<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'firstname' => 'Raphael',
            'lastname' => 'Kwami',
            'username' => 'raphaelkay',
            'email' => 'raphaelkay@live.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(4)->create();
    }
}
