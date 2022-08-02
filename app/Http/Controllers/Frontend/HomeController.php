<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\JobPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $category = Category::with('jobs')->get();
        $jobPost = JobPost::all();
        return view('frontend.fixed.main', compact('category', 'jobPost'));
    }
}
