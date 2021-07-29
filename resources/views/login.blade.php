@include('layouts.header')

@include('layouts.footer')
<body>
        <h1> Login Page</h1>

        @guest

        <form action="{{ route('login) }}" method="post">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email Address" class="form-input">
            <label for="email">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-input">
            <input type="submit" class="form-button">
        </form>

        @endguest

        @auth

        @back()

        @endauth

</body>