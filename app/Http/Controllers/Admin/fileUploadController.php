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
            'name' => 'required',
            'file' => 'required|mimes:jpg,png,jpeg'
        ]);

        if($request->file('file')) {
            $fileModel = new File;
            $fileName = $request->name;
            $filePath = $request->file('file')->storeAs('images', $fileName, 'public');
            $fileModel->name = $fileName;
            $fileModel->file_path = '/storage/' .  $filePath;
            $fileModel->save();

            return back()
            ->with('Success', 'Image has successfully been uploaded');
        }
    }

    public function show()
    {

        $images = File::with('categoryRel')->get();
        $category = Category::with('fileRel')->orderBy('id', 'asc')->get();

        return view('admin.gallery.index', compact('images', 'category'));
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'category_id' => 'integer',
            'title' => 'string',
        ]);

        if($validated) {
            File::findOrFail($id)
            ->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
            ]);

            return back()->with('success', 'Category Updated');;
        }
    }

    public function destroy(int $id) 
    {

        $file = File::find('id', $id);
        $file->delete()->with("success", "Content has been deleted");

        return back();

    }
}
