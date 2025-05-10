<?php

use App\Http\Controllers\Client\SchoolController;
use App\Http\Controllers\Client\ContactFormController as ClientContactFormController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/school/{id}', [SchoolController::class, 'school'])->name('school.show');

Route::get('/about', [HomeController::class, 'about']);
Route::get('/study_abroad/overview', [HomeController::class, 'overview']);
Route::get('/study_abroad/expense', [HomeController::class, 'expense']);
Route::get('/study_abroad/visa', [HomeController::class, 'visa']);
Route::get('/study_abroad/famous_industry', [HomeController::class, 'famous_industry']);


Route::get('/lien-he', [ClientContactFormController::class, 'showForm'])->name('contact.form');
Route::post('/lien-he', [ClientContactFormController::class, 'submitForm'])->name('contact.submit');
Route::get('/lien-he/cam-on', [ClientContactFormController::class, 'thank'])->name('contact.thankyou');
