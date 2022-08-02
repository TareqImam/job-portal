<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function applicantView()
    {
        // $applicant = Applicant::OrderBy('id', 'desc')->paginate(5);
        $applicant = User::where('role', 'applicant')->OrderBy('id', 'desc')->paginate(5);
        // dd($applicant);
        return view('backend.pages.applicants.applicants', compact('applicant'));
    }

    // public function applicantForm()
    // {
    //     return view('backend.pages.applicants.applicantForm');
    // }

    // public function applicantSubmit(Request $request)
    // {
    //     $request->validate([
    //         'applicantName' => 'required',
    //         'applicantEmail' => 'required',
    //         'applicantPassword' => 'required',
    //     ]);

    //     $applicantImage = null;
    //     if ($request->hasfile('applicantImage')) {
    //         $applicantImage = date('Ymdhsis') . '.' . $request->file('applicantImage')->getClientOriginalExtension();
    //         $request->file('applicantImage')->storeAs('/uploads/applicants', $applicantImage);
    //     }

    //     Applicant::create([
    //         'applicantName' => $request->applicantName,
    //         'applicantEmail' => $request->applicantEmail,
    //         'applicantPassword' => $request->applicantPassword,
    //         'applicantImage' => $applicantImage
    //     ]);
    //     return redirect()->route('applicant');
    // }

    // public function applicantUpdate($id)
    // {
    //     $applicant = Applicant::find($id);
    //     return view('backend.pages.applicants.applicantUpdate', compact('applicant'));
    // }

    // public function applicantStore(Request $request, $id)
    // {
    //     $request->validate([
    //         'applicantName' => 'required',
    //         'applicantEmail' => 'required',
    //         'applicantPassword' => 'required',
    //     ]);

    //     $applicantImage = null;
    //     if ($request->hasfile('applicantImage')) {
    //         $applicantImage = date('Ymdhsis') . '.' . $request->file('applicantImage')->getClientOriginalExtension();
    //         $request->file('applicantImage')->storeAs('/uploads/applicants', $applicantImage);
    //     }

    //     $applicant = Applicant::find($id);
    //     $applicant->update([
    //         'applicantName' => $request->applicantName,
    //         'applicantEmail' => $request->applicantEmail,
    //         'applicantPassword' => $request->applicantPassword,
    //         'applicantImage' => $applicantImage
    //     ]);
    //     return redirect()->route('applicant');
    // }

    // public function applicantDelete($id)
    // {
    //     $applicant = Applicant::find($id)->delete();
    //     return redirect()->back();
    // }

    public function applicantSingleView($id)
    {
        $applicant = User::where('role', 'applicant')->find($id);
        return view('backend.pages.applicants.applicantSingleView', compact('applicant'));
    }
}
