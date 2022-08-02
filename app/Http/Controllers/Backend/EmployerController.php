<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
    public function employerView()
    {
        $employer = User::where('role', 'employer')->OrderBy('id', 'desc')->paginate(5);
        return view('backend.pages.employers.employers', compact('employer'));
    }

    // public function employerForm()
    // {
    //     $category = Category::all();
    //     return view('backend.pages.employers.employerForm', compact('category'));
    // }

    // public function employerSubmit(Request $request)
    // {
    //     // dd($request->all());
    //     $request->validate([
    //         'employerName' => 'required',
    //         'employerEmail' => 'required',
    //         'employerPassword' => 'required',
    //         'categoryId' => 'required',
    //         'employerType' => 'required'
    //     ]);

    //     $employerImage = null;
    //     if ($request->hasFile('employerImage')) {
    //         $employerImage = date('Ymhsis') . '.' . $request->file('employerImage')->getClientOriginalExtension();
    //         $request->file('employerImage')->storeAs('/uploads/employers', $employerImage);
    //     }

    //     Employer::create([
    //         'employerName' => $request->employerName,
    //         'employerEmail' => $request->employerEmail,
    //         'employerPassword' => $request->employerPassword,
    //         'categoryId' => $request->categoryId,
    //         'employerType' => $request->employerType,
    //         'employerImage' => $employerImage
    //     ]);
    //     $employer = Employer::all();
    //     return redirect()->route('employer');
    // }

    // public function employerUpdate($id)
    // {
    //     $employer = Employer::find($id);
    //     $category = Category::all();
    //     return view('backend.pages.employers.employerUpdate', compact('employer', 'category'));
    // }

    // public function employerStore(Request $request, $id)
    // {
    //     $employer = Employer::find($id);
    //     $employer->update([
    //         'employerName' => $request->employerName,
    //         'employerEmail' => $request->employerEmail,
    //         'employerPassword' => $request->employerPassword,
    //         'categoryId' => $request->categoryId,
    //         'employerType' => $request->employerType
    //     ]);
    //     return redirect()->route('employer');
    // }

    // public function employerDelete($id)
    // {
    //     $employer = Employer::find($id)->delete();
    //     return redirect()->back();
    // }

    public function employerSingleView($id)
    {
        $employer = User::where('role', 'employer')->find($id);
        return view('backend.pages.employers.employerSingleView', compact('employer'));
    }
}
