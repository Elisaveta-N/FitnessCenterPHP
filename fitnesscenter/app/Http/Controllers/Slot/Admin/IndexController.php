<?php

namespace App\Http\Controllers\Slot\Admin;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlotBaseController;

global $week_days;
$week_days = array();
    $week_days['Понедельник'] = 1;
    $week_days['Вторник'] = 2;
    $week_days['Среда'] = 3;
    $week_days['Четверг'] = 4;
    $week_days['Пятница'] = 5;
    $week_days['Суббота'] = 6;
    $week_days['Воскресенье'] = 7;

class IndexController extends SlotBaseController
{
    public function __invoke()
    {
        $this->authorize('view', auth()->user());

        $slots = $this->db_service->find_all()->sortBy([
            function($a, $b){
                global $week_days;

                $dayA = $week_days[$a['day']];
                $dayB = $week_days[$b['day']];

                return ($dayA < $dayB) ? -1 : (($dayA === $dayB) ? 0 : 1);
            },
            ['time', 'asc'],
        ]);

        $activities = Activity::all();
        return view('slot.admin.index', compact('slots', 'activities'));
        // return "Hello from Slots Admin Index Controller";
    }
}
