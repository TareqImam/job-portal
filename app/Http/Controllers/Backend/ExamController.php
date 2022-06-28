<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function examview()
    {
        $exam = Exam::all();
        return view('backend.pages.exams.exams', compact('exam'));
    }
    public function examForm()
    {
        return view('backend.pages.exams.examForm');
    }
    public function examSubmit(Request $request)
    {
        // dd($request);
        Exam::create([
            'examName' => $request->examName,
            'examSet' => $request->examSet,
            'examType' => $request->examType
        ]);
        return redirect()->route('exam');
    }
}
