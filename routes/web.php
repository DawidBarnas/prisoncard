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
        Route::get('/add_delete_prison', [App\Http\Controllers\AddDeletePrisonerController::class, 'ADPrisoner']);


});
/* ZALOGOWANI */
    Route::get('/prisoner_list', [App\Http\Controllers\PrisonerListController::class, 'PrisonerList']);
    Route::get('/guard_list', [App\Http\Controllers\UserController::class, 'index']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
