<?php

namespace App\Http\Controllers\Activity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\StoreRequest;
use App\Http\Controllers\ActivityBaseController;

class StoreController extends ActivityBaseController
{
    public function __invoke(StoreRequest $request)
    {
        $this->authorize('create', auth()->user());
        $data = $request->validated();
        $activity = $this->db_service->store($data);

        return response()->json(['status'=>200,'data'=>$activity]);
    }
}
