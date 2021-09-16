@extends('layouts.header')

@include('admin.layouts.adminside')

<div class="admin-abouts">
    <h3 class="admin-abouts__title">
        About
    </h3>

    <div class="admin-abouts__container">
        <div class="admin-abouts__container-section">
            
            @if($about->title != "")
                <h3 class="admin-abouts__container-title">{{$about->title}}</h1>
            @endif

            @if($about->content != "")
            {{$about->content}}
            @endif
            <a href="{{route('about.edit', $about->id)}}">
                <i class="fas fa-pen-square"></i>
            </a>
            <img src="{{asset('storage/images/' . $about->image)}}">
            <form method="POST" action="{{route('about.destroy', $about->id)}}">
                @csrf
                @method("DELETE")
                <button onclick="return confirm('Are you sure?')" type="submit"><i class="fas fa-trash"></i></button>
            </form>
            
        </div>
            
    </div>


</div>
