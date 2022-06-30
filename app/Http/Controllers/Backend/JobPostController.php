<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobPost;
use Illuminate\Http\Request;

class JobPostController extends Controller
{
    public function jobPostView()
    {
        $jobPost = JobPost::paginate(5);
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

    public function jobPostUpdate($id)
    {
        $jobPost = JobPost::find($id);
        return view('backend.pages.jobs.jobUpdate', compact('jobPost'));
    }

    public function jobPostStore(Request $request, $id)
    {
        $jobPost = JobPost::find($id);
        $jobPost->update([
            'jobPostName' => $request->jobPostName,
            'jobPostType' => $request->jobPostType,
            'jobPostVacancy' => $request->jobPostVacancy,
            'jobPostPosition' => $request->jobPostPosition,
            'jobPostLocation' => $request->jobPostLocation,
            'jobPostDescription' => $request->jobPostDescription
        ]);
        return redirect()->route('jobPost');
    }

    public function jobPostDelete($id)
    {
        $jobPost = JobPost::find($id)->delete();
        return redirect()->back();
    }
}
