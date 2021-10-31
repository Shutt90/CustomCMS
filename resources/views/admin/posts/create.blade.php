@extends('admin.layouts.adminside')

@section('title', 'Admin - Create Post')

@section('content')
<div class="create-contents">   
    <div class="create-contents__container">
        @include("admin.layouts.errors")
        {{ Form::open(array('route' => 'content.store', 'method' => 'POST', 'files' => false)) }}
        @csrf
        @include('admin.posts.layouts.form')
    {{ Form::close()}}
    </div>
</div>

@include('admin.layouts.errors')
@include('admin.layouts.success')
@endsection