@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

    <div class="home-gallery">
        <h3 class="home-gallery-title">Gallery</h3>
        <div class="container-fluid">
            <div class="home-gallery__box">
                @foreach($images as $image)
                <a href="{{url('gallery')}}"class="home-gallery__box-container">
                    <img src="{{asset('storage/images/' . $image->name)}}">
                    <div class="home-gallery__box-container-overlay">
                        <h5 class="home-gallery__box-container-overlay_title">
                            {!!$image->name!!}
                        </h5>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>

@stop