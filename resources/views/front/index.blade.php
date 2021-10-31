@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

    <div class="main">
        <div class="main-title">
            <h3 class="main-title__txt">{{$contents->title}}</h3>
            <div class="main-title__underline"></div>
        </div>

        @if($contents->image)

        <img src="{{asset('storage/images/' . $contents->image)}}">

        @else

        <img src="{{asset('/stoage/images/' . $profile->image)}}">

        @endif

        <div class="main-about mt-3">
                {{$contents->content}}
            <img class="main-about__img" src="{{$contents->file_path}}">
        </div>

    </div>
</section>



@include('layouts.footer')
@stop