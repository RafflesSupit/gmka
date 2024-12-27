<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Login Now</h1>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="block">
                    <label for="remember_me" class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember">
                        <span class="ms-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-8">
                    @if (Route::has('password.request'))
                        {{-- <a class="underline text-xs text-gray-400 hover:text-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-4" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a> --}}
                    @endif
                    <button type="submit" class="button">Log in</button>
                </div>
            </form>
            <div class="signin">
                Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
            </div>
        </div>
        <div class="image-container"></div>
    </div>
</body>
</html>
