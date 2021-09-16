<div class="form-group contents-center">
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', null) !!}
</div>
<div class="form-group">
{!! Form::label('content', 'Contents:') !!}
{!! Form::textarea('content', null, ['class' => '']) !!}
</div>
<div class="form-group">
{!! Form::label('image', 'Image Upload:') !!}
{!! Form::file('image'); !!}
</div>
<div class="form-group">
{!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
</div>