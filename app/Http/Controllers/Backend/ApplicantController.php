<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;

class ApplicantController extends Controller
{
    public function applicantView()
    {
        $applicant = User::where('role', 'applicant')->OrderBy('id', 'desc')->paginate(5);
        return view('backend.pages.applicants.applicants', compact('applicant'));
    }

    public function applicantSingleView($id)
    {
        $applicant = User::where('role', 'applicant')->find($id);
        return view('backend.pages.applicants.applicantSingleView', compact('applicant'));
    }
}
