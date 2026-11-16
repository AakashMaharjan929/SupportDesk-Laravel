@vite(['resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <main class="w-full h-full flex items-center justify-center bg-blue-50">
        <div class="bg-white w-full sm:w-2/4 lg:w-1/4">
            <h1 class="text-center mt-10"><span class="text-blue-600 text-3xl font-bold">Help</span><span
                    class="text-3xl font-bold">Desk</span></h1>
            @if (session('status'))
            <div class="text-green-500">
                {{ session('status') }}
            </div>
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="text-red-600">{{ $error }}</p>
                @endforeach
            @endif

            <form action="{{ route('login.store') }}" method="POST"
                class="h-8/9 lg:h-3/4 flex flex-col gap-5 justify-center items-center relative -mt-11 sm:-mt-7">
                @csrf

                <!-- @if ($errors->any())
                    <div>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif -->

                <h1 class="font-bold text-2xl">Login Form</h1>

                <label for="email" class="hidden">Email</label>

                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                    class="w-3/4 border-b-2 border-black-200 shadow p-4 focus:outline-gray-700">

                @error('email')
                <p class="text-red-500 text-sm w-3/4 -mt-6">
                    {{ $message }}
                </p>
                @enderror

                <label for="password" class="hidden">Password</label>

                <input type="password" name="password" id="password" placeholder="password"
                    class="w-3/4 border-b-2 border-black-200 shadow p-4 focus:outline-gray-700">
                <button id="passwordButton" type="button" class="text-black w-7 h-7 absolute right-14 top-75 lg:top-62">
                    <x-gmdi-visibility />
                </button>

                @error('password')
                <p class="text-red-500 text-sm w-3/4 -mt-6">
                    {{ $message }}
                </p>
                @enderror

                <div class="w-3/4 flex items-center justify-between align-middle gap-2">
                    <div class="text-sm text-gray-400 hover:text-black hover:underline">
                        <a href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    </div>

                    <div class="flex items-center justify-between align-middle gap-2">
                        <input type="checkbox" name="remember" id="remember" value="1"
                            class="w-4 h-4 accent-blue-500 cursor-pointer">

                        <label for="remember" class="text-sm text-gray-700 cursor-pointer">
                            Remember Me
                        </label>
                    </div>
                </div>

                <button type="submit"
                    class="bg-blue-400 w-30 h-14 rounded-2xl shadow text-white font-semibold mt-4 hover:bg-blue-500">
                    Log in
                </button>

            </form>
            <div class="w-full h-10 text-center">
                <p>Don't have an account? <a href="{{ route('register') }}"
                        class="font-semibold text-blue-700 hover:text-blue-900 hover:font-bold hover:underline">
                        Register
                    </a>
                </p>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const passwordButton = document.getElementById('passwordButton');
            const password = document.getElementById('password');

            passwordButton.addEventListener('click', () => {
                password.type = password.type === 'password' ? 'text' : 'password';
            });

        });

        function toggleButton(id) {

            const input = document.getElementById(id);

            if (input.type === 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }
    </script>
</body>

</html>