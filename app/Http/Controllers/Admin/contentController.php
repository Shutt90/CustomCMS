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
            'content' => Content::where('id', '1')->first()
        ]);
    }

    public function edit($id)
    {

        $content = Content::findorfail($id);

        return view('admin.contents.index', compact('contents'));

    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image'
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
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $content=content::findOrFail($id);
        $content->update($request->except(['image']));

        if($request->hasFile('image')) {
            $this->imagedelete($services['image'], 'contents');
            $upload = $this->imageupload($input, 'image', 'contents', 'null', '600');
            content::where('id', $id)->update(array('image' => $upload));
        }
    }


}
