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

Route::get('/', function () {
    return view('welcome');
});

//Default routes
Route::prefix('')->middleware('auth:sanctum',config('jetstream.auth_session'),'verified','auth')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Worker\DashboardController::class, 'index']);
});

//Admin routes
Route::prefix('admin')->middleware('auth:sanctum',config('jetstream.auth_session'),'verified','auth', 'isAdmin')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
});

//Manager routes
Route::prefix('manager')->middleware('auth:sanctum',config('jetstream.auth_session'),'verified','auth')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Manager\DashboardController::class, 'index']);
});

//Logout route
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');
