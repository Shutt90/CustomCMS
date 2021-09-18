@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

    <div class="blog">
        <div class="blog-title">

            <h3 class="blog-title__txt">Company Name</h3>
            <div class="blog-title__underline"></div>
        </div>

        <div class="blog-posts">
            @foreach($blogs as $blog)
            <div class="blog-posts-item">
                <h4 class=blog-posts-item__title">
                    {{$blog->title}}
                </h4>
                {{$blog->content}}
            </div>
            @endforeach
        </div>

    </div>
</section>



@include('layouts.footer')
@stop