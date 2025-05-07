<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SchoolController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::prefix('categories')
        ->name('categories.')
        ->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    });
        Route::prefix('schools')
        ->name('schools.')
        ->group(function () {
        Route::get('/', [SchoolController::class, 'index'])->name('index');
        Route::get('/create', [SchoolController::class, 'create'])->name('create');
        Route::post('/store', [SchoolController::class, 'store'])->name('store');
        Route::get('/show/{id}', [SchoolController::class, 'show'])->name('show');
        Route::get('/edit/{id}', [SchoolController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [SchoolController::class, 'update'])->name('update');
        Route::delete('/schools/{id}', [SchoolController::class, 'destroy'])->name('destroy');
    });

    });

