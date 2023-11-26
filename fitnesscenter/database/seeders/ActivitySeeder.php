<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            [
                'title' => 'Аэробика',
            ],
            [
                'title' => 'Гимнастика',
            ],
            [
                'title' => 'Плавание',
            ],
            [
                'title' => 'Пилатес',
            ],
            [
                'title' => 'Йога'
            ]
       ];

       foreach ($activities as $activity) {
           Activity::create($activity);
       }
    }
}
