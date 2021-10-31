<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $contents = Content::where('page_id', '1')->orderBy('id', 'asc')->first();

        return view('front.index', [
            'contents' => $contents, 
        ]);
    }

}