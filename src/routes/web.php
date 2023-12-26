<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\DailyAttendanceController;


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


Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'destroy']);
Route::get('/', [WorkController::class, 'create']);
Route::post('/', [WorkController::class, 'store']);
Route::get('/attendance', [DailyAttendanceController::class, 'index']);
Route::get('/attendance', [DailyAttendanceController::class, 'search']);