<?php

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

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect('/dashboard');
});

// Tugas
Route::get('/shift', [ShiftController::class, 'index']);
Route::post('/shift', [ShiftController::class, 'calculate']);

// Start routes 
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');;
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::resource('history', HistoryController::class)->middleware('auth');
Route::get('/history-datatables', [HistoryController::class, 'datatables'])->name('history.datatables')->middleware('auth');
Route::resource('user', UserController::class)->middleware(['auth', 'admin']);
Route::resource('tenant', TenantController::class)->middleware(['auth', 'admin']);
// Route::get('/dashboard', [HistoryController::class, 'index'])->name('dashboard');



Route::get('/tes', [MainController::class, 'tespage'])->name('tespage');