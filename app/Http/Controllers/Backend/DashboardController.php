<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use App\Models\Exam;
use App\Models\JobPost;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $aEmployer = User::where('role', 'employer')->count();
        $aApplicant = User::where('role', 'applicant')->count();
        $category = Category::count();
        $jobPost = JobPost::count();
        $exam = Exam::count();
        $applyJob = ApplyJob::count();
        return view('backend.pages.dashboard.dashboard', compact('aEmployer', 'aApplicant', 'category', 'jobPost', 'exam', 'applyJob'));
    }
}
