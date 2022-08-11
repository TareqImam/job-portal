<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\JobPost;
use App\Models\User;
use Illuminate\Http\Request;

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
        $user = User::find($id);
        $category = Category::with('jobs')->find($id);
        $jobPost = JobPost::with('category')->with('user')->find($id);
        return view('frontend.pages.jobs.jobDetails', compact('category', 'jobPost', 'user'));
    }

    public function jobApply($id)
    {
        $user = User::find($id);
        $jobPost = JobPost::with('user')->find($id);
        return view('frontend.pages.jobs.jobApply', compact('jobPost'));
    }
}
