<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
                ->name('home')
                ->withoutMiddleware(['auth']);

Route::group(['namespace'=>'App\Http\Controllers\Slot'], function(){
    Route::get('/slots', 'IndexController')->name('slots.index');
    Route::get('/slots/create', CreateController::class)->name('slots.create');
    Route::post('/slots', 'StoreController')->name('slots.store');
    Route::get('/slots/{slot}', ShowController::class)->name('slots.show');
    Route::get('/slots/{slot}/edit', EditController::class)->name('slots.edit');
    Route::patch('/slots/{slot}', UpdateController::class)->name('slots.update');
    Route::delete('/slots/{slot}', DestroyController::class)->name('slots.destroy');
});

Route::group(['namespace'=>'App\Http\Controllers\UserSlot'], function(){
    Route::post('/userslots', 'StoreController')->name('userslots.store');
});

Route::group(['namespace'=>'App\Http\Controllers\Slot\Admin'], function(){
    Route::get('/admin/slots', 'IndexController')->name('admin.slots.index');
    Route::post('/admin/slots', 'StoreController')->name('admin.slots.store');
    Route::delete('/admin/slots/{slot}', 'DestroyController')->name('admin.slots.destroy');
});
