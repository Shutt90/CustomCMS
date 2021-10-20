<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class isAdminController extends Controller
{
    public function index()
    {
        return view('admin.users.view', [
            'users' => User::orderBy('id', 'asc')->get()
        ]);
    }

    public function update(Request $request, int $id)
    {
        
        $userAdmin = User::findOrFail($id);

        $userAdmin->update([
            'admin' => $request->admin,
        ]);

        return back()->with('success', 'User updated');
        
        
    }
}
