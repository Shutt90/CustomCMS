@extends('admin.layouts.adminside')

@section('title', 'Admin - Edit Contents')

@section('content')
<div class="create-contents">
    <h3 class="create-contents__title">
        Contents
    </h3>
    <div class="create-contents__container">
        {{ Form::open(array('route' => array('content.update', $contents->id), 'method' => 'POST', 'files' => true)) }}
        @csrf
        @method('PUT')
        @include('admin.contents.layouts.form')
        {{ Form::close()}}
    </div>

    @include('admin.layouts.errors')
</div>
@endsection