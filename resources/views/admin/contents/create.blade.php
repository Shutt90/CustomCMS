@extends('admin.layouts.adminside')

@section('title', 'Admin - Create Content')

@section('content')
<div class="create-contents">   
    <div class="create-contents__container">
        @include("admin.layouts.errors")
        {{ Form::open(array('route' => 'content.store', 'method' => 'POST', 'files' => true)) }}
        @csrf
        @include('admin.contents.layouts.form')
    {{ Form::close()}}
    </div>
</div>

@include('admin.layouts.errors')
@endsection