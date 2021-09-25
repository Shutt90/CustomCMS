<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\File;
use App\Http\Controllers\Controller;
use App\Models\Category;

class fileUploadController extends Controller
{
    public function index()
    {

        $images = File::with('categoryRel')->get();
        $category = Category::with('fileRel')->orderBy('id', 'asc')->get();

        return view('admin.gallery.index', compact('images', 'category'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'mimes:jpg,png,jpeg'
        ]);

        $fileModel = new File;

        if($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
            $fileModel->name = time() . '_' . $request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' .  $filePath;
            $fileModel->save();

            return back()
            ->with('Success', 'Image has successfully been uploaded')
            ->with('file', $fileName);
        }
    }

    public function show()
    {

        $images = File::with('categoryRel')->get();
        $category = Category::with('fileRel')->orderBy('id', 'asc')->get();

        $categoryArray = [];

        foreach($category as $item) {
            $categoryArray[$item->id] = $item->title;
        }

        return view('admin.gallery.index', compact('images', 'category', 'categoryArray'));
    }

    public function update(int $id, Request $request)
    {
        $request->validate([
            'category_id' => 'required'
        ]);

        $category = Category::findorfail($id);

        Cache::flush();
        return $category->update([
            'category_id' => $request->category_id,
        ])->with('success', 'Category Updated');

    }

    public function destroy(int $id) 
    {

        $file = File::find($id);
        $file->delete()->with("success", "Content has been deleted");

        return back();

    }
}
