@include('layouts.header')


<body>
        @guest
        <div class="login-container">
            <h1> Login Page</h1>
            <form action="{{ route('login') }}" method="post">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email Address" class="form-input">
                <label for="email">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-input">
                <input type="submit" class="form-button">
            </form>
        </div>

        @endguest

        @auth

        @back()

        @endauth

</body>

@include('layouts.footer')