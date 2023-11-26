<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::group(['namespace'=>'App\Http\Controllers\Activity'], function(){
    Route::get('/activities', 'IndexController')->name('activity.index');
    Route::get('/activities/create', CreateController::class)->name('activities.create');
    Route::post('/activities', 'StoreController')->name('activities.store');
    Route::get('/activities/{activity}', ShowController::class)->name('activities.show');
    Route::get('/activities/{activity}/edit', EditController::class)->name('activities.edit');
    Route::patch('/activities/{activity}', UpdateController::class)->name('activities.update');
    Route::delete('/activities/{activity}', DestroyController::class)->name('activities.destroy');
});





