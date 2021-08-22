@extends('layouts.header')
@section('title', 'Blog')

@include('layouts.sidenav')

@section('content')

<form method="POST" action="{{route('blog')}}">
    @csrf
    <label name="title" for="title">Title</label>
    <input type="text" name="title" id="title" value="Title...">
    <label name="title" for="post">Post</label>
    <input type="text" name="post" id="post" value="Post...">
    <input type="file" name="file" id="file">
    <input type="submit" name="submit" id="submit">
</form>


@stop