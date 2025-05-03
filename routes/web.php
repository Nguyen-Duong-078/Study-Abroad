<?php

use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/study_abroad/overview',[HomeController::class,'overview']);
Route::get('/study_abroad/expense',[HomeController::class,'expense']);
Route::get('/study_abroad/visa',[HomeController::class,'visa']);
Route::get('/study_abroad/scholarship',[HomeController::class,'scholarship']);
