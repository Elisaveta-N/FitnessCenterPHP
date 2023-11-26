<?php

namespace App\Http\Controllers\Slot\Admin;

use App\Models\Slot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SlotBaseController;

class DestroyController extends SlotBaseController
{
    public function __invoke(Slot $slot)
    {
        $this->authorize('view', auth()->user());
        $this->db_service->delete($slot);
        return redirect()->route('admin.slots.index');
    }
}
