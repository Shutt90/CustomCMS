<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Content;
 

class ContentController extends Controller
{
    public function index()
    {
        return view('/', [
            'content' => Content::where('id', '1')->get()
        ]);
    }
}
