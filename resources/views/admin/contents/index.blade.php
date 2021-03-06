@extends('admin.layouts.adminside')

@section('title', 'Admin - Contents')

@section('content')
<div class="admin-contents">
    <h3 class="admin-contents__title">
        Contents
        <a href="{{route('content.create')}}">Create New</a>
    </h3>
    <div class="admin-contents__container">
        @foreach($contents as $content)
        <div class="admin-contents__container-section">
            <a href="{{route('content.edit', $content->id)}}">
                <i class="fas fa-pen-square"></i>
            </a>
            <form method="POST" action="{{route('content.destroy', $content->id)}}">
                @csrf
                @method("DELETE")
                <button onclick="return confirm('Are you sure?')" type="submit"><i class="fas fa-trash"></i></button>
            </form>
            <div class="admin-contents__container-section-text">
                <h3 class="admin-contents__container-section__title">{{$content->title}}</h3>
                <h5 class="admin-contents__container-section__pagenum">Page Number {{$content->page_id}}</h5>
                <p class="admin-content__container-section__meta">Meta Data</p>

                {{$content->content}}
                
            </div>
            @if($content->file_path != "")
            <img src="{{asset('storage/images/' . $content->file_path)}}">
            <p class="">{{$content->image}}</p>
            @endif
        </div>
        @include('admin.layouts.errors')
        @include('admin.layouts.success')
        @endforeach  
    </div>
</div>
@endsection
