<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pruebas', [WorkshopController::class, 'index' ])->name("pruebas");
Route::get('/admin/create', [WorkshopController::class, 'create' ])->name("create");
Route::post('/admin/create', [WorkshopController::class, 'save' ])->name('admin.save');

Route::get('/admin/{id}/edit', [WorkshopController::class, 'edit' ])->name("edit");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

