@include('layouts.header')
@section('title', 'Home Page')

@section('content')
<section class="home">
    <h1 class="home-title">Home Page<h1>

    <div class="home-nav">
        <ul class="home-nav__items">
            <li class="home-nav__items-list">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="home-nav__items-list">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="home-nav__items-list">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="home-nav__items-list">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="home-nav__items-list">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="home-nav__items-list">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="home-nav__items-list">
                <a href="{{route('home')}}">Home</a>
            </li>
            <li class="home-nav__items-list">
                <a href="{{route('home')}}">Home</a>
            </li>
        </ul>
    </div>

    <div class="main">
        <h3 class="main-title">Home Page</h3>

    </div>
</section>



@include('layouts.footer')
@endsection