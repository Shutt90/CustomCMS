<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Post;
use Illuminate\Support\Facades\Redis;

class dashboardController extends Controller
{
    public function index()
    {

        $posts = Post::orderBy('id', 'desc')->with('user')->limit(5)->get();
        
        return view('front.dashboard', [
            'posts' => $posts,
        ]);
    }

}