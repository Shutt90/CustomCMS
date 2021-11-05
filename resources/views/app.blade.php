<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="@yield('meta_title')">
    <meta name="content" content="@yield('meta_content')">
    <meta name="keywords" content="@yield('meta_keywords')">
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

        <div class="side-nav">
            <ul class="side-nav__items">
                <li class="side-nav__items-list">
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li class="side-nav__items-list">
                    <a href="{{route('about')}}">About</a>
                </li>
                <li class="side-nav__items-list">
                    <a href="{{route('blog')}}">Blog</a>
                </li>
                <li class="side-nav__items-list">
                    <a href="{{route('gallery')}}">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <section class="footer">
        <div class="footer-banner">
            <img src="">
        </div>
    
        <div class="footer-copy">
            Copyright &copy; Liam Pugh 2021
        </div>
    </section>
</body>
</html>
