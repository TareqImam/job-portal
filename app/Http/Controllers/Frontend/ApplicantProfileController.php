<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicantProfileController extends Controller
{
    public function applicantPanel()
    {
        return view('frontend.profile.applicant.profile.profile.profile');
    }

    public function myJobs()
    {
        return view('frontend.profile.applicant.profile.job.jobs');
    }

    public function myExam()
    {
        return view('frontend.profile.applicant.profile.exam.exams');
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
            'applicantAge' => $request->applicantAge,
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
