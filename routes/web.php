<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobVacancyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/tes', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/job/location/{location}/{name}', [HomeController::class, 'getLocation'])->name('get.job.location');
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/company', [HomeController::class, 'company'])->name('company');
Route::get('/lowongan kerja', [HomeController::class, 'loker'])->name('loker');

// Route::get('/search/location/{{location}}', [HomeController::class, 'search'])->name('search.location');
// Route::get('/search/category/{{category}}', [HomeController::class, 'search'])->name('search.category');
// Route::get('/search/job/{{job}}', [HomeController::class, 'search'])->name('search.job');
// Route::get('/search', [HomeController::class, 'search'])->name('search');
// Route::get('/job/{id}', [JobVacancyController::class, 'show'])->name('job.show');

Route::group(['middleware' => 'auth'], function () {
    // company
    Route::post('/create/perusahaan', [CompanyController::class, 'store'])->name('company.store');

    // job vacancy
    Route::get('/job.html', [JobVacancyController::class, 'index'])->name('job.index')->middleware('role:company');
    Route::get('/create/job.html', [JobVacancyController::class, 'create'])->name('job.create')->middleware('role:company');
    Route::post('/create/job.html', [JobVacancyController::class, 'store'])->name('job.create.store')->middleware('role:company');
});



// Company Routes
Route::resource('companies', CompanyController::class)->middleware('auth');

// Job Vacancy Routes
Route::resource('job_vacancies', JobVacancyController::class)->middleware('auth');

// Application Routes
Route::post('applications/{jobVacancyId}', [ApplicationController::class, 'store'])->middleware('auth');

// Admin Routes
Route::post('job/{id}/verify', [AdminController::class, 'verifyJob'])->middleware('role:admin');
Route::post('job/{id}/deactivate', [AdminController::class, 'deactivateJob'])->middleware('role:admin');

Route::get('/register/company', [RegisterController::class, 'createCompany'])->name('register.company');
Route::post('/register/company', [RegisterController::class, 'registerCompany'])->name('register.company.post');
