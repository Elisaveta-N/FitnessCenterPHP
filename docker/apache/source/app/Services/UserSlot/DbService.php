<?php

namespace App\Services\UserSlot;

use App\Models\UserSlot;

class DbService {

    public function store($data){
        return UserSlot::updateOrCreate($data);
    }

    public function delete($data){

        $user_slot = UserSlot::where('user_id', $data['user_id'])
                            ->where('slot_id', $data['slot_id'])->first();
        $user_slot->delete();
    }
}
