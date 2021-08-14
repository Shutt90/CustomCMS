@include('admin.layouts.adminside')

<form method="POST" action="{{route('content.edit')}}">
    @csrf
    <label for="content">Content</label>
    <input type="textarea" name="content" id="content" value="{{$content->content}}">
    @method('POST')    
    <input type="submit" value="submit">
