@include('layouts.header')
@section('title', 'Register')

<section class="content">

    <div class="register">
        <h1 class="register-txt">Register Page</h1>

        <div class="register-form">
            <form action="{{ route('register') }}" method="post" class="register-form__table">
                @csrf
                <label for="text">First Name</label>
                <input type="text" name="fname" id="fname" value="{{ old('fname') }}" placeholder="First Name" class="form-input">
                </label>
                
                <label for="text">Surname</label>
                <input type="text" name="surname" id="surname" value="{{ old('surname') }}" placeholder="Surname" class="form-input">
                </label>
                
                <label for="email">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Desired Username" class="form-input">
                </label>
                
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email Address" class="form-input">
                </label>
                
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-input">
                </label>

                <label for="email">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password Again..." class="form-input">
                </label>

                <button type="submit" class="form-button">Register</button>
            </form>
        </div>
    </div>

    @include("admin.layouts.errors")

</section>

@include('layouts.footer')