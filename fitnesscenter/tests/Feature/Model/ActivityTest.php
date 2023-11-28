<?php

namespace Tests\Feature\Model;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Activity;

class ActivityTest extends TestCase
{
    use RefreshDatabase;

    public function test_activity_creation(): void
    {
        $activity = Activity::create(['title' => 'Аэробика']);
        $this->assertInstanceOf(Activity::class, $activity);
        $this->assertDatabaseHas('activities', ['title' => 'Аэробика']);
    }
}
