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
}
