@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

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



@include('layouts.footer')
@stop