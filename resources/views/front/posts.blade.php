@extends('layouts.header')

@include('layouts.sidenav')

@section('title', 'Viewing Posts')

@section('content')

<section class="post">
    <div class="post-container">
        <h3 class="post-container__title">
            {{$post->title}}
        </h3>
        <div class="post-container__content">
            {{$post->content}}
            <div class="post-container__content-author">
                <a href="{{route('user.posts', [$post->user->username])}}">
                    {{$post->user->username}}
                </a>
            </div>
        </div>
    </div>
</section>
        

@endsection