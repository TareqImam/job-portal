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



// -----------------------------Applicants routes---------------------------//
Route::get('/applicant', [ApplicantController::class, 'applicantView'])->name('applicant');

Route::get('/applicant/form', [ApplicantController::class, 'applicantForm'])->name('applicantForm');

Route::post('/applicant/submit', [ApplicantController::class, 'applicantSubmit'])->name('applicantSubmit');

Route::get('/applcant/update/{id}', [ApplicantController::class, 'applicantUpdate'])->name('applicantUpdate');

Route::put('/applicant/update/store/{id}', [ApplicantController::class, 'applicantStore'])->name('applicantStore');



// -----------------------------Employers routes---------------------------//
Route::get('/employers', [EmployerController::class, 'employerView'])->name('employer');

Route::get('/employers/form', [EmployerController::class, 'employerForm'])->name('employerForm');

Route::post('/employers/submit', [EmployerController::class, 'employerSubmit'])->name('employerSubmit');

Route::get('employer/update/{id}', [EmployerController::class, 'employerUpdate'])->name('employerUpdate');

Route::put('/employer/update/store/{id}', [EmployerController::class, 'employerStore'])->name('employerStore');



// -----------------------------Job Posting routes---------------------------//
Route::get('/jobs', [JobPostController::class, 'jobPostView'])->name('jobPost');

Route::get('/job-post/form', [JobPostController::class, 'jobPostForm'])->name('jobPostForm');

Route::post('job-post/submit', [JobPostController::class, 'jobPostSubmit'])->name('jobPostSubmit');

Route::get('/job-post/update/{id}', [JobPostController::class, 'jobPostUpdate'])->name('jobPostUpdate');

Route::put('/job-post/update/store/{id}', [JobPostController::class, 'jobPostStore'])->name('jobPostStore');



// -----------------------------Categories routes---------------------------//
Route::get('/categories', [CategoryController::class, 'categoryView'])->name('category');

Route::get('/categories/form', [CategoryController::class, 'categoryForm'])->name('categoryForm');

Route::post('/categories/submit', [CategoryController::class, 'categorySubmit'])->name('categorySubmit');

Route::get('/categories/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('categoryUpdate');

Route::put('/categories/update/store/{id}', [CategoryController::class, 'categoryStore'])->name('categoryStore');



// -----------------------------Exam routes---------------------------//
Route::get('/exam', [ExamController::class, 'examView'])->name('exam');

Route::get('/exam/form', [ExamController::class, 'examForm'])->name('examForm');

Route::post('/exam/submit', [ExamController::class, 'examSubmit'])->name('examSubmit');
