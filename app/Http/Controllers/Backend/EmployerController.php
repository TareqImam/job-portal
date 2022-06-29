<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function employerView()
    {
        $employer = Employer::all();
        // dd($employer);
        return view('backend.pages.employers.employers', compact('employer'));
    }

    public function employerForm()
    {
        return view('backend.pages.employers.employerForm');
    }

    public function employerSubmit(Request $request)
    {
        // dd($request->all());
        Employer::create([
            'employerName' => $request->employerName,
            'employerEmail' => $request->employerEmail,
            'employerPassword' => $request->employerPassword,
            'employerCategory' => $request->employerCategory,
            'employerType' => $request->employerType
        ]);
        $employer = Employer::all();
        return redirect()->route('employer');
    }

    public function employerUpdate($id)
    {
        $employer = Employer::find($id);
        return view('backend.pages.employers.employerUpdate', compact('employer'));
    }

    public function employerStore(Request $request, $id)
    {
        $employer = Employer::find($id);
        $employer->update([
            'employerName' => $request->employerName,
            'employerEmail' => $request->employerEmail,
            'employerPassword' => $request->employerPassword,
            'employerCategory' => $request->employerCategory,
            'employerType' => $request->employerType
        ]);
        return redirect()->route('employer');
    }

    public function employerDelete($id)
    {
        $employer = Employer::find($id)->delete();
        return redirect()->back();
    }
}
