<?php

namespace App\Http\Controllers\Activity;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Activity\UpdateRequest;
use App\Http\Controllers\ActivityBaseController;

class UpdateController extends ActivityBaseController
{
    public function __invoke(UpdateRequest $request, Activity $activity)
    {
        $this->authorize('update', auth()->user());
        $data = $request->validated();
        $result = $this->db_service->update($data, $activity);
        return response()->json(['status'=>200,'data'=>$result]);
    }
}
