<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class PageController extends Controller
{
    public function Home()
    {
        $home = Content::where('page_name', 'home');

        return view('front.home', [
            'home' => $home,
        ]);
    }

    public function about()
    {
        $about = Content::where('page_name', 'about');

        return view('front.about', [
            'about' => $about,
        ]);
    }

    public function terms()
    {
        $terms = Content::where('page_name', 'terms');

        return view('front.terms', [
            'terms' => $terms,
        ]);
    }


}
