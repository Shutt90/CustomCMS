<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class fileUploadController extends Controller
{
    public function index()
    {

        $images = File::with('categoryRel')->get();

        return view('admin.gallery.index', compact('images'));

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

    public function destroy(int $id) 
    {

        $file = File::find($id);
        $file->delete()->with("success", "Content has been deleted");

        return back();

    }
}
