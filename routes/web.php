<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SoilParamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

Route::middleware('guest')->group(function () {
    Route::get('/', [Controller::class, 'index'])->name('home');
    Route::get('/params', [Controller::class, 'params'])->name('params');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/store', [AuthController::class, 'validateUser'])->name('auth.store');

    Route::get('/publication', [PublicationController::class, 'pub'])->name('pub.index');
    Route::get('/gallery', [PublicationController::class, 'gallery'])->name('pub.gallery');
    Route::get('/publication-view/{news}', [PublicationController::class, 'view'])->name('pub.view');

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

    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/update/{news}', [NewsController::class, 'update'])->name('news.update');

    Route::get('/announcement', [AnnouncementController::class, 'index'])->name('announcement.index');
    Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');
    Route::post('/announcement/store', [AnnouncementController::class, 'store'])->name('announcement.store');
    Route::get('/announcement/edit/{announcement}', [AnnouncementController::class, 'edit'])->name('announcement.edit');
    Route::put('/announcement/update/{announcement}', [AnnouncementController::class, 'update'])->name('announcement.update');

});
