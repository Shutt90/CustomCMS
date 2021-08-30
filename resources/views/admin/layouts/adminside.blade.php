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

@section('content')

<i class="fas fa-bars ad-nav-menu"></i>
<i class="fas fa-chevron-down ad-nav-menu"></i>

<nav class="ad-nav">
    <ul class="ad-nav-list">
        <li class="ad-nav-list__item">
            <a class="ad-nav-list__item-link" class="ad-nav-list__item-link" href="{{route('dashboard')}}">
                Dashboard
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a class="ad-nav-list__item-link" href="{{url('content')}}">
                Content
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a class="ad-nav-list__item-link" href="{{url('gallery')}}">
                Images
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a class="ad-nav-list__item-link" href="{{url('blog')}}">
                Blog
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a class="ad-nav-list__item-link" href="ad-nav-list__item-link">
                Links
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a class="ad-nav-list__item-link" href="ad-nav-list__item-link">
                Pricing
            </a>
        </li>
        <li class="ad-nav-list__item">
            <a class="ad-nav-list__item-link" href="ad-nav-list__item-link">
                Terms
            </a>
        </li>  
    </ul>
</nav>

</body>
</html>
