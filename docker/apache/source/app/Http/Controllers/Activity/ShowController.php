<?php

namespace App\Http\Controllers\Activity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ActivityBaseController;

class ShowController extends ActivityBaseController
{
    public function __invoke()
    {
        return "Hello from Activity ShowController";
    }
}
