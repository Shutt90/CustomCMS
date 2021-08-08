<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard');
        
    }

    public function fetch(User $user)
    {

        $user = Auth()->user();
        dd($user);

    }
}