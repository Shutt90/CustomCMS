@include('admin.layouts.adminside')

<div class="create-contents">
    <h3 class="create-contents__title">
        Contents
    </h3>
    <div class="create-contents__container">
        {{ Form::open(array('route' => 'content.update', 'method' => 'POST', 'files' => true)) }}
        @csrf
        @include('admin.contents.layouts.form')
        {{ Form::close()}}
    </div>


</div>
