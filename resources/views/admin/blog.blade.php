@extends('layouts.header')
@section('title', 'Blog')

@include('layouts.sidenav')

@section('content')

<form method="POST" action="{{route('blog')}}">
    @csrf
    <label name="title" for="title">Title</label>
    <input type="text" name="title" id="title" value="{{old('title')}}">
    <label name="title" for="post">Post</label>
    <input type="text" name="post" id="post" value="{{old('post')}}">
    <label for="image">Insert Image</label>
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" id="submit">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@stop