@extends('admin.layouts.adminside')

@section('title', 'Admin - Terms')

@section('content')
<div class="admin-terms">
    <h3 class="admin-terms__title">
        {{$terms->title}}
        <a href="{{route('terms.edit', $terms->id)}}">
            <i class="fas fa-pen-square"></i>
        </a>
    </h3>
    <div class="admin-terms__content">
            {{$terms->content}}        
    </div>
</div>
@endsection