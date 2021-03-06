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
        //KARA
        Route::get('/dodaj_kare', [App\Http\Controllers\KaraController::class, 'create']);
        Route::post('/dodaj_kare',[App\Http\Controllers\KaraController::class, 'store']);
        Route::get('edycjakary/{id}',[App\Http\Controllers\KaraController::class, 'edit_function']);
        Route::post('/kara_update/{id}',[App\Http\Controllers\KaraController::class, 'update_function']);
        Route::get('usunkare/{id}', [App\Http\Controllers\KaraController::class, 'delete']);
        //PRZESTEPSTWO
        Route::get('/dodaj_przestepstwo', [App\Http\Controllers\PrzestepstwoController::class, 'create']);
        Route::post('/dodaj_przestepstwo',[App\Http\Controllers\PrzestepstwoController::class, 'store']);
        Route::get('edycja/{id}',[App\Http\Controllers\PrzestepstwoController::class, 'edit_function']);
        Route::post('/przestepstwo_update/{id}',[App\Http\Controllers\PrzestepstwoController::class, 'update_function']);
        Route::get('skasuj/{id}', [App\Http\Controllers\PrzestepstwoController::class, 'delete']);
        //MIEJSCE WIEZNIA
        Route::get('/dodaj_miejscew', [App\Http\Controllers\MiejsceWiezniaController::class, 'create']);
        Route::post('/dodaj_miejscew',[App\Http\Controllers\MiejsceWiezniaController::class, 'store']);
        Route::get('edycjamiejsca/{id}',[App\Http\Controllers\MiejsceWiezniaController::class, 'edit_function']);
        Route::post('/miejscewieznia_update/{id}',[App\Http\Controllers\MiejsceWiezniaController::class, 'update_function']);
        Route::get('skasujmiejsce/{id}', [App\Http\Controllers\MiejsceWiezniaController::class, 'delete']);
        //MIEJSCE STRAZNIKA
        Route::get('/dodaj_miejsces', [App\Http\Controllers\MiejsceuseraController::class, 'create']);
        Route::post('/dodaj_miejsces',[App\Http\Controllers\MiejsceuseraController::class, 'store']);
        Route::get('edycjamiejscas/{id}',[App\Http\Controllers\MiejsceuseraController::class, 'edit_function']);
        Route::post('/miejscestraznika_update/{id}',[App\Http\Controllers\MiejsceuseraController::class, 'update_function']);
        Route::get('skasujmiejsces/{id}', [App\Http\Controllers\MiejsceuseraController::class, 'delete']);



        //ROUTING LOGOW
        Route::get('/guard_log_list', [App\Http\Controllers\LogTableController::class, 'LogGuardList']);
        Route::get('/prisoner_log_list', [App\Http\Controllers\LogTableController::class, 'LogPrisonerList']);
        Route::get('/miejscestraznikalogi', [App\Http\Controllers\LogTableController::class, 'LogGuardPlaceList']);
        Route::get('/miejscewieznialogi', [App\Http\Controllers\LogTableController::class, 'LogPrisonerPlaceList']);

});
/* ZALOGOWANI */
    Route::get('/prisoner_list', [App\Http\Controllers\PrisonerListController::class, 'PrisonerList']);
    Route::get('/guard_list', [App\Http\Controllers\UserController::class, 'index']);
    //KARA
    Route::get('/kara', [App\Http\Controllers\KaraController::class, 'index']);
    Route::get('/szukaj',[App\Http\Controllers\KaraController::class, 'search']);
    //PRZESTEPSTWO
    Route::get('/przestepstwo', [App\Http\Controllers\PrzestepstwoController::class, 'index']);
    Route::get('/szukajprzestepstwa',[App\Http\Controllers\PrzestepstwoController::class, 'search']);
    //MIEJSCE WIEZNIA
    Route::get('/miejscewieznia', [App\Http\Controllers\MiejsceWiezniaController::class, 'index']);
    Route::get('/szukajwieznia',[App\Http\Controllers\MiejsceWiezniaController::class, 'search']);
    //MIEJSCE STRAZNIKA
    Route::get('/miejscestraznika', [App\Http\Controllers\MiejsceuseraController::class, 'index']);
    Route::get('/szukajstraznika',[App\Http\Controllers\MiejsceuseraController::class, 'search']);

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
