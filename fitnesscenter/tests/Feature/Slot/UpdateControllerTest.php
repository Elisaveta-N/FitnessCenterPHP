<?php

namespace Tests\Feature\Slot;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Slot\UpdateController;
use Illuminate\Support\Facades\Auth;

class UpdateControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
        $this->seed();
    }

    public function test_example(): void
    {
        Auth::loginUsingId(1);
        $response = $this->patch('/slots/1', ['slot_id' => '1',
        'user_id' => '1',
    ]);

        $response->assertStatus(200);
    }
}
