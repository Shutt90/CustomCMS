<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

    <title>Contents</title>
</head>
<body>
    
</body>
</html>

@section('content')

<nav>
    <ul class="ad-nav-list">
        <li class="ad-nav-list__item">
            <a href="{{route('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a href="{{route('content')}}">
                Content
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a href="{{route('fileUpload')}}">
                Images
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a href="ad-nav-list__item-link">
                Blog
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a href="ad-nav-list__item-link">
                Links
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a href="ad-nav-list__item-link">
                Pricing
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a href="ad-nav-list__item-link">
                Terms
            </a>
        </li>  
    </ul>
</nav>