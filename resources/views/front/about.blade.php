@extends('layouts.header')
@section('title', 'About')

@section('content')

@include('layouts.sidenav')

<h3 class="about-title">{{$about->title}}</h3>

<div class="about-content">
    {{$about->content}}
</div>
@dd($about)
@if($about->image)
<div class="about-image">
    <img src="{{asset('public/storage/images/' . $about->image)}}">
</div>

@endif

@include('layouts.footer')
@stop