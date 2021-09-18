@extends('layouts.header')
@section('title', 'Blog')

@include('admin.layouts.adminside')

@section('content')

<form method="POST" class="blog-form" action="{{route('blog.store')}}">
    @method('post')
    @csrf
    <label name="title" for="title">Title</label>
    <input type="text" name="title" id="title" value="{{old('title')}}">
    <label name="post" for="post">Post</label>
    <input type="textarea" name="post" id="post" value="{{old('post')}}">
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
