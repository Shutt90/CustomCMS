<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;

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

    public function store(ContentRequest $request)
    {

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

        return redirect()->route('content.index')
        ->with('success', 'Content has successfully been uploaded')
        ->with('error', 'Unsuccessful');
        
    }

    public function update(ContentRequest $request, int $id)
    {
            $content = Content::findOrFail($id);

            if ($request->file_path != "") {
                $path = storage_path('app/public/images/'); 
                
                if ($content->image != '' && $content->image != null) {
                    $fileOld = $path . $content->image;
                    unlink($fileOld);
                }
    
                $image = $request->file_path;
                $imagename = time() . '_' . $request->file_path->getClientOriginalName();
                $image->move($path, $imagename);
    
    
                $content->update([
                    'title' => $request->title,
                    'content' => $request->content,
                    'tab_title' => $request->tab_title,
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'meta_keywords' => $request->meta_keywords,
                    'file_path' => $imagename
                ]);
                
            } else {
                $content->update([
                    'title' => $request->title,
                    'content' => $request->content,
                    'tab_title' => $request->tab_title,
                    'meta_title' => $request->meta_title,
                    'meta_description' => $request->meta_description,
                    'meta_keywords' => $request->meta_keywords,
                ]);
            }

            if($request->meta){

                $content->update([
                    'meta' => $request->meta
                ]);

                return back()->with('success', 'Meta tags now available');

            }

        return redirect()->route('content.index')
        ->with('success', 'Content has successfully been uploaded');
    }

    public function destroy(int $id)
    {

        $content = Content::find($id);
        $content->delete();

        return back()
        ->with('Success', 'Content has been deleted');

    }


}
