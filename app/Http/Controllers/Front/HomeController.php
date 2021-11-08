<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Content;

class HomeController extends Controller
{
    public function index()
    {
        $content = Content::where('page_id', '1')->first();

        return view('front.index', [
            'content' => $content, 
        ]);
    }

}