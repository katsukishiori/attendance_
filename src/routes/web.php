<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\DailyAttendanceController;
use App\Http\Controllers\IndexController;




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


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [IndexController::class, 'index']);

Route::get('/login', [AuthenticatedSessionController::class, 'login'])->name('auth.login');

Route::get('/logout', [AuthenticatedSessionController::class, 'logout'])->middleware('auth');

// ログイン処理
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');





Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/', [WorkController::class, 'index'])->name('work');
    Route::get('/', [WorkController::class, 'create'])->name('work');
    Route::post('/', [WorkController::class, 'store']);
});



Route::get('/attendance', [DailyAttendanceController::class, 'index']);
Route::get('/attendance/search', [DailyAttendanceController::class, 'search']);


Route::get('/attendance/search', [DailyAttendanceController::class, 'getUrlSlider']);
