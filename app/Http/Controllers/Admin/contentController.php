<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Controllers\Controller;


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

    public function update($id, Request $request)
    {

        $input = $request->all();
        $rules  = [
            //"title" => "required"
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
