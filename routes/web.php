<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddDeleteGuardController;
use App\Http\Controllers\AddDeletePrisonerController;
use App\Http\Controllers\GuardListController;
use App\Http\Controllers\PrisonerListController;
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

Auth::routes();
Route::middleware(['auth'])->group(function() {
    Route::middleware(['can:isAdmin'])->group(function() {

        Route::get('/admin', [App\Http\Controllers\UserController::class, 'index']);
        Route::get('/add_delete_guard', [App\Http\Controllers\AddDeleteGuardController::class, 'ADGuard']);
        Route::get('/add_delete_prisoner', [App\Http\Controllers\AddDeletePrisonerController::class, 'ADPrisoner']);
        Route::get('deleteguard/{id}', [App\Http\Controllers\UserController::class, 'delete']);
        Route::get('deleteprisoner/{id}', [App\Http\Controllers\PrisonerListController::class, 'delete']);
        Route::get('add_delete_prisoner/create',[AddDeletePrisonerController::class, 'create']);
        Route::post('add_delete_prisoner',[AddDeletePrisonerController::class, 'store']);
        Route::get('add_delete_guard/create', [AddDeleteGuardController::class, 'create']);
        Route::post('add_delete_guard', [AddDeleteGuardController::class, 'store']);
        Route::get('click_edit/{id}',[App\Http\Controllers\PrisonerListController::class, 'edit_function']);
        Route::post('/update/{id}',[App\Http\Controllers\PrisonerListController::class, 'update_function']);
        Route::get('guard_edit/{id}',[App\Http\Controllers\UserController::class, 'edit_function']);
        Route::post('/guard_update/{id}',[App\Http\Controllers\UserController::class, 'update_function']);
        Route::get('/searchprisoner',[App\Http\Controllers\PrisonerListController::class, 'search']);
        Route::get('/searchguard',[App\Http\Controllers\UserController::class, 'search']);
        Route::get('/dodaj_kare', [App\Http\Controllers\KaraController::class, 'create']);
        Route::post('/dodaj_kare',[App\Http\Controllers\KaraController::class, 'store']);
        Route::get('edycja/{id}',[App\Http\Controllers\KaraController::class, 'edit_function']);
        Route::post('/update/{id}',[App\Http\Controllers\KaraController::class, 'update_function']);
        Route::get('usun/{id}', [App\Http\Controllers\KaraController::class, 'delete']);
        Route::get('edycja/{id}',[App\Http\Controllers\PrzestepstwoController::class, 'edit_function']);
        Route::post('/update/{id}',[App\Http\Controllers\PrzestepstwoController::class, 'update_function']);
        Route::get('/dodaj_przestepstwo', [App\Http\Controllers\PrzestepstwoController::class, 'create']);
        Route::post('/dodaj_przestepstwo',[App\Http\Controllers\PrzestepstwoController::class, 'store']);
        Route::get('usun/{id}', [App\Http\Controllers\PrzestepstwoController::class, 'delete']);

        //ROUTING LOGOW
        Route::get('/guard_log_list', [App\Http\Controllers\LogTableController::class, 'LogGuardList']);
        Route::get('/prisoner_log_list', [App\Http\Controllers\LogTableController::class, 'LogPrisonerList']);

        

});
/* ZALOGOWANI */
    Route::get('/prisoner_list', [App\Http\Controllers\PrisonerListController::class, 'PrisonerList']);
    Route::get('/guard_list', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/kara', [App\Http\Controllers\KaraController::class, 'index']);
    Route::get('/szukaj',[App\Http\Controllers\KaraController::class, 'search']);
    Route::get('/przestepstwo', [App\Http\Controllers\PrzestepstwoController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
