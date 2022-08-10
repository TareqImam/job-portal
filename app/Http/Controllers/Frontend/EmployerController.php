<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Exam;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Category;
use App\Models\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
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
        $user = User::all();
        return view('frontend.profile.employer.profile.dashboard.dashboard', compact('user'));
    }

    public function editEmployer($id)
    {
        $user = User::find($id);
        return view('frontend.profile.employer.profile.dashboard.editEmployer', compact('user'));
    }

    public function storeEmployer(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $employerImage = $request->file('image');
            $renameEmployerImage = "employer_" . rand(0, 100000) . date('Ymdhis') . "." . $employerImage->getClientOriginalExtension();
            $employerImage->storeAs('employer', $renameEmployerImage);
        }

        if ($request->hasFile('companyImage')) {
            $companyImage = $request->file('companyImage');
            $renameCompanyImage = "company_" . rand(0, 100000) . date('Ymdhis') . "." . $companyImage->getClientOriginalExtension();
            $companyImage->storeAs('company', $renameCompanyImage);
        }


        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'employerImage' => $renameEmployerImage,
            'companyName' => $request->companyName,
            'companyImage' => $renameCompanyImage,
            'companyWeb' => $request->companyWeb,
            'companyEmail' => $request->companyEmail,
            'companyDescription' => $request->companyDescription,
        ]);

        return redirect()->route('employerPanel');
    }

















    // ------------------------------Job methods start-------------------------- //

    public function employerJobs()
    {
        $jobPost = JobPost::where('user_id', auth()->user()->id)->get();
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
            'user_id' => auth()->user()->id,
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

    // ------------------------------Job methods start-------------------------- //














    // ------------------------------Exam methods start------------------------------- //

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

        if ($request->hasFile('questionFile')) {
            $file = $request->file('questionFile');
            $fileRename = "question_" . rand(0, 1000) . date('Ymdhis') . "." . $file->getClientOriginalExtension();
            $file->storeAs('question', $fileRename);
        }

        Exam::create([
            'examName' => $request->examName,
            'examSet' => $request->examSet,
            'examType' => $request->examType,
            'jobPostId' => $request->jobPostId,
            'questionFile' => $fileRename
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

    // ------------------------------Exam methods end------------------------------- //









    // ------------------------------Question methods start------------------------------- //

    public function examQuestion()
    {
        return view('frontend.profile.employer.profile.question.question');
    }

    // ------------------------------Question methods start------------------------------- //
}
