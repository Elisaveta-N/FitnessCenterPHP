<?php

namespace App\Http\Controllers\Activity;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ActivityBaseController;

class IndexController extends ActivityBaseController
{
    public function __invoke()
    {
        $activities = $this->db_service->find_all();
        return response()->json(['status'=>200,'data'=>$activities]);
    }
}
