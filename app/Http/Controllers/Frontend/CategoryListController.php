<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\JobPost;
use Illuminate\Http\Request;

class CategoryListController extends Controller
{
    public function categoryList()
    {
        $category = Category::all();
        return view('frontend.pages.categories.allCategories', compact('category'));
    }

    public function singleCategory($id)
    {
        $jobs = JobPost::where('categoryID', $id)->get();
        $category = Category::find($id);
        // dd($jobs);
        return view('frontend.pages.categories.singleCategory', compact('jobs', 'category'));
    }
}
