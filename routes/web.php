<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MasterController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ApplicantController;
use App\Http\Controllers\Backend\EmployerController;
use App\Http\Controllers\Backend\JobPostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ExamController;

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

/* ------------------ master view------------------ */

Route::get('/', [MasterController::class, 'masterview'])->name('master');

/* ------------------ admin panel pages------------------ */
Route::get('/dashboard', [DashboardController::class, 'dashboardview'])->name('dashboard');
Route::get('/jobs', [JobPostController::class, 'jobpostview'])->name('jobPost');
Route::get('/categories', [CategoryController::class, 'categoryview'])->name('category');
Route::get('/exam', [ExamController::class, 'examview'])->name('exam');


// -----------------------------Applicants routes---------------------------//
Route::get('/applicant', [ApplicantController::class, 'applicantView'])->name('applicant');
Route::get('/applicant/form', [ApplicantController::class, 'applicantForm'])->name('applicantForm');
Route::post('/applicant/submit', [ApplicantController::class, 'applicantSubmit'])->name('applicantSubmit');


// -----------------------------Employers routes---------------------------//
Route::get('/employers', [EmployerController::class, 'employerView'])->name('employer');
Route::get('/employers/form', [EmployerController::class, 'employerForm'])->name('employerForm');
Route::post('/employers/submit', [EmployerController::class, 'employerSubmit'])->name('employerSubmit');
