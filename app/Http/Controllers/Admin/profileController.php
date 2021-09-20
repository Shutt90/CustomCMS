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
        
        return view('admin.profile', compact('user'));

    }

    public function update(Request $request, User $user)
    {

        $request->validate(request(), [
            'email' => 'email',
            'password' => 'required|min:8|confirmed'
        ]);

        $user->update([
            'fname' => $request->fname,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return back()
        ->with('sucess', 'Profile updated');


    }
    
}
