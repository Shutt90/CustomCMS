@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

    <div class="gallery-page">
        <h3 class="gallery-page__title">
            Gallery
        </h3>
        <div class="gallery-page__container">
            @foreach($images as $image)
            <div class="gallery-page__container-box">
                <img src="{{asset('storage/images/' . $image->name)}}">
                <h5 class="gallery-page__container-box__title">
                    {{$image->name}}
                </h5>
            </div>
            @endforeach
        </div>
    </div>

@stop