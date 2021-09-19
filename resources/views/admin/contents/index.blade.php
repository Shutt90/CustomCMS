@extends('layouts.header')

@include('admin.layouts.adminside')

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
                {{$content->content}}

                <p class="admin-contents__container-section-text__page">
                    {{$content->page_name}}
                </p>
            </div>
            @if($content->image != "")
            <img src="{{asset('storage/images/' . $content->image)}}">
            @elseif($content->file_path != "")
            <img src={{$content->file_path}}>
            @endif
        </div>
        @endforeach
            
    </div>


</div>
