<?php

use App\Http\Controllers\Client\SchoolController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Client\ContactFormController as ClientContactFormController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController as ClientPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/school/{id}', [SchoolController::class, 'school'])->name('school.show');
Route::get('/schools', [SchoolController::class, 'schools'])->name('schools');
Route::get('/schools/search', [SchoolController::class, 'search'])->name('schools.search');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/study_abroad/overview', [HomeController::class, 'overview'])->name('study_abroad.overview');
Route::get('/study_abroad/expense', [HomeController::class, 'expense'])->name('study_abroad.expense');
Route::get('/study_abroad/visa', [HomeController::class, 'visa'])->name('study_abroad.visa');
Route::get('/study_abroad/famous_industry', [HomeController::class, 'famous_industry'])->name('study_abroad.famous_industry');


Route::get('/lien-he', [ClientContactFormController::class, 'showForm'])->name('contact.form');
Route::post('/lien-he', [ClientContactFormController::class, 'submitForm'])->name('contact.submit');
Route::get('/lien-he/cam-on', [ClientContactFormController::class, 'thank'])->name('contact.thankyou');


Route::get('/Bai-viet', [ClientPostController::class, 'index'])->name('posts.index');
Route::get('/bai-viet/{id}', [ClientPostController::class, 'show'])->name('client.posts.show');



