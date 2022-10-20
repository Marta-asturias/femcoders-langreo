<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminWelcomeController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MiniGamesController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ParticipantViewController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\ShowUserController;
use App\Http\Controllers\UpdateUSerController;
use App\Http\Controllers\UserMiniGamesController;
use App\Http\Controllers\UserResourcesController;
use App\Http\Controllers\UserWorkshopsController;
use App\Http\Controllers\WorkshopController;
use App\Repositories\Participant\ParticipantRepository;
use Illuminate\Support\Facades\Route;
use App\Mail\InscriptionMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/inscriptionmail', [MailController::class, 'try']);

Route::get('/{id}/participant', [ParticipantController::class, 'createParticipant' ])->name("createParticipant");
Route::post('/{id}/participant', [ParticipantController::class, 'save' ])->name("inscription");
Route::get('/workshops', [UserWorkshopsController::class, 'getWorkshops' ])->name("getWorkshops");
Route::get('/minigames', [UserMiniGamesController::class, 'getMiniGames' ])->name("minigames");
Route::get('/resources', [UserResourcesController::class, 'getResources' ])->name("resources");

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/welcome', [HomeController::class, 'welcome' ])->name("welcome");

Route::get('/admin/welcome', [AdminWelcomeController::class, 'index' ])->name("adminwelcome");
Route::group(['middleware' => ['auth']], function (){


    Route::group(['prefix' => 'admin/workshops'], function () {

Route::get('/workshops', [WorkshopController::class, 'index' ])->name("workshops");
Route::get('/workshops', [WorkshopController::class, 'index' ])->name("workshops");
Route::get('export/', [WorkshopController::class, 'export'])->name("export");
Route::get('/create', [WorkshopController::class, 'create' ])->name("create");
Route::post('/create', [WorkshopController::class, 'save' ])->name('admin.save');
Route::get('/{id}/edit', [WorkshopController::class, 'edit' ])->name("edit");
Route::put('/{id}/edit', [WorkshopController::class, 'update' ])->name("update");
Route::delete('/workshops', [WorkshopController::class, 'destroy'])->name('destroy');
    });
    
    Route::group(['prefix' => 'admin/minigames'], function () {
        Route::get('/minigames', [MiniGamesController::class, 'index' ])->name("admin.minigames");
        Route::get('/create', [MiniGamesController::class, 'create' ])->name("minigame.create");
Route::post('/create', [MiniGamesController::class, 'save' ])->name('minigame.save');
Route::get('/{id}/edit', [MiniGamesController::class, 'edit' ])->name("minigame.edit");
Route::put('/{id}/edit', [MiniGamesController::class, 'update' ])->name("minigame.update");
Route::delete('/minigames', [MiniGamesController::class, 'destroy' ])->name("minigame.destroy");
    });

    Route::group(['prefix' => 'admin/resources'], function () {
    Route::get('/resources', [ResourcesController::class, 'index' ])->name("admin.resources");
    Route::get('/create', [ResourcesController::class, 'create' ])->name("resource.create");
    Route::post('/create', [ResourcesController::class, 'save' ])->name('resource.save');
    Route::get('/{id}/edit', [ResourcesController::class, 'edit' ])->name("resource.edit");
    Route::put('/{id}/edit', [ResourcesController::class, 'update' ])->name("resource.update");
    Route::delete('/resources', [ResourcesController::class, 'destroy' ])->name("resource.destroy");
    });

Route::get('/admin/users/users', [ShowUserController::class, 'index' ])->name("users");
Route::delete('/admin/users/users', [DeleteUserController::class, 'destroy'])->name('destroyUser');
Route::get('/admin/users/{id}/edit', [UpdateUSerController::class, 'edit' ])->name("editUser");
Route::put('/admin/users/{id}/edit', [UpdateUSerController ::class, 'update' ])->name("updateUser");

});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

