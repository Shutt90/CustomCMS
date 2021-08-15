@include('admin.layouts.adminside')

<form method="POST" action="{{route('content.edit')}}">
    @csrf
    <label for="content">Content</label>
    <input type="textarea" name="content" id="content" value="{{$content->content}}">
    @method('POST')    
    <input type="submit" value="submit">

    @if ($errors->any())
    <div class="content-error">
        <ul class="content-error__list">
        @foreach ($error->all as $error)
            <li class="content-error__list-item">
                {{$error}}
            </li>
        @endforeach
        </ul>
    </div>
    @endif

</form>