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

@endsection