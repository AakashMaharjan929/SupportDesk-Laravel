@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>

    <h2>Reset Your Password</h2>

    <p>Enter your new password below.</p>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
        @endforeach
    @endif

    <form action="{{ route('password.update') }}" method="POST">
        @csrf

        <input
            type="hidden"
            name="token"
            value="{{ $token }}"
        >

        <div>
            <label for="email">Email Address</label>

            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email', $email) }}"
                required
                readonly
            >
        </div>

        <div>
            <label for="password">New Password</label>

            <input
                type="password"
                name="password"
                id="password"
                required
                autofocus
            >
        </div>

        <div>
            <label for="password_confirmation">
                Confirm New Password
            </label>

            <input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                required
            >
        </div>

        <button type="submit">
            Reset Password
        </button>

    </form>

</body>
</html>
