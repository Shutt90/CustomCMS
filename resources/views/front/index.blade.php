@include('layouts.header')
@section('title', 'Home Page')

<section class="content">

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

        <div class="main-images">
            <img src="{{url('')}}/imgs/home/randimg.png">
            <img src="{{url('')}}/imgs/home/randimg2.jpg">
            <img src="{{url('')}}/imgs/home/randimg3.png">
            <img src="{{url('')}}/imgs/home/randimg4.jpeg">
            <img src="{{url('')}}/imgs/home/randimg5.jpg">
        </div>

    </div>
</section>



@include('layouts.footer')
