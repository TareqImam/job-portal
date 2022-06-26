<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryView()
    {
        $category = Category::all();
        return view('backend.pages.categories.categories', compact('category'));
    }
    public function categoryForm()
    {
        return view('backend.pages.categories.categoryForm');
    }
    public function categorySubmit(Request $request)
    {
        Category::create([
            'categoryName' => $request->categoryName,
            'categoryDescription' => $request->categoryDescription,
        ]);
        return redirect()->route('category');
    }
}
