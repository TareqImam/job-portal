<?php

use Illuminate\Support\Facades\Route;

/* ------------------------------------------------ */
/* ------------------ Admin Panel------------------ */
/* ------------------------------------------------ */

use App\Http\Controllers\Backend\MasterController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ApplicantController;
use App\Http\Controllers\Backend\EmployerController;
use App\Http\Controllers\Backend\JobPostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ExamController;

/* ------------------------------------------------ */
/* ------------------ Front Panel------------------ */
/* ------------------------------------------------ */

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JobListController;
use App\Http\Controllers\Frontend\ApplicantController as FrontendApplicant;
use App\Http\Controllers\Frontend\EmployerController as FrontendEmployer;

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



/* ------------------------------------------------ */
/* ------------------ Admin Panel------------------ */
/* ------------------------------------------------ */


/* ------------------ master view------------------ */

Route::get('/admin', [MasterController::class, 'masterview'])->name('master');

/* ------------------ admin panel pages------------------ */
Route::get('/dashboard', [DashboardController::class, 'dashboardview'])->name('dashboard');



// -----------------------------Applicants routes---------------------------//
Route::get('/applicant', [ApplicantController::class, 'applicantView'])->name('applicant');

Route::get('/applicant/form', [ApplicantController::class, 'applicantForm'])->name('applicantForm');

Route::post('/applicant/submit', [ApplicantController::class, 'applicantSubmit'])->name('applicantSubmit');

Route::get('/applcant/update/{id}', [ApplicantController::class, 'applicantUpdate'])->name('applicantUpdate');

Route::put('/applicant/update/store/{id}', [ApplicantController::class, 'applicantStore'])->name('applicantStore');

Route::get('/applicant/delete/{id}', [ApplicantController::class, 'applicantDelete'])->name('applicantDelete');

Route::get('/applicant/applicantSingleView/{id}', [ApplicantController::class, 'applicantSingleView'])->name('applicantSingleView');



// -----------------------------Employers routes---------------------------//
Route::get('/employers', [EmployerController::class, 'employerView'])->name('employer');

Route::get('/employers/form', [EmployerController::class, 'employerForm'])->name('employerForm');

Route::post('/employers/submit', [EmployerController::class, 'employerSubmit'])->name('employerSubmit');

Route::get('/employer/update/{id}', [EmployerController::class, 'employerUpdate'])->name('employerUpdate');

Route::put('/employer/update/store/{id}', [EmployerController::class, 'employerStore'])->name('employerStore');

Route::get('/employers/delete/{id}', [EmployerController::class, 'employerDelete'])->name('employerDelete');

Route::get('/employers/employerSingleView/{id}', [EmployerController::class, 'employerSingleView'])->name('employerSingleView');



// -----------------------------Job Posting routes---------------------------//
Route::get('/jobs', [JobPostController::class, 'jobPostView'])->name('jobPost');

Route::get('/job-post/form', [JobPostController::class, 'jobPostForm'])->name('jobPostForm');

Route::post('job-post/submit', [JobPostController::class, 'jobPostSubmit'])->name('jobPostSubmit');

Route::get('/job-post/update/{id}', [JobPostController::class, 'jobPostUpdate'])->name('jobPostUpdate');

Route::put('/job-post/update/store/{id}', [JobPostController::class, 'jobPostStore'])->name('jobPostStore');

Route::get('/job-post/delete/{id}', [JobPostController::class, 'jobPostDelete'])->name('jobPostDelete');

Route::get('/job-post/jobPostSingleView/{id}', [JobPostController::class, 'jobPostSingleView'])->name('jobPostSingleView');



// -----------------------------Categories routes---------------------------//
Route::get('/categories', [CategoryController::class, 'categoryView'])->name('category');

Route::get('/categories/form', [CategoryController::class, 'categoryForm'])->name('categoryForm');

Route::post('/categories/submit', [CategoryController::class, 'categorySubmit'])->name('categorySubmit');

Route::get('/categories/update/{id}', [CategoryController::class, 'categoryUpdate'])->name('categoryUpdate');

Route::put('/categories/update/store/{id}', [CategoryController::class, 'categoryStore'])->name('categoryStore');

Route::get('/categories/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('categoryDelete');

Route::get('/categories/categorySingleView/{id}', [CategoryController::class, 'categorySingleView'])->name('categorySingleView');



// -----------------------------Exam routes---------------------------//
Route::get('/exam', [ExamController::class, 'examView'])->name('exam');

Route::get('/exam/form', [ExamController::class, 'examForm'])->name('examForm');

Route::post('/exam/submit', [ExamController::class, 'examSubmit'])->name('examSubmit');

Route::get('/exam/update/{id}', [ExamController::class, 'examUpdate'])->name('examUpdate');

Route::put('/exam/update/store/{id}', [ExamController::class, 'examStore'])->name('examStore');

Route::get('/exam/delete/{id}', [ExamController::class, 'examDelete'])->name('examDelete');

Route::get('/exam/examSingleView/{id}', [ExamController::class, 'examSingleView'])->name('examSingleView');


/* ------------------------------------------------ */
/* ------------------ Admin Panel------------------ */
/* ------------------------------------------------ */





/* ------------------------------------------------ */
/* ------------------ Front Panel------------------ */
/* ------------------------------------------------ */

Route::get('/', [HomeController::class, 'home'])->name('home');


// -----------------------------Applicants routes---------------------------//
Route::get('/selectRegAs', [FrontendApplicant::class, 'selectRegAs'])->name('selectRegAs');

Route::get('/selectLoginAs', [FrontendApplicant::class, 'selectLoginAs'])->name('selectLoginAs');

Route::get('/selectApplicant', [FrontendApplicant::class, 'selectApplicant'])->name('selectApplicant');

Route::post('/registrationApplicant', [FrontendApplicant::class, 'registration'])->name('registrationApplicant');

Route::get('/loginApplicant', [FrontendApplicant::class, 'loginApplicant'])->name('loginApplicant');

Route::post('/user-login', [FrontendApplicant::class, 'login'])->name('login');

Route::get('/logout', [FrontendApplicant::class, 'logout'])->name('logout');


// -----------------------------Employer routes---------------------------//
Route::get('/selectEmployer', [FrontendEmployer::class, 'selectEmployer'])->name('selectEmployer');

Route::post('/registrationEmployer', [FrontendEmployer::class, 'registration'])->name('registrationEmployer');

Route::get('/loginEmployer', [FrontendEmployer::class, 'loginEmployer'])->name('loginEmployer');

Route::post('/employerLogin', [FrontendEmployer::class, 'loginE'])->name('employerLogin');


// -----------------------------Job List routes---------------------------//
Route::get('/jobList', [JobListController::class, 'jobListView'])->name('jobList');
