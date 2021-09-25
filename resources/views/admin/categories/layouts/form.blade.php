<div class="flex contents-center">
    <div class="form-group contents-center">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null) !!}
    </div>
    <div class="form-group">
    {!! Form::submit("Submit", ['class' => 'btn btn-primary form-control', 'style' => 'width:150px;']) !!}
    </div>
</div>