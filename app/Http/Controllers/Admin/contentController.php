<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class contentController extends Controller
{
    
    public function index(Request $request)
    {
        return view('admin.contents.index', [
            'content' => Content::orderBy('id', 'asc')->get()
        ]);
    }

    public function edit($id)
    {

        $content = Content::findorfail($id);

        return view('admin.contents.index', compact('contents'));

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

        $content=content::findOrFail($id);
        $content->update($request->except(['image']));

        if($request->hasFile('image')) {
            $this->imagedelete($content['image'], 'contents');
            $upload = $this->imageupload($input, 'image', 'contents', 'null', '600');
            content::where('id', $id)->update(array('image' => $upload));
        }
    }


}
