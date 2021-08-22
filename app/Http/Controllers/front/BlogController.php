<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    public function index()
    {

        $blog = blog::orderBy('id', 'desc')->get();

        return view('front.blog', [
            'blog' => $blog,
        ]);
    }
}
