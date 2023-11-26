<?php

namespace Database\Seeders;

use App\Models\Slot;
use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slots = [
            [
                'day' => 'Понедельник',
                'time' => '10:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Понедельник',
                'time' => '12:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Понедельник',
                'time' => '14:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Понедельник',
                'time' => '16:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Вторник',
                'time' => '10:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Вторник',
                'time' => '12:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Вторник',
                'time' => '14:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Вторник',
                'time' => '16:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Среда',
                'time' => '10:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Среда',
                'time' => '12:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Среда',
                'time' => '14:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Среда',
                'time' => '16:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Четверг',
                'time' => '10:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Четверг',
                'time' => '12:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Четверг',
                'time' => '14:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Четверг',
                'time' => '16:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Пятница',
                'time' => '10:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Пятница',
                'time' => '12:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Пятница',
                'time' => '14:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Пятница',
                'time' => '16:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Суббота',
                'time' => '10:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Суббота',
                'time' => '12:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Суббота',
                'time' => '14:00',
                'activity_id' => Activity::get()->random()->id,
            ],
            [
                'day' => 'Суббота',
                'time' => '16:00',
                'activity_id' => Activity::get()->random()->id,
            ],
       ];

       foreach ($slots as $slot) {
           Slot::create($slot);
       }
    }
}
