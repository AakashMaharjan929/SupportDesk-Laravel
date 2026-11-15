@vite(['resources/css/app.css', 'resources/js/app.js'])

<h2>Verify Your Email Address</h2>

<p>
    We have sent a verification link to your email address.
    Please check your inbox.
</p>

@if (session('message'))
    <div class="text-green-600">
        {{ session('message') }}
    </div>
@endif

@if ($errors->any())
    <div class="text-red-500">
        {{ $errors->first() }}
    </div>
@endif

<form method="POST" action="{{ route('verification.send') }}">
    @csrf

    <button type="submit">
        Resend Verification Email
    </button>
</form>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit">
        Logout
    </button>
</form>

