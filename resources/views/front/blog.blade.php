@extends('app')
@if($content->meta == 1)
    @if($content->meta_title)
        @section('meta_title', $content->meta_title)
    @endif
    @if($content->meta_description)
        @section('description', $content->meta_description)
    @endif
    @if($content->meta_keywords)
        @section('meta_title', $content->meta_keywords)
    @endif
@endif
@if($content->tab_title)
    @section('title', $content->tab_title)
@endif

@section('content')

    <div class="blog">
        <div class="blog-title">

            <h3 class="blog-title__txt"></h3>
            <div class="blog-title__underline"></div>
        </div>

        <div class="blog-posts">
            @foreach($posts as $post)
            <div class="blog-posts-item">
                <i class="far fa-comment"></i>
                <div class="blog-posts-item__text">
                    <h4 class=blog-posts-item__text-title">
                        {{$post->title}}
                    </h4>
                    {{$post->content}}
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection