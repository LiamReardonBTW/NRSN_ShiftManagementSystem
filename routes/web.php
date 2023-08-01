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

//Landing/Home page route
Route::redirect('/', 'login');

//Admin routes
Route::prefix('admin')->middleware('auth:sanctum',config('jetstream.auth_session'),'verified','auth', 'isAdmin', 'isActive')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Admin\AdminDashboardController::class, 'index']);
    Route::get('/users',[App\Http\Controllers\Admin\AdminDashboardController::class, 'users']);
});

//Manager routes
Route::prefix('manager')->middleware('auth:sanctum',config('jetstream.auth_session'),'verified','auth', 'isManager', 'isActive')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Manager\ManagerDashboardController::class, 'index']);
});

//Worker routes
Route::prefix('')->middleware('auth:sanctum',config('jetstream.auth_session'),'verified','auth', 'isActive')->group(function(){
    Route::get('/dashboard',[App\Http\Controllers\Worker\WorkerDashboardController::class, 'index']);
});

//Logout route
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/login')->with('status', 'Logged out successfully.');
})->name('logout');

//Logout route
Route::get('inactiveAccLogout', function ()
{
    auth()->logout();
    Session()->flush();
    return Redirect::to('/login')->with('error', 'Your Account is not active, please contact an Admin.');
})->name('inactiveAccLogout');

require_once __DIR__ . '/jetstream.php';
