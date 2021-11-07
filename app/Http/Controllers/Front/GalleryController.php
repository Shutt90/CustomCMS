<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Category;
use App\Models\Content;


class GalleryController extends Controller
{

    public function index() 
    {

        $images = File::orderBy('id', 'desc')->get();
        $categories = Category::orderBy('id', 'desc')->get();
        $contents = Content::where('id', '4')->first();
        
        return view('front.gallery', compact('images', $categories));

    }
}