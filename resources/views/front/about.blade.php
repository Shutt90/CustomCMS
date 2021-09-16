@extends('layouts.header')
@section('title', 'About')

@section('content')

@include('layouts.sidenav')

<h3 class="about-title">{{$about->title}}</h3>

<div class="about-content">
    {{$about->content}}
</div>

@if($about->image)
<div class="about-image">
    <img src="{{asset('storage/images/' . $about->image)}}">
</div>

@else

@include('layouts.footer')
@stop