@include('admin.layouts.adminside')

<div class="create-contents">
    <h3 class="create-contents__title">
        Terms
    </h3>
    <div class="create-contents__container">
        {{ Form::open(array('route' => array('terms.update', $terms->id), 'method' => "PUT"))}}
        @csrf
        @method('PUT')
        <div class="form-group contents-center">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null) !!}
            </div>
            <div class="form-group">
            {!! Form::label('content', 'Contents:') !!}
            {!! Form::textarea('content', null, ['class' => '']) !!}
            </div>
            <div class="form-group">
            {!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
            </div>
        {{ Form::close()}}
    </div>


</div>
