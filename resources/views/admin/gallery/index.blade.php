@extends('layouts.header')
    <h3 class="image-title">
        Image Uploader
    </h3>    
    <div class="image-container">
        <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
            @method("POST")
            @csrf

            @include("admin.layouts.errors")
            @include("admin.layouts.success")

            <div class="image-file">
                <label class="image-file__label" for="chooseImage">Select Image</label>

                <input type="file" name="file" class="image-file__input" id="chooseImage">
            </div>

            <button type="submit" name="submit" class="image-file__submit">
                Upload Image
            </button>
        </form>
    </div>

    <div class="images">
        @foreach($images as $image)
        <div class="images-container">
            <form method="POST" action="{{route('gallery.destroy', $image->id)}}">
                @csrf
                @method("DELETE")
                <button onclick="return confirm('Are you sure?')" type="submit"><i class="fas fa-trash"></i></button>
            </form>
            <img src="{{asset('storage/images/' . $image->file_path)}}" alt="{{$image->name}}">
            <div class="flex flex-column">
                <form method="PUT" action="{{route('gallery.update', $image->id)}}">
                    @csrf
                    @method('PUT')   
                    <label for="category">Name</label> 
                    <input type="text" value="{{$image->name}}">
                    <input type="submit"></input>
                </form>
                <form method="PUT" action="{{route('gallery.update', $image->id)}}">
                    @csrf
                    @method('PUT')
                    <label for="category">Category</label>
                    <select onchange="this.form.submit();" name="category">
                        @foreach($category as $item)
                        <option @if($image->category_id === $item->id) selected="selected" @endif>{{$item->title}}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    
</body>
</html>