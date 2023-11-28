<?php

namespace Tests\Feature\Slot;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Slot\IndexController;
use Illuminate\Support\Facades\Auth;

class IndexControllerTest extends TestCase
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
        $response = $this->get('/slots');

        $response->assertStatus(200);
    }
}
