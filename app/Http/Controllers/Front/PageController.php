<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class PageController extends Controller
{
    public function Home()
    {
        $home = Content::where('page_id', 1);

        return view('front.home', [
            'home' => $home,
        ]);
    }

    public function about()
    {
        $about = Content::where('page_id', 2);

        return view('front.about', [
            'about' => $about,
        ]);
    }

    public function terms()
    {
        $terms = Content::where('page_id', '3');

        return view('front.terms', [
            'terms' => $terms,
        ]);
    }


}
