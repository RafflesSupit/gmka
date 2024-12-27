<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Register Now</h1>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group">
                    <label for="name">Nama lengkap</label>
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="on" />
                </div>
                <div class="input-group">
                    <label for="email">Email address</label>
                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>
                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">
                        <a href="{{ route('terms.show') }}" target="_blank">terms of service</a> and
                        <a href="{{ route('policy.show') }}" target="_blank">privacy policy</a>
                    </label>
                </div>
                @endif

                <button type="submit">Register</button>
            </form>

            <div class="signin">
                Have an account? <a href="{{ route('login') }}">Log In</a>
            </div>
        </div>
        <div class="image-container"></div>
    </div>
</body>
</html>
