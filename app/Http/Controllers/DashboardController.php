<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(User $user)
    {
        $userName = dd(Auth::user());

        return view('layouts.dashboard', [
            'userName' => $userName,
        ]);
    }

}