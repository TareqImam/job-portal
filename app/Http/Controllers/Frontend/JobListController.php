<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use App\Models\Category;
use App\Models\JobPost;

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
        if (auth()->user()) {
            $applyJob = ApplyJob::where('user_id', auth()->user()->id)->get();
            return view('frontend.pages.jobs.jobDetails', compact('jobPost', 'applyJob'));
        } else {
            return redirect()->back();
        }
    }
}
