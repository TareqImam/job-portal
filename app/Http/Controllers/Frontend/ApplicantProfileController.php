<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantProfileController extends Controller
{
    public function applicantPanel()
    {
        return view('frontend.profile.applicant.profile.profile');
    }

    public function myJobs()
    {
        return view('frontend.profile.applicant.profile.jobs');
    }
}
