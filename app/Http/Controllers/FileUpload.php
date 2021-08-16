<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileUpload extends Controller
{
    public function createForm()
    {

        $images = File::orderBy('id', 'desc')->get();
        $imagesStorage = Storage::disk('public')->get();

        dd($imagesStorage);

        return view('admin.gallery.index', compact('images'));

    }

    public function fileUpload(Request $request)
    {
        $request->validate([
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
            ->with('Success', 'File has successfully been uploaded')
            ->with('file', $fileName);
        }
    }
}
