<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function about()
    {
        $about = About::orderBy('id', 'asc')->get();

        return view('front.about', [
            'about' => $about,
        ]);
    }
}
