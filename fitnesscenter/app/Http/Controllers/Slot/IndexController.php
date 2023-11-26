<?php

namespace App\Http\Controllers\Slot;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlotBaseController;

class IndexController extends SlotBaseController
{
    public function __invoke()
    {
        // $user_id = 1;
        // $user = User::find($user_id);
        $user = auth()->user();
        $user_id = $user->id;

        $user_slots = $user->slots;

        $slots = $this->db_service->find_all();

        $shedulers = [];
        foreach($slots as $key=>$value){
            $group = $value['day'];
            if(!isset($shedulers[$group])) $shedulers[$group ] = [];

            $shedulers[$group][$value->time] = $value;
        }

        foreach($shedulers as $key=>&$sheduler){
            ksort($sheduler);
            $shedulers[$key] = $sheduler;
        }

        // return response()->json(['status'=>200,'data'=>$slots]);
        return view('slot.index', compact('user_slots', 'shedulers', 'user_id'));
    }
}
