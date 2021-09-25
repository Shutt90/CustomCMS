<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache; 

class categoryController extends Controller
{
    public function index()
    {
        $category = Category::orderBy('id', 'desc')->get();

        return view('admin.categories.index', compact('category'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:category'
        ]);

        Category::create([
            'title' => $request->title,
        ]);
        
    }

    public function edit(Request $request, int $id)
    {
        $category = Category::findorfail($id);

        return view('admin.categories.edit', compact('category'));

    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $category = Category::findorfail($id);

        $category->update([
            'title' => $request->title,
        ]);

        Cache::flush();
        return redirect('admin/categories')->with('success', 'Category Updated');

    }

    public function destroy(int $id)
    {
        $category = Category::findorfail($id);

        $category->delete();

        return redirect('admin/categories')->with('success', 'Category Deleted');

    }
    
}
