<?php

namespace App\Http\Controllers\Slot;

use App\Models\Slot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlotBaseController;

class DestroyController extends SlotBaseController
{
    public function __invoke(Slot $slot)
    {
        dd($slot);
        return "Hello from Slots  Controller";
    }
}
