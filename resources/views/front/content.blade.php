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

            <h3 class="main-title__txt">Photographer Name</h3>
            <div class="main-title__underline"></div>
        </div>

        <div class="content-page">
            @foreach($content as $text)
            <div class="content-page__box">
                <h3 class="content-page__box-title">
                    {{$text->title}}
                </h3>
                <p class="content-page__box-content">
                    {{$text->content}}
                </p>
            </div>
            @endforeach

        </div>

    </div>
</section>
@endsection