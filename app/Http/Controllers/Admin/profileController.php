<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index(User $user)
    {

        $user = Auth::user();
        
        return view('admin.profile.index', compact('user'));

    }

    public function update(Request $request)
    {

        $request->validate([
            'email' => 'unique:users|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->update([
            'username' => $request->username,
            'fname' => $request->fname,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return back()
        ->with('success', 'Profile updated');


    }
    
}
