<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::orderBy('id', 'desc')->get();

        return view('front.blog', [
            'blogs' => $blogs,
        ]);
    }
}
