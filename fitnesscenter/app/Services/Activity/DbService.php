<?php

namespace App\Services\Activity;

use Throwable;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;

class DbService {

    public function store($data){

        $activity = Activity::updateOrCreate($data);
        return $activity;
    }

    public function update($data, $activity){
        DB::beginTransaction();
        try {
            $activity->update($data);
            DB::commit();
            return Activity::find($activity->id);
        }
        catch (Throwable $e) {
            DB::rollback();
            throw $e;
        }
    }

    public function delete($activity){

        return $activity->delete();
    }

    public function find_all() {
        return Activity::all();
    }

}
