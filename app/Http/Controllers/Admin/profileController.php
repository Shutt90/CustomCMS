<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Cache;
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
            'picture' => 'mimes:jpg,png.jpeg',
        ]);

        $user = Auth::user();

        if($request->picture) {
            $path = storage_path('app/public/images/'); 
    
    
            if ($user->picture != '' && $user->picture != null) {
                $fileOld = $path . $user->image;
                unlink($fileOld);
            }

            $picture = $request->picture;
            $picturename = time() . '_' . $request->file_path->getClientOriginalName();
            $picture->move($path, $picturename);

            $user->update([
                'username' => $request->username,
                'fname' => $request->fname,
                'surname' => $request->surname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'picture' => $picturename,
            ]);

        } else {
            $user->update([
                'username' => $request->username,
                'fname' => $request->fname,
                'surname' => $request->surname,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        };


        Cache::flush();
        return back()->with('Profile Updated', 'success');

    }

    public function show($username)
    {
        return view('admin.post.user', [
            'user' => User::with('posts')->orderBy('id', 'desc')->paginate(5)->all(),
        ]);
    }
    
}
