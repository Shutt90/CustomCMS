<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Content;
 

class ContentController extends Controller
{
    public function index()
    {
        return view('admin.contents.index', [
            'content' => Content::where('id', '1')->first()
        ]);
    }

    public function edit($id)
    {


        
    }
}
