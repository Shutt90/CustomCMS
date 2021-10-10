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
<i class="fas fa-bars ad-nav-menu"></i>
<i class="fas fa-chevron-down ad-nav-menu"></i>

<nav class="ad-nav">
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
            <a class="ad-nav-list__item-link" href="{{route('blog.index')}}">
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