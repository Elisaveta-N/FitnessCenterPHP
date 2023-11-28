<?php

namespace Tests\Feature\Model;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Slot;
use App\Models\Activity;

class SlotTest extends TestCase
{
    use RefreshDatabase;

    public function test_slot_creation(): void
    {
        $activity = Activity::create(['title' => 'Аэробика']);

        $slot = Slot::create([
            'day' => 'Понедельник',
            'time' => '10:00',
            'activity_id' => $activity->id,
        ]);
        $this->assertInstanceOf(Slot::class, $slot);
        $this->assertDatabaseHas('slots', ['day' => 'Понедельник',
        'time' => '10:00']);
    }
}
