<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>
    <div class="image-container">
        <form action="{{route('fileUpload')}}" method="POST" enctype="multipart/form-data">
            <h3 class="image-container__title">
                Image Uploader
            </h3>    
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
                <input type="file" name="file" class="custom-image-input" id="chooseImage">
                <label class="custom-image-label" for="chooseImage">Select Image</label>
            </div>

            <button type="submit" name="submit" class="image-submit">
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