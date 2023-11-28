<?php

namespace Tests\Feature\Slot;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Http\Slot\EditController;
use Illuminate\Support\Facades\Auth;

class EditControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_example(): void
    {
        Auth::loginUsingId(1);
        $response = $this->get('/slots/1/edit');

        $response->assertStatus(200);
    }
}
