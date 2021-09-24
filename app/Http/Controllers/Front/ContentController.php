<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index()
    {
        $content = Content::orderBy("id", "asc")->get();

        return view("front.content", [
            "content" => $content,
        ]);
    }
}
