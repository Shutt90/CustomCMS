@include('layouts.header')

<section class="content">

        @guest
        <div class="login">
            <h1 class="login-txt"> Login Page</h1>
            <div class="login-form">
                <form class="login-form__table" action="{{ route('dashboard') }}" method="post">
                    @csrf
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email Address" class="form-input">
                    <label for="email">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-input">
                    <input type="submit" class="form-button">
                </form>
            </div>
        </div>

        @endguest

        @auth

        @back()

        @endauth

</section>
@include('layouts.footer')