<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{url('')}}/fontawesome-web/css/all.min.css" rel="stylesheet">
    <script defer src="{{url('')}}/fontawesome-web/js/all.min.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <svg class="hamburger" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 80 80" style="enable-background:new 0 0 80 80;">
        <path id="lines" d="M71.45,14.19v8.48a1.19,1.19,0,0,1-1.19,1.19H10.65a1.19,1.19,0,0,1-1.19-1.19V14.19A1.19,1.19,0,0,1,10.65,13H70.26A1.19,1.19,0,0,1,71.45,14.19ZM70.26,32H10.65a1.19,1.19,0,0,0-1.19,1.19v8.48a1.19,1.19,0,0,0,1.19,1.19H70.26a1.19,1.19,0,0,0,1.19-1.19V33.19A1.19,1.19,0,0,0,70.26,32Zm0,19H10.65a1.19,1.19,0,0,0-1.19,1.19v8.48a1.19,1.19,0,0,0,1.19,1.19H70.26a1.19,1.19,0,0,0,1.19-1.19V52.19A1.19,1.19,0,0,0,70.26,51Z" />
        <path id="cross" d="M23.79,26.91l9.75,13.7L23.81,54.09a1.15,1.15,0,0,0,.26,1.6,1.17,1.17,0,0,0,.67.22h9.67a1.17,1.17,0,0,0,.94-.48l4.86-6.73,4.72,6.72a1.16,1.16,0,0,0,1,.49h9.53a1.16,1.16,0,0,0,1.16-1.14,1.17,1.17,0,0,0-.22-.68L46.6,40.5l9.75-13.59a1.15,1.15,0,0,0-.26-1.6,1.13,1.13,0,0,0-.68-.22H46a1.15,1.15,0,0,0-1,.5l-4.78,7-4.9-7a1.16,1.16,0,0,0-1-.49H24.72a1.16,1.16,0,0,0-1.14,1.16A1.17,1.17,0,0,0,23.79,26.91Z" />
    </svg>

    <nav id="adminnav" class="ad-nav">
        <div class="ad-nav-list">
            <li class="ad-nav-list__item">
                <a class="ad-nav-list__item-link" href="{{route('profile')}}">
                    {{Auth::user()->fname}} {{Auth::user()->surname}}
                </a>
            </li>  
            <li class="ad-nav-list__item">
                <a class="ad-nav-list__item-link" class="ad-nav-list__item-link" href="{{route('dashboard')}}">
                    Dashboard
                </a>
            </li>
            <li class="ad-nav-list__item">
                <a class="ad-nav-list__item-link" href="{{route('users.index')}}">
                    Users
                </a>
            </li>
            <li class="ad-nav-list__item">
                <a class="ad-nav-list__item-link" href="{{route('content.index')}}">
                    Content
                </a>
            </li>
            <li class="ad-nav-list__item">
                <a class="ad-nav-list__item-link" href="{{route('gallery.index')}}">
                    Images
                </a>
            </li>
            <li class="ad-nav-list__item">
                <a class="ad-nav-list__item-link" href="{{route('post.index')}}">
                    Blog
                </a>
            </li>
            <li class="ad-nav-list__item">
                <a class="ad-nav-list__item-link" href="{{route('terms')}}">
                    Terms & Conditions
                </a>
            </li>
            <li class="ad-nav-list__item">
                <a class="ad-nav-list__item-link" href="{{route('logout')}}">
                    Logout
                </a>
            </li>    
        </div>
    </nav>

    @yield('content')

</body>
</html>