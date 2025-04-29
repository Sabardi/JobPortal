<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobVacancyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
Route::get('/job/{id}', [JobVacancyController::class, 'show'])->name('job.show');

Route::group(['middleware' => 'auth'], function () {
    // company
    Route::post('/create/perusahaan', [CompanyController::class, 'store'])->name('company.store');
    Route::put('/update/perusahaan', [CompanyController::class, 'update'])->name('company.update');
    Route::get('/profile/perusahaan', [CompanyController::class, 'show'])->name('company.profile');

    // job vacancy
    Route::get('/job.html', [JobVacancyController::class, 'index'])->name('job.index')->middleware('role:company');
    Route::get('/create/job.html', [JobVacancyController::class, 'create'])->name('job.create')->middleware('role:company');
    Route::post('/create/job.html', [JobVacancyController::class, 'store'])->name('job.create.store')->middleware('role:company');
    Route::get('/edit/{id}/job.html', [JobVacancyController::class, 'edit'])->name('job.edit')->middleware('role:company');
    Route::put('/update/{id}/job.html', [JobVacancyController::class, 'update'])->name('job.update')->middleware('role:company');
    Route::delete('/delete/{id}/job.html', [JobVacancyController::class, 'destroy'])->name('job.destroy')->middleware('role:company');
    
    // application
    Route::get('/apply', [ApplicationController::class, 'index'])->name('job.apply.index')->middleware('role:company');
    
    Route::get('/job/{jobVacancy}/apply', [ApplicationController::class, 'create'])->name('job.apply.create')->middleware('role:job_seeker');
    Route::post('/job/{jobVacancy}/apply', [ApplicationController::class, 'store'])->name('job.apply.store')->middleware('role:job_seeker');
    Route::get('/job/{id}/apply/confirm', [ApplicationController::class, 'confirm'])->name('job.apply.confirm')->middleware('role:job_seeker');
    Route::get('/job/{id}/apply/success', [ApplicationController::class, 'success'])->name('job.apply.success')->middleware('role:job_seeker');
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

// ember 

Route::get('/ember', function () {
    return view('application.embed');
})->name('embed');