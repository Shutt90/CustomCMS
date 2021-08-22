<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class dashboardController extends Controller
{
    public function index()
    {

        return view('layouts.dashboard');
    }

}