@extends('layouts.header')
@section('title', {{$content->tab_title}})

@section('content')

@include('layouts.sidenav')

<h3 class="about-title">{{$content->title}}</h3>

<div class="about-content">
    {{$content->content}}
</div>
@if($content->image)
<div class="about-image">
    <img src="{{asset('public/storage/images/' . $content->image)}}">
</div>
@endif

@include('layouts.footer')
@stop