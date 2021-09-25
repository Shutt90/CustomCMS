@extends('layouts.header')
@include('admin.layouts.adminside')

<div class="create-category">   
    <div class="create-category__container">
        @include("admin.layouts.errors")
        {{ Form::open(array('route' => 'categories.store', 'method' => 'POST')) }}
        @csrf
        @include('admin.category.layouts.form')
    {{ Form::close()}}
    </div>


</div>
