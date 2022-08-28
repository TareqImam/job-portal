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
use App\Http\Controllers\Frontend\CategoryListController;
use App\Http\Controllers\Frontend\ApplicantProfileController;
use App\Http\Controllers\Frontend\ApplyJobController;
use App\Models\ApplyJob;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\App;

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

Route::get('/admin', [MasterController::class, 'login'])->name('login');

Route::post('/adminLogin', [MasterController::class, 'adminLogin'])->name('adminLogin');

Route::group(['middleware' => ['auth', 'checkAdmin'], 'prefix' => 'admin'], function () {
    /* ------------------ admin panel pages------------------ */
    Route::get('/dashboard', [DashboardController::class, 'dashboardView'])->name('dashboard');

    Route::get('/adminLogout', [MasterController::class, 'adminLogout'])->name('adminLogout');



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
});


/* ------------------------------------------------ */
/* ------------------ Admin Panel------------------ */
/* ------------------------------------------------ */











/* ------------------------------------------------ */
/* ------------------ Front Panel------------------ */
/* ------------------------------------------------ */

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/home/search/job', [HomeController::class, 'search'])->name('search');



// -----------------------------Applicants routes---------------------------//
Route::get('/selectRegAs', [FrontendApplicant::class, 'selectRegAs'])->name('selectRegAs');

Route::get('/selectLoginAs', [FrontendApplicant::class, 'selectLoginAs'])->name('selectLoginAs');

Route::get('/logout', [FrontendApplicant::class, 'logout'])->name('logout');



// -----------------------------Applicant Profile routes---------------------------//
Route::get('/selectApplicant', [FrontendApplicant::class, 'selectApplicant'])->name('selectApplicant');

Route::post('/registrationApplicant', [FrontendApplicant::class, 'registration'])->name('registrationApplicant');

Route::get('/loginApplicant', [FrontendApplicant::class, 'loginApplicant'])->name('loginApplicant');

Route::post('/user-login', [FrontendApplicant::class, 'loginA'])->name('applicantLogin');



Route::group(['middleware' => ['authApplicant', 'checkApplicant'], 'prefix' => 'applicant'], function () {

    Route::get('/applicantPanel', [ApplicantProfileController::class, 'applicantPanel'])->name('applicantPanel');

    Route::get('/myJobs', [ApplicantProfileController::class, 'myJobs'])->name('myJobs');

    Route::get('/myJobs/cancel/{id}', [ApplicantProfileController::class, 'cancelJob'])->name('cancel.job');

    Route::get('/myExam', [ApplicantProfileController::class, 'myExam'])->name('myExam');

    Route::get('/myExam/participate/{id}', [ApplicantProfileController::class, 'participate'])->name('participate');

    Route::post('/myExam/answer/{id}', [ApplicantProfileController::class, 'myAnswer'])->name('my.answer');




    // -----------------------------Update applicant profile-----------------------------//

    Route::get('/update/{id}', [ApplicantProfileController::class, 'update'])->name('update');

    Route::put('/update/store/{id}', [ApplicantProfileController::class, 'updateStoreA'])->name('updateStoreA');



    // -----------------------------Apply Job-----------------------------//

    Route::get('/job/apply/{id}', [ApplyJobController::class, 'jobApply'])->name('job.apply');
});











// -----------------------------Employer routes---------------------------//

Route::get('/selectEmployer', [FrontendEmployer::class, 'selectEmployer'])->name('selectEmployer');

Route::post('/registrationEmployer', [FrontendEmployer::class, 'registration'])->name('registrationEmployer');

Route::get('/loginEmployer', [FrontendEmployer::class, 'loginEmployer'])->name('loginEmployer');

Route::post('/employerLogin', [FrontendEmployer::class, 'loginE'])->name('employerLogin');



Route::group(['middleware' => ['authEmployer', 'checkEmployer'], 'prefix' => 'employer'], function () {

    Route::get('/employerPanel', [FrontendEmployer::class, 'employerPanel'])->name('employerPanel');

    Route::get('/edit/employer/{id}', [FrontendEmployer::class, 'editEmployer'])->name('editEmployer');

    Route::put('/edit/employer/store/{id}', [FrontendEmployer::class, 'storeEmployer'])->name('storeEmployer');


    // -----------------------------Employer routes(jobs)---------------------------//

    Route::get('/jobs', [FrontendEmployer::class, 'employerJobs'])->name('employerJobs');

    Route::get('/job/add', [FrontendEmployer::class, 'addJob'])->name('addJob');

    Route::post('/job/submit', [FrontendEmployer::class, 'jobSubmit'])->name('jobSubmit');

    Route::get('/job/update/{id}', [FrontendEmployer::class, 'jobUpdate'])->name('jobUpdate');

    Route::put('/job/store/{id}', [FrontendEmployer::class, 'updateStore'])->name('updateStore');

    Route::get('/job/delete/{id}', [FrontendEmployer::class, 'jobDelete'])->name('jobDelete');

    Route::get('/job/view/{id}', [FrontendEmployer::class, 'singleView'])->name('singleView');



    // -----------------------------Employer routes(exams)---------------------------//

    Route::get('/employerExams', [FrontendEmployer::class, 'employerExams'])->name('employerExams');

    Route::get('/exam/add', [FrontendEmployer::class, 'addExam'])->name('addExam');

    Route::post('/exam/submit', [FrontendEmployer::class, 'submitExam'])->name('submitExam');

    Route::get('/exam/update/{id}', [FrontendEmployer::class, 'updateExam'])->name('updateExam');

    Route::put('/exam/store/{id}', [FrontendEmployer::class, 'storeExam'])->name('storeExam');

    Route::get('/exam/delete/{id}', [FrontendEmployer::class, 'deleteExam'])->name('deleteExam');

    Route::get('/exam/view/{id}', [FrontendEmployer::class, 'singleViewE'])->name('singleViewE');




    // -----------------------------Employer routes(candiate)---------------------------//
    Route::get('/candidates', [FrontendEmployer::class, 'candidates'])->name('candidates');

    Route::get('/candidates/single/{id}', [FrontendEmployer::class, 'candidatesSingle'])->name('candidates.single');

    Route::get('/download/{file}', [FrontendEmployer::class, 'download'])->name('download');



    // -----------------------------Employer routes(question)---------------------------//
    // Route::get('/exam/questions', [FrontendEmployer::class, 'examQuestion'])->name('exam.question');

    Route::get('/exam/question/single-add/{id}', [FrontendEmployer::class, 'singleQuestion'])->name('single.question');

    Route::get('/exam/question/single-view/{id}', [FrontendEmployer::class, 'viewQuestion'])->name('view.question');

    Route::post('/exam/question/single-add/submit/{id}', [FrontendEmployer::class, 'singleSubmit'])->name('single.submit');
});








// -----------------------------Job List routes---------------------------//
Route::get('/job/list', [JobListController::class, 'jobListView'])->name('jobList');

Route::get('/job/view/details/{id}', [JobListController::class, 'singleViewJ'])->name('singleViewJ');

// Route::get('/job/post/apply/{id}', [JobListController::class, 'jobApply'])->name('jobApply');



// -----------------------------Catogories routes---------------------------//
Route::get('/category/list', [CategoryListController::class, 'categoryList'])->name('categoryList');

Route::get('/category/list/single/{id}', [CategoryListController::class, 'singleCategory'])->name('singleCategory');
