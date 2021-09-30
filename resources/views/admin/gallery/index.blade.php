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
                <input type="text" name="name" class="image-file__input">
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
                <form method="POST" action="{{route('gallery.update', $image->id)}}">
                    @csrf
                    @method('PUT')   
                    <label for="title">Name</label> 
                    <input type="text" name="title" placeholder="{{$image->name}}">
                    <label for="category">Category</label>
                    <select name="category_id">
                        @foreach($category as $item)
                        <option value="{{$item->id}} "@if($image->category_id === $item->id) selected="selected" @endif>{{$item->title}}</option>
                        @endforeach
                    </select>
                    <input type="submit"></input>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    
</body>
</html>