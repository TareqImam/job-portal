<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MasterController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;
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

Route::get('/', [MasterController::class, 'masterview'])->name('master');

/* ------------------ admin panel pages------------------ */
Route::get('/dashboard', [DashboardController::class, 'dashboardview'])->name('dashboard');
Route::get('/admin', [AdminController::class, 'adminview'])->name('admin');
Route::get('/users', [UserController::class, 'userview'])->name('user');
Route::get('/employers', [EmployerController::class, 'employerview'])->name('employer');
Route::get('/jobs', [JobPostController::class, 'jobpostview'])->name('jobPost');
Route::get('/categories', [CategoryController::class, 'categoryview'])->name('category');
Route::get('/exam', [ExamController::class, 'examview'])->name('exam');
