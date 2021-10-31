@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

    <div class="main">
        <div class="main-title">
            <h3 class="main-title__txt">{{$contents->title}}</h3>
            <div class="main-title__underline"></div>
        </div>
        <div class="main-content">
            <div class="main-about mt-3">
                {{$contents->content}}
                @if ($contents->file_path)
                <div class="main-about__img">
                    <img src="{{asset('storage/images/' . $contents->file_path)}}">
                </div>
                @endif
            </div>
        </div>

    </div>
</section>



@include('layouts.footer')
@stop