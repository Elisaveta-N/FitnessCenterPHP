<?php

namespace Tests\Feature\Activity;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Activity;
use App\Models\User;
use App\Services\Activity\DbService;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Activity\DestroyController;

class DestroyControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate');
        $this->seed();
    }

    public function testDestroyMethod()
    {
        //$user = User::find(2);
            //$this->authorize('delete', auth()->user());
            //need to create an activity

        // $activity = Activity::create([
        //         'title' => 'Аэробика',
        //     ]);
        //Auth::loginUsingId(2);
        // $response = $this->actingAs($user)
        //                 ->delete('/activities/1');
        $activity = Activity::find(1);
        $title = $activity->title;
        $this->assertEquals($title, "Аэробика");
        //$response = $this->get('/activities');
        //$response->assertStatus(200); // check if the response status is 204 for a successful deletion

        //TBD
    }
}
