<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        return view('front.blog', [
            'posts' => Post::orderBy('id', 'desc')->with('user')->paginate(5)->all(),
        ]);
    }
}
