<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function jobPostView()
    {
        $jobPost = JobPost::all();
        // dd($jobPost);
        return view('backend.pages.jobs.jobs', compact('jobPost'));
    }

    public function jobPostForm()
    {
        return view('backend.pages.jobs.jobForm');
    }
    
    public function jobPostSubmit(Request $request)
    {
        // dd($request->all());
        JobPost::create([
            'jobPostName' => $request->jobPostName,
            'jobPostType' => $request->jobPostType,
            'jobPostVacancy' => $request->jobPostVacancy,
            'jobPostPosition' => $request->jobPostPosition,
            'jobPostLocation' => $request->jobPostLocation,
            'jobPostDescription' => $request->jobPostDescription
        ]);
        return redirect()->route('jobPost');
    }
}
