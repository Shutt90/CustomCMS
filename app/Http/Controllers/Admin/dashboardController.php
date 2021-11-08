<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;

class dashboardController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('id', 'desc')->with('user')->limit(5)->get();
        

        return view('layouts.dashboard', [
            'posts' => $posts,

        ]);
    }

}