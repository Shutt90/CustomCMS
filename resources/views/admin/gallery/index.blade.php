@extends('layouts.header')
    <h3 class="image-title">
        Image Uploader
    </h3>    
    <div class="image-container">
        <form action="{{url('gallery')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($message = Session::get('success'))
            <div class="image-container__success">
                {{ $message }}
            </div>
            @endif

            @include("admin.layouts.errors")

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
            <form method="POST" route="gallery/{gallery}">
                @csrf
                @method("DELETE")
                <button type="submit"><i class="fas fa-trash"></i></button>
            </form>
            <img src="{{asset('storage/images/' . $image->name)}}" alt="imagenonoshow">
        </div>
        @endforeach
    </div>
    
</body>
</html>