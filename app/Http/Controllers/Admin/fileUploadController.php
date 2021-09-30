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

        return view('admin.gallery.index', compact('images', 'category'));
    }

    public function update(Request $request, int $id)
    {

        dd($request);

        $request->validate([
            'category_id' => 'integer',
            'title' => 'string|max:20',
        ]);

        File::find('id', $id)
        ->update([
            'category_id' => $request->input('category_id'),
            'title' => $request->input('title'),
        ]);

        Cache::flush();
        return back()->with('success', 'Category Updated');;

    }

    public function destroy(int $id) 
    {

        $file = File::find('id', $id);
        $file->delete()->with("success", "Content has been deleted");

        return back();

    }
}
