<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Term;

class PageController extends Controller
{
    public function Home()
    {
        $content = Content::where('page_id', 1)->first();

        return view('front.home', [
            'content' => $content,
        ]);
    }

    public function about()
    {
        $content = Content::where('page_id', 2)->first();

        return view('front.about', [
            'content' => $content,
        ]);
    }

    public function terms()
    {
        $content = Term::first();

        return view('front.about', [
            'content' => $content,
        ]);
    }


}
