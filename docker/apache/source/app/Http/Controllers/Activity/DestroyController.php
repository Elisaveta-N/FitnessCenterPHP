<?php

namespace App\Http\Controllers\Activity;

use App\Models\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ActivityBaseController;

class DestroyController extends ActivityBaseController
{
    public function __invoke(Activity $activity)
    {
        $this->authorize('delete', auth()->user());
        $result = $this->db_service->delete($activity);
        $status = 204;
        if($result !== TRUE) {
            $status = 400;
        }
        return response()->json(['status'=>$status]);
    }
}
