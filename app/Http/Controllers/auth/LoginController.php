<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use IIlluminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login')
    }

    public function fetch(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

    }

}