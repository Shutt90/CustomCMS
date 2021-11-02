<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('fontawesome-web/css/all.min.css')}}" rel="stylesheet">
    <script defer src="{{asset('fontawesome-web/js/all.min.js')}}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

</head>
<body>

    <nav class="nav">
        <ul class="nav-list">

        @guest
            <a href="{{url('/')}}">
                <li class="nav-item">Home</li>
            </a>
            <a href="{{url('login')}}">
                <li class="nav-item">Login</li>
            </a>
            <a href="{{url('register')}}">
                <li class="nav-item">Register</li>
            </a>

        @endguest

        @auth
        
        @if(Auth::user()->admin)
            <a href="{{route('dashboard')}}">
                <li class="nav-item">Dashboard</li>
            </a>
        @endif
            <a href="{{route('profile')}}">
                <li class="nav-item">{{Auth::user()->fname}} {{Auth::user()->surname}}</li>
            </a>
            <a href="{{route('logout')}}">
                <li class="nav-item">Log Out</li>
            </a>

        @endauth
    </nav>

    @yield('content')

</body>
