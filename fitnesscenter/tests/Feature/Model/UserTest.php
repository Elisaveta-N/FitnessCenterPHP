<?php

namespace Tests\Feature\Model;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_creation(): void
    {
        $user = User::create([
                'name' => 'user',
                'email' => 'user@laravel.com',
                'email_verified_at' => now(),
                'password' => Hash::make('user'),
                'remember_token' => Str::random(10),
                'role' => 'USER_ROLE',
            ]);
            $this->assertInstanceOf(User::class, $user);
            $this->assertDatabaseHas('users', ['email'=>'user@laravel.com']);
    }
}
