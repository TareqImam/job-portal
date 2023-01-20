<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobPost;

class JobPostController extends Controller
{
    public function jobPostView()
    {
        $jobPost = JobPost::with('user')->with('category')->OrderBy('id', 'desc')->paginate(5);
        return view('backend.pages.jobs.jobs', compact('jobPost'));
    }

    public function jobPostSingleView($id)
    {
        $jobPost = JobPost::with('user')->with('category')->find($id);
        return view('backend.pages.jobs.jobPostSingleView', compact('jobPost'));
    }
}
