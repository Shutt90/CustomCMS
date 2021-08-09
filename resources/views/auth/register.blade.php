@include('layouts.header')
@section('title', 'Register')

@section('content')

    @guest
    <div class="register">
        <h1 class="register-txt">Register Page</h1>

        <div class="register-form">
            <form class="register-form__table" action="{{ route('register') }}" method="post">
                @csrf
                <label for="text">First Name</label>
                <input type="text" name="fname" id="fname" placeholder="First Name" class="form-input">
                </label>
                
                <label for="text">Surname</label>
                <input type="text" name="surname" id="surname" placeholder="Surname" class="form-input">
                </label>
                
                <label for="email">Username</label>
                <input type="text" name="username" id="username" placeholder="Desired Username" class="form-input">
                </label>
                
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Email Address" class="form-input">
                </label>
                
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-input">
                </label>

                <label for="email">Confirm Password</label>
                <input type="password" name="password" id="password" placeholder="Password Again..." class="form-input">
                </label>

                <input type="submit" class="form-button">
            </form>
        </div>
    </div>

    @endguest

    @auth

    @back()

    @endauth


@include('layouts.footer')

@endsection