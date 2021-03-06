@extends('app')

@section('title', 'CMS - Login')

@section('content')

<section class="content">

        @guest
        <div class="login">
            <h1 class="login-txt"> Login Page</h1>
            <div class="login-form">
                <form class="login-form__table" action="{{ route('login') }}" method="post">
                    @csrf
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email Address" @if(old('email')) value="{{old('email')}}" @endif class="form-input">
                    <label for="email">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-input">
                    <button type="submit" class="form-button">Submit</button>
                </form>
            </div>
        </div>

        @endguest

        @include('admin.layouts.errors')
        @include('admin.layouts.success')

</section>

@endsection