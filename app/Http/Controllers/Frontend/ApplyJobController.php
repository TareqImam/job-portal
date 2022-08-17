<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use Illuminate\Http\Request;

class ApplyJobController extends Controller
{
    public function jobApply($id)
    {
        // dd("ok");
        ApplyJob::create([
            'user_id' => auth()->user()->id,
            'jobPost_Id' => $id
        ]);
        return redirect()->route('myJobs');
    }
}
