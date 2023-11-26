<?php

namespace App\Services\Slot;

use App\Models\Slot;

class DbService {

    public function store($data){

        $slot = Slot::updateOrCreate($data);
        return $slot;
    }

    public function store_with_activity($data){
        $slot = Slot::where('day', $data['day'])->where('time', $data['time'])->first();
        if($slot == null) {
            $slot = $this->store($data);
        } else {
            $slot = $this->update($data, $slot);
        }

        return $slot;
    }

    public function update($data, $slot){

        $slot->update($data);
        return Slot::find($slot->id);
    }

    public function delete($slot){

        return $slot->delete();
    }

    public function find_all() {
        return Slot::all();
    }

    public function find($id) {
        return Slot::find($id);
    }

}
