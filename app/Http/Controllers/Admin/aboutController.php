<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    
    public function index()
    {
        return view('admin.about.index', [
            'about' => About::orderBy('id', 'asc')->get()
        ]);
    }

    public function create()
    {

        return view('admin.about.create');

    }

    public function edit($id)
    {

        $about = About::findorfail($id);

        return view('admin.about.edit', compact('about'));

    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg'
        ]);

        About::create([
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

    public function update($id, Request $request)
    {

        $input = $request->all();
        $rules  = [
            "image" => "image|mimes:jpg,png,jpeg"
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $about=About::findOrFail($id);
        $about->update($request->except(['image']));

        if($request->hasFile('image')) {
            $this->imagedelete($about['image'], 'about');
            $upload = $this->imageupload($input, 'about', 'abouts', 'null', '600');
            About::where('id', $id)->update(array('image' => $upload));
        }

        return back();
    }

    public function destroy(int $id)
    {

        $about = About::find($id);
        $about->delete();

        return back()
        ->with('Success', 'About has been deleted');

    }


}
