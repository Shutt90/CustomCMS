<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

class GalleryController extends Controller
{

    public function index() 
    {

        $images = File::orderBy('id', 'desc')->get();
        
        return view('front.gallery', compact('images'));

    }
}