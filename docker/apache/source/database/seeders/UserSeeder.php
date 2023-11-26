<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'user',
                'email' => 'user@laravel.com',
                'email_verified_at' => now(),
                'password' => Hash::make('user'),
                'remember_token' => Str::random(10),
                'role' => 'USER_ROLE',
            ],
            [
                'name' => 'admin',
                'email' => 'admin@laravel.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin'),
                'remember_token' => Str::random(10),
                'role' => 'ADMIN_ROLE',
            ],
       ];

       foreach ($users as $user) {
            User::create($user);
        }

    }
}
