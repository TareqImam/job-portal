<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use App\Models\Category;
use App\Models\JobPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobListController extends Controller
{
    public function jobListView()
    {
        $category = Category::all();
        $jobPost = JobPost::all();
        return view('frontend.pages.jobs.jobListing', compact('category', 'jobPost'));
    }

    public function singleViewJ($id)
    {
        $jobPost = JobPost::with('category')->with('user')->find($id);
        $applyJob = ApplyJob::where('user_id', auth()->user()->id)->get();
        // dd($applyJob);
        return view('frontend.pages.jobs.jobDetails', compact('jobPost', 'applyJob'));
    }

    // public function jobApply($id)
    // {
    //     $user = User::find($id);
    //     $jobPost = JobPost::with('user')->find($id);
    //     return view('frontend.pages.jobs.jobApply', compact('jobPost'));
    // }
}
