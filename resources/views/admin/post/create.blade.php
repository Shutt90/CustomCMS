@extends('admin.layouts.adminside')

@section('title', 'Admin - Create Post')

@section('content')
<div class="create-contents">   
    <div class="create-contents__container">
        @include("admin.layouts.errors")
        {{ Form::open(array('route' => 'post.store', 'method' => 'POST', 'files' => false)) }}
        @csrf
        @include('admin.post.layouts.form')
    {{ Form::close()}}
    </div>
</div>

@include('admin.layouts.errors')
@include('admin.layouts.success')
@endsection