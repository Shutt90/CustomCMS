@include('admin.layouts.adminside')

<div class="create-category">
    <h3 class="create-category__title">
        Categories
    </h3>
    <div class="create-category__container">
        {{ Form::open(array('route' => array('categories.update', $category->id), 'method' => 'POST')) }}
        @csrf
        @method('PUT')
        @include('admin.categories.layouts.form')
        {{ Form::close()}}
    </div>


</div>
