<?php

namespace App\Http\Controllers\Slot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slot\StoreRequest;
use App\Http\Controllers\SlotBaseController;

class StoreController extends SlotBaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $user_id = $data['user_id'];
        unset($data['user_id']);

        $check = isset($data['check']);
        if($check) {
            unset($data['check']);
        }

        return redirect()->route('tests.index');
    }
}
