@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

    <div class="main">
        <div class="main-title">

            <h3 class="main-title__txt">Photographer Name</h3>
            <div class="main-title__underline"></div>
        </div>

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
@stop