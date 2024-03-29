<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Exam;
use App\Models\User;
use App\Models\JobPost;
use App\Models\Category;
use App\Models\Employer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplicantAnswer;
use App\Models\ApplyJob;
use App\Models\Option;
use App\Models\Question;
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

        return redirect()->route('home')->with('success', 'Registration successful');
    }

    public function loginEmployer()
    {
        return view('login.loginEmployer');
    }

    public function loginE(Request $request)
    {
        $employee=User::where( 'email',$request->employerEmail)->first();
       if($employee != null){
            if ($employee->status === 'approve') {
                Auth::attempt([
                    'email' => $request->employerEmail,
                    'password' => $request->employerPassword
                ]);

                return redirect()->route('employerPanel')->with('success', 'Logged in successfully');
            } else {
                return redirect()->back()->with('success', 'Your account not Approve yet');
            }
       } else {
            return redirect()->back()->with('success', 'Your account not registered yet');
        }

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
            'jobPostDescription' => $request->jobPostDescription,
            'deadline' => $request->deadline
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
        $jobPost = JobPost::with('category')->find($id);
        return view('frontend.profile.employer.profile.jobs.singleView', compact('jobPost'));
    }

    // ------------------------------Job methods start-------------------------- //














    // ------------------------------Exam methods start------------------------------- //

    public function employerExams()
    {
        $exam = Exam::where('user_id', auth()->user()->id)->with('jobPost')->get();
        return view('frontend.profile.employer.profile.exam.postExam', compact('exam'));
    }

    public function addExam()
    {
        $jobPost = JobPost::where('user_id', auth()->user()->id)->get();
        return view('frontend.profile.employer.profile.exam.addExam', compact('jobPost'));
    }

    public function submitExam(Request $request)
    {
        $request->validate([
            'examName' => 'required',
            'examType' => 'required',
            'jobPostId' => 'required'
        ]);

        Exam::create([
            'examName' => $request->examName,
            'examType' => $request->examType,
            'user_id' => auth()->user()->id,
            'jobPostId' => $request->jobPostId,
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

        if ($request->hasFile('questionFile')) {
            $file = $request->file('questionFile');
            $fileRename = "question_" . rand(0, 1000) . date('Ymdhis') . "." . $file->getClientOriginalExtension();
            $file->storeAs('question', $fileRename);
        }

        $exam = Exam::with('jobPost')->find($id);
        $exam->update([
            'examName' => $request->examName,
            'examSet' => $request->examSet,
            'examType' => $request->examType,
            'jobPostId' => $request->jobPostId,
            'questionFile' => $fileRename
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
        $questions = Question::where('exam_id', $id)->get();
        $option = Option::where('question_Id', $id)->get();
        return view('frontend.profile.employer.profile.exam.singleView', compact('exam', 'questions', 'option'));
    }

    // ------------------------------Exam methods end------------------------------- //






    // ------------------------------Candidate methods start------------------------------- //

    public function candidates()
    {
        $applyJob = ApplyJob::where('employer_id', auth()->user()->id)->get();

        return view('frontend.profile.employer.profile.candidate.candidate', compact('applyJob'));
    }

    public function candidatesSingle($id)
    {
        $applyJob = ApplyJob::find($id);

        $user = User::find($applyJob->user_id);

        $totalQuestion = Question::where('exam_id', $applyJob->exam_Id)->count();


        $obtainMarks = ApplicantAnswer::where('exam_Id', $applyJob->exam_Id)
            ->where('mark', 1)->where('user_Id', $user->id)->count();

        return view('frontend.profile.employer.profile.candidate.single', compact('applyJob', 'user', 'totalQuestion', 'obtainMarks'));
    }

    public function approve($id)
    {
        $applyJob = ApplyJob::find($id);
        $applyJob->update([
            'status' => 'Approved'
        ]);
        return redirect()->back()->with('success', 'Applicant Approved');
    }

    public function reject($id)
    {
        $applyJob = ApplyJob::find($id);
        $applyJob->update([
            'status' => 'Rejected'
        ]);
        return redirect()->back()->with('success', 'Applicant rejected');
    }

    public function download(Request $request, $file)
    {
        return response()->download(public_path('images/applicant/cv/' . $file));
    }



    // ------------------------------Candidate methods end------------------------------- //






    // ------------------------------Question methods start------------------------------- //


    public function singleQuestion($id)
    {
        $exam = Exam::find($id);
        return view('frontend.profile.employer.profile.question.question', compact('exam'));
    }

    public function viewQuestion($id)
    {
        $exam = Exam::find($id);
        $question = Question::where('exam_id', $id)->with('option')->get();
        return view('frontend.profile.employer.profile.question.singleQuestion', compact('exam', 'question'));
    }

    public function singleSubmit(Request $request, $id)
    {
        $exam = Exam::find($id);

        $questions = Question::create([
            'question' => $request->question,
            'exam_Id' => $id,
            'answer' => $request->answer,
        ]);

        foreach ($request->option as $opt) {
            Option::create([
                'question_Id' => $questions->id,
                'option' => $opt
            ]);
        }

        return redirect()->route('singleViewE', $exam->id);
    }
    // ------------------------------Question methods start------------------------------- //
}
