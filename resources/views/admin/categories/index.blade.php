@extends('admin.layouts.adminside')

@section('title', 'Admin - Categories')

@section('content')
<div class="admin-category">
    <h3 class="admin-category__title">
        Category
        <a href="{{route('content.create')}}">Create New</a>
    </h3>
    <div class="admin-category__container">
        @foreach($category as $item)
        <div class="admin-category__container-section">
            <a href="{{route('categories.edit', $item->id)}}">
                <i class="fas fa-pen-square"></i>
            </a>
            <form method="POST" action="{{route('categories.destroy', $item->id)}}">
                @csrf
                @method("DELETE")
                <button onclick="return confirm('Are you sure?')" type="submit"><i class="fas fa-trash"></i></button>
            </form>
            <div class="admin-category__container-section-text">
                <h3 class="admin-category__container-section__title">{{$item->title}}</h3>
            </div>
        </div>
        @endforeach  
    </div>
</div>
@endsection
