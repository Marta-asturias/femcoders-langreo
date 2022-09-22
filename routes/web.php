<?php

use App\Http\Controllers\UserWorkshopsController;
use App\Http\Controllers\WorkshopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/workshops', [UserWorkshopsController::class, 'getWorkshops' ])->name("getWorkshops");

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/workshops', [WorkshopController::class, 'index' ])->name("workshops");
Route::get('/admin/create', [WorkshopController::class, 'create' ])->name("create");
Route::post('/admin/create', [WorkshopController::class, 'save' ])->name('admin.save');
Route::get('/admin/{id}/edit', [WorkshopController::class, 'getByWorkshop' ])->name("admin.edit");
Route::put('/admin/{id}/edit', [WorkshopController::class, 'update' ])->name("update");

Route::delete('/admin/workshops', [WorkshopController::class, 'destroy'])->name('destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

