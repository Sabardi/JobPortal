<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobVacancyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tes', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Company Routes
Route::resource('companies', CompanyController::class)->middleware('auth');

// Job Vacancy Routes
Route::resource('job_vacancies', JobVacancyController::class)->middleware('auth');

// Application Routes
Route::post('applications/{jobVacancyId}', [ApplicationController::class, 'store'])->middleware('auth');

// Admin Routes
Route::post('job/{id}/verify', [AdminController::class, 'verifyJob'])->middleware('role:admin');
Route::post('job/{id}/deactivate', [AdminController::class, 'deactivateJob'])->middleware('role:admin');

Route::get('/daftar/prusahaan', function () {
    return view('auth.register-company');
})->name('register.company');
Route::post('/register/company', [RegisterController::class, 'registerCompany'])->name('register.company.post');
