<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ApplicantAnswer;
use App\Models\ApplyJob;
use App\Models\Exam;
use App\Models\Question;

class ApplicantProfileController extends Controller
{
    public function applicantPanel()
    {
        return view('frontend.profile.applicant.profile.profile.profile');
    }

    public function myJobs()
    {
        $applyJob = ApplyJob::with('jobPost')->where('user_id', auth()->user()->id)->get();
        return view('frontend.profile.applicant.profile.job.jobs', compact('applyJob'));
    }

    public function cancelJob($id)
    {
        $applyJob = ApplyJob::find($id)->delete();
        return redirect()->back();
    }

    public function myExam()
    {
        $applyJob = ApplyJob::where('user_id', auth()->user()->id)->get();
        return view('frontend.profile.applicant.profile.exam.exams', compact('applyJob'));
    }

    public function participate($id)
    {
        $exam = Exam::find($id);
        $question = Question::where('exam_id', $id)->with('option')->get();
        return view('frontend.profile.applicant.profile.exam.participate', compact('exam', 'question'));
    }

    public function myAnswer(Request $request, $id)
    {
        foreach ($request->answer as $key => $ans) {
            $q = Question::find($key);
            $is_correct = 0;

            if ($q->answer == $ans[0]) {
                $is_correct = 1;
            }

            ApplicantAnswer::create([
                'user_Id' => auth()->user()->id,
                'exam_Id' => Exam::find($id)->id,
                'question_Id' => $key,
                'answer' => $ans[0],
                'mark' => $is_correct
            ]);
        }

        return redirect()->route('myExam');
    }


    public function update($id)
    {
        $category = Category::all();
        $user = User::find($id);
        return view('frontend.profile.applicant.profile.profile.update', compact('category', 'user'));
    }

    public function updateStoreA(Request $request, $id)
    {
        if ($request->hasFile('applicantImage')) {
            $applicantImage = $request->file('applicantImage');
            $renameApplicantImage = "applicant_" . rand(0, 100000) . date('Ymdhis') . "." . $applicantImage->getClientOriginalExtension();
            $applicantImage->storeAs('applicant', $renameApplicantImage);
        }

        if ($request->hasFile('applicantCV')) {
            $applicantCV = $request->file('applicantCV');
            $renameApplicantCV = "applicant_" . rand(0, 100000) . date('Ymdhis') . "." . $applicantCV->getClientOriginalExtension();
            $applicantCV->storeAs('applicant', $renameApplicantCV);
        }

        $user = User::find($id);
        $user->update([
            'applicantImage' => $renameApplicantImage,
            'name' => $request->name,
            'email' => $request->email,
            'applicantPhone' => $request->applicantPhone,
            'applicantDate' => $request->applicantDate,
            'applicantAge' => Carbon::parse($request->applicantDate)->age,
            'applicatnGender' => $request->applicatnGender,
            'category_id' => $request->category_id,
            'applicantTitle' => $request->applicantTitle,
            'applicantExperience' => $request->applicantExperience,
            'applicantSalary' => $request->applicantSalary,
            'applicantExpectedSalary' => $request->applicantExpectedSalary,
            'applicantNationality' => $request->applicantNationality,
            'applicantEducation' => $request->applicantEducation,
            'applicantCV' => $renameApplicantCV
        ]);

        return redirect()->route('applicantPanel');
    }
}
