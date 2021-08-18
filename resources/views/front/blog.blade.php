@extends('layouts.header')
@section('title', 'Home Page')

@section('content')

@include('layouts.sidenav')

    <div class="blog">
        <div class="blog-title">

            <h3 class="blog-title__txt">Photographer Name</h3>
            <div class="blog-title__underline"></div>
        </div>

        <div class="blog-posts">
            
        </div>

    </div>
</section>



@include('layouts.footer')
@stop