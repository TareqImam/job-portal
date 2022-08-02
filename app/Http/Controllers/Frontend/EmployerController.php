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
            'password' => bcrypt($request->employerPassword),
            'role' => $request->role
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

    // ------------------------------Job methods-------------------------- //

    public function employerJobs()
    {
        $jobPost = JobPost::all();
        return view('frontend.profile.employer.profile.jobs.job', compact('jobPost'));
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
            'jobPostType' => 'required',
            'jobPostVacancy' => 'required',
            'jobPostSalary' => 'required',
        ]);

        JobPost::with('category')->with('employer')->create([
            'jobPostName' => $request->jobPostName,
            'categoryId' => $request->categoryId,
            'jobPostType' => $request->jobPostType,
            'jobPostVacancy' => $request->jobPostVacancy,
            'jobPostSalary' => $request->jobPostSalary,
            'jobPostLocation' => $request->jobPostLocation,
            'jobPostDescription' => $request->jobPostDescription
        ]);
        return redirect()->route('employerJobs');
    }

    public function jobUpdate($id)
    {
        $jobPost = JobPost::find($id);
        $category = Category::all();
        $employer = Employer::all();
        return view('frontend.profile.employer.profile.jobs.updateJob', compact('jobPost', 'category', 'employer'));
    }

    public function updateStore(Request $request, $id)
    {
        $jobPost = JobPost::with('category')->with('employer')->find($id);
        $jobPost->update([
            'jobPostName' => $request->jobPostName,
            'categoryId' => $request->categoryId,
            'jobPostType' => $request->jobPostType,
            'jobPostVacancy' => $request->jobPostVacancy,
            'jobPostLocation' => $request->jobPostLocation,
            'jobPostDescription' => $request->jobPostDescription
        ]);
        return redirect()->route('employerJobs');
    }

    public function jobDelete($id)
    {
        $jobPost = JobPost::find($id)->delete();
        return redirect()->back();
    }

    public function singleView($id)
    {
        $jobPost = JobPost::with('employer')->with('category')->find($id);
        return view('frontend.profile.employer.profile.jobs.singleView', compact('jobPost'));
    }

    // ------------------------------Exam methods------------------------------- //

    public function employerExams()
    {
        $exam = Exam::all();
        return view('frontend.profile.employer.profile.exam.postExam', compact('exam'));
    }

    public function addExam()
    {
        $jobPost = JobPost::all();
        return view('frontend.profile.employer.profile.exam.addExam', compact('jobPost'));
    }

    public function submitExam(Request $request)
    {
        $request->validate([
            'examName' => 'required',
            'examSet' => 'required',
            'examType' => 'required',
            'jobPostId' => 'required'
        ]);

        Exam::create([
            'examName' => $request->examName,
            'examSet' => $request->examSet,
            'examType' => $request->examType,
            'jobPostId' => $request->jobPostId
        ]);
        return redirect()->route('employerExams');
    }

    public function updateExam($id)
    {
        $exam = Exam::find($id);
        $jobPost = JobPost::all();
        return view('frontend.profile.employer.profile.exam.updateExam', compact('exam', 'jobPost'));
    }

    public function storeExam(Request $request, $id)
    {
        $request->validate([
            'examName' => 'required',
            'examSet' => 'required',
            'examType' => 'required',
            'jobPostId' => 'required'
        ]);

        $exam = Exam::with('jobPost')->find($id);
        $exam->update([
            'examName' => $request->examName,
            'examSet' => $request->examSet,
            'examType' => $request->examType,
            'jobPostId' => $request->jobPostId
        ]);
        return redirect()->route('employerExams');
    }

    public function deleteExam($id)
    {
        $exam = Exam::find($id)->delete();
        return redirect()->back();
    }

    public function singleViewE($id)
    {
        $exam = Exam::with('jobPost')->find($id);
        return view('frontend.profile.employer.profile.exam.singleView', compact('exam'));
    }
}
