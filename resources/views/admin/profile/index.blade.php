@extends('admin.layouts.adminside')

@section('title', 'Admin - Profile')

@section('content')
<div class="profile">
    <h3 class="profile-title text-center">
        Profile
    </h3>
    <div class="profile-container">
        {{ Form::open(array('route' => array('profile.update', $user->id), 'method' => 'PUT')) }}
        @csrf
        @method('PUT')

        <div class="form-group contents-center">
        {!! Form::label('username', 'Username:') !!}
        {!! Form::text('username', null, ['class' => '']) !!}
        </div>
        <div class="form-group contents-center">
        {!! Form::label('fname', 'First Name:') !!}
        {!! Form::text('fname', null, ['class' => '']) !!}
        </div>
        <div class="form-group contents-center">
        {!! Form::label('surname', 'Surname:') !!}
        {!! Form::text('surname', null, ['class' => '']) !!}
        </div>
        <div class="form-group contents-center">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => '']) !!}
        </div>
        <div class="form-group contents-center">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', null, ['class' => '']) !!}
        </div>
        <div class="form-group contents-center">
        {!! Form::label('password_confirmation', 'Password Confirmation:') !!}
        {!! Form::password('password_confirmation', null, ['class' => '']) !!}
        </div>
        <div class="form-group contents-center">
        {!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
        </div>

        @include('admin.layouts.errors')
        @include('admin.layouts.success')

    </div>

@endsection