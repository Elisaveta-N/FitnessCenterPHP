<?php

namespace App\Http\Controllers\Slot\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlotBaseController;
use App\Http\Requests\Slot\Admin\StoreRequest;

class StoreController extends SlotBaseController
{
    public function __invoke(StoreRequest $request)
    {
        $this->authorize('view', auth()->user());
        $data = $request->validated();
        $this->db_service->store_with_activity($data);

        return redirect()->route('admin.slots.index');
    }
}
