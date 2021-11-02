<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required|max:255',
            'surname' => 'required|max:255',
            'username' => 'required|max:25|regex:/[a-zA-Z\d]/',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed',
        ]);

        $user = User::make([
            'fname' => $request->fname,
            'surname' => $request->surname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => '0',
        ]);

        $user->save();

        if(!$user->save()){
            return back()->withInput($request->input);
        }

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('blog')->with('success', 'You have been registered');

        
    }

}