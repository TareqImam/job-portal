<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    public function employerView()
    {
        $employer = User::where('role', 'employer')->OrderBy('id', 'desc')->paginate(5);
        return view('backend.pages.employers.employers', compact('employer'));
    }

    public function employerSingleView($id)
    {
        $employer = User::where('role', 'employer')->find($id);
        return view('backend.pages.employers.employerSingleView', compact('employer'));
    }
    public function employerApprove($id){
        $approve=User::find($id);
        $approve->update([
            'status'=>'approve'
        ]);
        return redirect()->back()->with('success','Employer Approve');
    }
}
