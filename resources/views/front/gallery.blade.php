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
                    
                    @if(strpos($image->name, "/") !== false)
                    <img src="{{asset('storage/images/' . $image->name)}}">
                    @elseif($image->file_path)
                    <img src="{{$image->file_path}}">
                    @endif

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