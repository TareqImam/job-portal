<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\JobPost;
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
        $category = Category::with('jobs')->find($id);
        $jobPost = JobPost::with('category')->find($id);
        return view('frontend.pages.jobs.jobDetails', compact('category', 'jobPost'));
    }
}
