<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;


class fileUploadController extends Controller
{
    public function get()
    {

        $images = File::orderBy('id', 'desc')->get();

        return view('admin.gallery.index', compact('images'));

    }

    public function store(Request $request)
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
            ->with('Success', 'Image has successfully been uploaded')
            ->with('file', $fileName);
        }
    }
}
