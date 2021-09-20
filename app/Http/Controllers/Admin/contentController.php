<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Validation\Validator;

class contentController extends Controller
{
    
    public function index()
    {
        return view('admin.contents.index', [
            'contents' => Content::orderBy('id', 'asc')->get()
        ]);
    }

    public function create()
    {

        return view('admin.contents.create');

    }

    public function edit(int $id)
    {

        $contents = Content::findorfail($id);

        return view('admin.contents.edit', compact('contents'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);

        Content::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
        ]);

        $fileModel = new Content;

        if($request->file()) {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $filePath = $request->file('image')->storeAs('images', $fileName, 'public');
            $fileModel->image = time() . '_' . $request->file('image')->getClientOriginalName();
            $fileModel->file_path = '/storage/' .  $filePath;
            $fileModel->save();
        }

        return back()
        ->with('Success', 'Content has successfully been uploaded');
        
    }

    public function update(Request $request, int $id)
    {
        $content = Content::findorfail($id);

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);

            if($request->title != "") {
                $content->update(['title' => $request->title]);
            }

            if($request->content != "") {
                $content->update(['content' => $request->content]);
            }


            if ($request->image != "") {
                $path = storage_path('app/public/images/'); 


                if ($content->image != '' && $content->image != null) {
                    $fileOld = $path . $content->image;
                    unlink($fileOld);
                }

                $image = $request->image;
                $imagename = time() . '_' . $request->image->getClientOriginalName();
                $image->move($path, $imagename);


                $content->update(['image' => $imagename]);
                
            }

        return redirect('/admin/content');
    }

    public function destroy(int $id)
    {

        $content = Content::find($id);
        $content->delete();

        return back()
        ->with('Success', 'Content has been deleted');

    }


}
