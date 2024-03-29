<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\JobPost;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function examview()
    {
        $exam = Exam::with('jobPost')->OrderBy('id', 'desc')->paginate(5);
        return view('backend.pages.exams.exams', compact('exam'));
    }

    public function examForm()
    {
        $jobPost = JobPost::all();
        return view('backend.pages.exams.examForm', compact('jobPost'));
    }

    public function examSubmit(Request $request)
    {
        $request->validate([
            'examName' => 'required',
            'examSet' => 'required',
            'examType' => 'required',
            'jobPostId' => 'required'
        ]);

        Exam::create([
            'examName' => $request->examName,
            'examSet' => $request->examSet,
            'examType' => $request->examType,
            'jobPostId' => $request->jobPostId
        ]);
        return redirect()->route('exam');
    }

    public function examUpdate($id)
    {
        $exam = Exam::find($id);
        $jobPost = JobPost::all();
        return view('backend.pages.exams.examUpdate', compact('exam', 'jobPost'));
    }

    public function examStore(Request $request, $id)
    {
        $exam = Exam::find($id);
        $exam->update([
            'examName' => $request->examName,
            'examSet' => $request->examSet,
            'examType' => $request->examType,
            'jobPostId' => $request->jobPostId
        ]);
        return redirect()->route('exam');
    }

    public function examDelete($id)
    {
        $exam = Exam::find($id)->delete();
        return redirect()->back();
    }

    public function examSingleView($id)
    {
        $exam = Exam::with('jobPost')->find($id);
        return view('backend.pages.exams.examSingleView', compact('exam'));
    }
}
