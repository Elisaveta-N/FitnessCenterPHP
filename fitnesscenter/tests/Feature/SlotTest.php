<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Tests\TestCase;
use Services;


class SlotTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
    }
    public function test_slots_are_not_available()
    {
        $response = $this->json('GET', '/admin/slots');
        $response
            ->assertStatus(403);
    }

}
