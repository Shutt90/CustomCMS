<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class pageController extends Controller
{
    
    public function index()
    {
        return view('admin.page.index', [
            'page' => Page::first()
        ]);
    }

    public function create()
    {

        return view('admin.page.create');

    }

    public function edit($id)
    {

        $page = Page::findorfail($id);

        return view('admin.page.edit', compact('page'));

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

        $fileModel = new Page;

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

    public function update($id, Request $request)
    {

        $validated = $request->validate([
                'title' => 'max:255',
                'image' => 'max:255',
                'file_path' => 'image|mimes:jpg,png,jpeg',
                'tab_title' => 'max:30',
                'meta_title' => 'max:30',
            ]);

            if($validated) {
                $page = Page::findorfail($id)
                    ->update([
                        'title' => $request->title,
                        'content' => $request->content,
                        'tab_title' => $request->tab,
                        'meta_title' => $request->meta_title,
                        'meta_description' => $request->meta_description,
                        'meta_keywords' => $request->meta_keywords,
                    ]);
                };


            if ($request->image != "") {
                $path = storage_path('app/public/images/'); 


                if ($page->image != '' && $page->image != null) {
                    $fileOld = $path . $page->image;
                    unlink($fileOld);
                }

                $image = $request->image;
                $imagename = time() . '_' . $request->image->getClientOriginalName();
                $image->move($path, $imagename);


                $page->update(['image' => $imagename]);
                
            }

        return back();
    }

    public function destroy(int $id)
    {

        $page = Page::find($id);
        $page->delete();

        return back()
        ->with('Success', 'Page has been deleted');

    }


}
