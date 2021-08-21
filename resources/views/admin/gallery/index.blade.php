@extends('layouts.header')
    <h3 class="image-title">
        Image Uploader
    </h3>    
    <div class="image-container">
        <form action="{{route('fileUpload')}}" method="POST" enctype="multipart/form-data">

            @csrf

            @if ($message = Session::get('success'))
            <div class="image-container__success">
                {{ $message }}
            </div>
            @endif

            @if (count($errors)>0)
            <div class="image-container__error">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

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
            <img src="/storage/app/public/images/{{$image->name}}">
        @endforeach
    </div>
    
</body>
</html>