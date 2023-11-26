<?php

namespace App\Http\Controllers\UserSlot;

use App\Models\UserSlot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserSlot\StoreRequest;
use App\Http\Controllers\UserSlotBaseController;

class StoreController extends UserSlotBaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $check = isset($data['check']);

        if($check) {
            unset($data['check']);
            $this->db_service->store($data);
        } else {
            $this->db_service->delete($data);
        }

        // dd($data);
        return redirect()->route('slots.index');
    }
}
