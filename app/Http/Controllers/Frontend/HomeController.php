<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\JobPost;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user = User::all();
        $category = Category::with('jobs')->get()->take(4);
        $jobPost = JobPost::all()->take(2);
        return view('frontend.fixed.main', compact('category', 'jobPost', 'user'));
    }

    public function search(Request $request)
    {
        $key = null;
        if (request()->search) {
            $key = request()->search;
            $jobPost = JobPost::where('jobPostName', 'LIKE', '%' . $key . '%')
                ->orWhere('jobPostLocation', 'LIKE', '%' . $key . '%')
                ->get();
            return view('frontend.pages.jobs.jobSearch', compact('jobPost', 'key'));
        }
        $jobPost = JobPost::all();
        return view('frontend.pages.jobs.jobSearch', compact('jobPost'));
    }
}
