<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use IIlluminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|max:25',
            'surname' => 'required|max:40',
            'username' => 'required|max:25',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'name' => $request->fname,
            'surname' => $request->surname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

    }

}