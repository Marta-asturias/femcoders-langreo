<?php

use App\Http\Controllers\MiniGamesController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\UserMiniGamesController;
use App\Http\Controllers\UserResourcesController;
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


Route::get('/minigames', [UserMiniGamesController::class, 'getMiniGames' ])->name("minigames");

Route::get('/', function () {
});


Route::get('/admin/workshops', [WorkshopController::class, 'index' ])->name("workshops");
Route::get('/admin/create', [WorkshopController::class, 'create' ])->name("create");
Route::post('/admin/create', [WorkshopController::class, 'save' ])->name('admin.save');
Route::get('/admin/{id}/edit', [WorkshopController::class, 'edit' ])->name("edit");
Route::put('/admin/{id}/edit', [WorkshopController::class, 'update' ])->name("update");

Route::delete('/admin/workshops', [WorkshopController::class, 'destroy'])->name('destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/workshops/workshops', [WorkshopController::class, 'index' ])->name("workshops");
Route::get('/admin/minigames/minigames', [MiniGamesController::class, 'index' ])->name("admin.minigames");
Route::get('/admin/resources/resources', [ResourcesController::class, 'index' ])->name("admin.resources");
Route::get('/admin/workshops/workshops', [WorkshopController::class, 'index' ])->name("workshops");
Route::get('/admin/workshops/create', [WorkshopController::class, 'create' ])->name("create");
Route::post('/admin/workshops/create', [WorkshopController::class, 'save' ])->name('admin.save');
Route::get('/admin/workshops/{id}/edit', [WorkshopController::class, 'edit' ])->name("edit");
Route::put('/admin/workshops/{id}/edit', [WorkshopController::class, 'update' ])->name("update");
Route::delete('/admin/workshops/workshops', [WorkshopController::class, 'destroy'])->name('destroy');


Route::get('/admin/minigames/create', [MiniGamesController::class, 'create' ])->name("minigame.create");
Route::post('/admin/minigames/create', [MiniGamesController::class, 'save' ])->name('minigame.save');
Route::get('/admin/minigames/{id}/edit', [MiniGamesController::class, 'edit' ])->name("minigame.edit");
Route::put('/admin/minihames/{id}/edit', [MiniGamesController::class, 'update' ])->name("minigame.update");
Route::delete('/admin/minigames/minigames', [MiniGamesController::class, 'destroy' ])->name("minigame.destroy");


Route::get('/admin/resources/create', [ResourcesController::class, 'create' ])->name("resource.create");
Route::post('/admin/resources/create', [ResourcesController::class, 'save' ])->name('resource.save');
Route::get('/admin/resources/{id}/edit', [ResourcesController::class, 'edit' ])->name("resource.edit");
Route::put('/admin/resources/{id}/edit', [ResourcesController::class, 'update' ])->name("resource.update");
Route::delete('/admin/resources/resources', [ResourcesController::class, 'destroy' ])->name("resource.destroy");



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


