<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Activity\DbService;


class ActivityBaseController extends Controller
{
    public $db_service;

    public function __construct(DbService $service) {
        $this->db_service = $service;
    }
}
