<?php

namespace App\Http\Controllers\Slot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlotBaseController;
use App\Http\Requests\UserSlot\StoreRequest;

class UpdateController extends SlotBaseController
{
    public function __invoke(StoreRequest $request)
    {

        return "Hello from Slots  Controller";
    }
}
