<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Exam;
use App\Models\User;
use App\Models\JobPost;
use App\Models\ApplyJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyJobController extends Controller
{
    public function jobApply($id)
    {
        $applyJob = ApplyJob::where('jobPost_Id', $id)->where('user_id', auth()->user()->id)->first();
        if ($applyJob == null) {
            ApplyJob::create([
                'user_id' => auth()->user()->id,
                'jobPost_Id' => $id,
                'employer_id' => JobPost::find($id)->user_id,
                'exam_Id' => Exam::find($id)->id
            ]);
            return redirect()->route('myJobs');
        } else {
            return redirect()->back()->with('success', 'Already Applied');
        }
    }
}
