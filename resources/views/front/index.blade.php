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

@endsection