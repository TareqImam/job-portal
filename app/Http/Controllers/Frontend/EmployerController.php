<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Exam;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Category;
use App\Models\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    public function selectEmployer()
    {
        return view('login.registerEmployer');
    }

    public function registration(Request $request)
    {
        User::create([
            'name' => $request->employerName,
            'email' => $request->employerEmail,
            'password' => bcrypt($request->employerPassword)
        ]);

        return redirect()->route('home');
    }

    public function loginEmployer()
    {
        return view('login.loginEmployer');
    }

    public function loginE(Request $request)
    {
        Auth::attempt([
            'email' => $request->employerEmail,
            'password' => $request->employerPassword
        ]);

        return redirect()->route('employerPanel');
    }

    public function employerPanel()
    {
        return view('frontend.profile.employer.employer');
    }

    public function employerJobs()
    {
        $jobPost = JobPost::all();
        return view('frontend.profile.employer.profile.jobs.postJob', compact('jobPost'));
    }

    public function employerExams()
    {
        $exam = Exam::all();
        return view('frontend.profile.employer.profile.exam.postExam', compact('exam'));
    }

    public function addJob()
    {
        $category = Category::all();
        $employer = Employer::all();
        return view('frontend.profile.employer.profile.jobs.addJob', compact('category', 'employer'));
    }

    public function jobSubmit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'jobPostName' => 'required',
            'categoryId' => 'required',
            'employerId' => 'required',
            'jobPostType' => 'required',
            'jobPostVacancy' => 'required',
            'jobPostPosition' => 'required'
        ]);

        JobPost::create([
            'jobPostName' => $request->jobPostName,
            'categoryId' => $request->categoryId,
            'employerId' => $request->employerId,
            'jobPostType' => $request->jobPostType,
            'jobPostVacancy' => $request->jobPostVacancy,
            'jobPostPosition' => $request->jobPostPosition,
            'jobPostLocation' => $request->jobPostLocation,
            'jobPostDescription' => $request->jobPostDescription
        ]);
        return redirect()->route('employerJobs');
    }
}
