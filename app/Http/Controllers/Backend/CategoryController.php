<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryView()
    {
        $category = Category::paginate(5);
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

    public function categoryUpdate($id)
    {
        $category = Category::find($id);
        return view('backend.pages.categories.categoryUpdate', compact('category'));
    }

    public function categoryStore(Request $request, $id)
    {
        $category = Category::find($id);
        $category->update([
            'categoryName' => $request->categoryName,
            'categoryDescription' => $request->categoryDescription,
        ]);
        return redirect()->route('category');
    }

    public function categoryDelete($id)
    {
        $category = Category::find($id)->delete();
        return redirect()->back();
    }
}
