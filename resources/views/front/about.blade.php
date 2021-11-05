@extends('app')
@if($content->meta_title)
    @section('meta_title', $content->meta_title)
@endif
@if($content->meta_description)
    @section('description', $content->meta_description)
@endif
@if($content->meta_keywords)
    @section('meta_title', $content->meta_keywords)
@endif
@if($content->tab_title)
    @section('title', $content->tab_title)
@endif
@section('content')

<h3 class="about-title">{{$content->title}}</h3>

<div class="about-content">
    {{$content->content}}
</div>
@if($content->image)
<div class="about-image">
    <img src="{{asset('public/storage/images/' . $content->image)}}">
</div>
@endif

@endsection