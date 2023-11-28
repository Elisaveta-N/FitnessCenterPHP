<?php

namespace Tests\Feature\Activity;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\Activity\CreateController;
use App\Services\Activity\DbService;

class CreateControllerTest extends TestCase
{
    public function testInvokeMethod()
    {
        $controller = new CreateController(new DbService);
        $response = $controller->__invoke();

        $this->assertEquals("Hello from Activity CreateController", $response);
    }
}
