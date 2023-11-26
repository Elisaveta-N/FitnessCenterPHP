<?php

namespace App\Http\Controllers\Slot;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlotBaseController;

class ShowController extends SlotBaseController
{
    public function __invoke()
    {
        return "Hello from Slots  Controller";
    }
}
