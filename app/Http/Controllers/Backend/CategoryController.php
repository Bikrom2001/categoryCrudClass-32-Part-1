<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('backend.category.index', compact("categories"));
    }
    public function create()
    {
        return view('backend.category.create');
    }

    public function store(CategoryStoreRequest $request)
    {
        

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();

        return to_route('category.list')->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        return $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }

    public function delete($id)

    {
        
    //    return $category = Category::where("id",$id)->first();
       $category = Category::findOrFail($id);
        $category->delete();

        return to_route('category.list')->with('success', 'Category deleted successfully.');
    }
}
