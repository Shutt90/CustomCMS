<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Controllers\Controller;

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
        return view('admin.contents.create', [
            'contents' => Content::make()
        ]);

    }

    public function edit(int $id)
    {
        $contents = Content::findOrFail($id);
        return view('admin.contents.edit', compact('contents'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'max:255',
            'file_path' => 'image|mimes:jpg,png,jpeg',
            'tab_title' => 'required|max:30',
            'meta_title' => 'required|max:30',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        $fileModel = new Content;

        $fileModel->title = $request->title;
        $fileModel->content = $request->content;
        $fileModel->tab_title = $request->tab;
        $fileModel->meta_title = $request->meta_title;
        $fileModel->meta_description = $request->meta_description;
        $fileModel->meta_keywords = $request->meta_keywords;

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

        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'max:255',
            'file_path' => 'image|mimes:jpg,png,jpeg',
            'tab_title' => 'required|max:30',
            'meta_title' => 'required|max:30',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        if($validated) {
            $content = Content::findOrFail($id);
            $content->update([
                'title' => $request->title,
                'content' => $request->content,
                'tab_title' => $request->tab_title,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keywords' => $request->meta_keywords,
            ]);

            if ($request->image != "") {
                $path = storage_path('app/public/images/'); 
    
    
                if ($content->image != '' && $content->image != null) {
                    $fileOld = $path . $content->image;
                    unlink($fileOld);
                }
    
                $image = $request->file_path;
                $imagename = time() . '_' . $request->file_path->getClientOriginalName();
                $image->move($path, $imagename);
    
    
                $content->update(['file_path' => $imagename]);
            };

            return back();
        };
    }

    public function destroy(int $id)
    {

        $content = Content::find($id);
        $content->delete();

        return back()
        ->with('Success', 'Content has been deleted');

    }


}
