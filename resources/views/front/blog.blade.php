@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

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



@include('layouts.footer')
@stop