@include('admin.layouts.adminside')

<div class="admin-contents">
    <h3 class="admin-contents__title">
        Contents
        <a href="{{route('admin.content.create')}}">Create New</a>
    </h3>
    <div class="admin-contents__container">
        @foreach($contents as $content)
        <div class="admin-contents__container-section">
            {{$content->title}}
            <a href="{{route('admin.content.{{$content->id}}.edit')}}">
                <i class="fas fa-pen-square"></i>
            </a>
            <form method="POST" action="{{route('admin.content.{{$content->id}}')}}">
                @csrf
                @method("DELETE")
                <button type="submit"><i class="fas fa-trash"></i></button>
            </form>
        </div>
            
    </div>


</div>
