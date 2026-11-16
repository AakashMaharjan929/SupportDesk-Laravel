@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>

    <h2>Forgot Password?</h2>

    <p>Enter your email address and we'll send you a password reset link.</p>

    @if (session('status'))
        <p style="color: green;">
            {{ session('status') }}
        </p>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('password.email') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email Address</label>

            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <button type="submit">
            Send Password Reset Link
        </button>
    </form>

    <a href="{{ route('login') }}">Back to Login</a>

</body>
</html>
