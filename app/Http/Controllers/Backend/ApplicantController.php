<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function applicantView()
    {
        $applicant = Applicant::OrderBy('id', 'desc')->paginate(5);
        // dd($applicant);
        return view('backend.pages.applicants.applicants', compact('applicant'));
    }

    public function applicantForm()
    {
        return view('backend.pages.applicants.applicantForm');
    }

    public function applicantSubmit(Request $request)
    {
        // dd($request->all());
        Applicant::create([
            'applicantName' => $request->applicantName,
            'applicantEmail' => $request->applicantEmail,
            'applicantPassword' => $request->applicantPassword,
        ]);
        return redirect()->route('applicant');
    }

    public function applicantUpdate($id)
    {
        $applicant = Applicant::find($id);
        return view('backend.pages.applicants.applicantUpdate', compact('applicant'));
    }

    public function applicantStore(Request $request, $id)
    {
        $applicant = Applicant::find($id);
        $applicant->update([
            'applicantName' => $request->applicantName,
            'applicantEmail' => $request->applicantEmail,
            'applicantPassword' => $request->applicantPassword,
        ]);
        return redirect()->route('applicant');
    }

    public function applicantDelete($id)
    {
        $applicant = Applicant::find($id)->delete();
        return redirect()->back();
    }
}
