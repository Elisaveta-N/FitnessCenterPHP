<?php

namespace Tests\Feature\Slot;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Slot\CreateController;
use Illuminate\Support\Facades\Auth;

class CreateControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        Auth::loginUsingId(1);
        $response = $this->get('/slots/create');

        $response->assertStatus(200);
    }
}
