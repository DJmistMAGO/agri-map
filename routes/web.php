<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SoilParamController;

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

Route::middleware('guest')->group(function () {
    Route::get('/', [Controller::class, 'index'])->name('home');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/store', [AuthController::class, 'validateUser'])->name('auth.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/soil-param', [SoilParamController::class, 'index'])->name('soil-param.index');
    Route::get('/soil-param/create', [SoilParamController::class, 'create'])->name('soil-param.create');
    Route::post('/soil-param/store', [SoilParamController::class, 'store'])->name('soil-param.store');
    Route::get('/soil-param/edit/{soilParam}', [SoilParamController::class, 'edit'])->name('soil-param.edit');
    Route::put('/soil-param/update/{soilParam}', [SoilParamController::class, 'update'])->name('soil-param.update');
    Route::get('/soil-param/show/{soilParam}', [SoilParamController::class, 'show'])->name('soil-param.show');
});
