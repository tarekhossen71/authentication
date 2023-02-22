<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes([
    'register'=> false,
    'password.confirm'=> false,
    'password.email'=> false,
    'password.request'=> false,
    'password.reset'=> false,
    'password.update'=> false
]);


Route::prefix('app')->name('app.')->middleware(['auth', 'email_verified', 'permission'])->group(function(){
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::get('signup', [AuthController::class, 'signup']);
Route::get('signin', [AuthController::class, 'signin']);