<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryListController extends Controller
{
    public function categoryList()
    {
        $category = Category::all();
        return view('frontend.pages.categories.allCategories', compact('category'));
    }
}
