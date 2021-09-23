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
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);

        Page::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
        ]);

        $fileModel = new Page;

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

        $page = Page::findorfail($id);

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);

            if($request->title != "") {
                $page->update(['title' => $request->title]);
            }

            if($request->page != "") {
                $page->update(['page' => $request->page]);
            }


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

        return redirect('/admin/page');
    }

    public function destroy(int $id)
    {

        $page = Page::find($id);
        $page->delete();

        return back()
        ->with('Success', 'Page has been deleted');

    }


}
