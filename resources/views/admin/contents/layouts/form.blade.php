<div class="form-group contents-center">
{!! Form::label('title', 'Title:') !!}
{!! Form::text('title', $contents->title) !!}
</div>
<div class="form-group contents-center">
{!! Form::label('content', 'Contents:') !!}
{!! Form::textarea('content', $contents->content, ['class' => '']) !!}
</div>
<div class="form-group contents-center">
{!! Form::label('tab_title', 'Tab Title:') !!}
{!! Form::text('tab_title', $contents->tab_title, ['class' => '']) !!}
</div>
<div class="form-group contents-center">
{!! Form::label('meta_title', 'Meta Title:') !!}
{!! Form::text('meta_title', $contents->meta_title, ['class' => '']) !!}
</div>
<div class="form-group contents-center">
{!! Form::label('meta_description', 'Meta Description:') !!}
{!! Form::textarea('meta_description', $contents->meta_description, ['class' => '']) !!}
</div>
<div class="form-group contents-center">
{!! Form::label('meta_keywords', 'Meta Keywords:') !!}
{!! Form::text('meta_keywords', $contents->meta_keywords, ['class' => '']) !!}
</div>
<div class="form-group contents-center">
{!! Form::label('file_path', 'Image Upload:') !!}
{!! Form::file('file_path'); !!}
</div>
<div class="form-group contents-center">
{!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
</div>
