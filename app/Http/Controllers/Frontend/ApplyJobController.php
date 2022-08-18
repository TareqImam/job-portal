<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use App\Models\JobPost;
use Illuminate\Http\Request;

class ApplyJobController extends Controller
{
    public function jobApply($id)
    {
        ApplyJob::create([
            'user_id' => auth()->user()->id,
            'jobPost_Id' => $id,
            'employer_id' => JobPost::first()->user->id
        ]);
        return redirect()->route('myJobs');
    }
}
