@vite(['resources/css/app.css'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <main class="w-full h-full flex items-center justify-center bg-blue-50">
        <div class="bg-white w-full sm:w-2/4 lg:w-1/4">
            <h1 class="text-center mt-10"><span class="text-blue-600 text-3xl font-bold">Help</span><span
                    class="text-3xl font-bold">Desk</span></h1>
            <form action="{{ route('store') }}" method="POST"
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

                <h1 class="font-bold text-2xl">Registration Form</h1>
                <label for="name" class="hidden">Name</label>

                <input type="text" name="name" placeholder="Username"
                    class="w-3/4 border-b-2 border-black-200 shadow p-4 focus:outline-gray-700">

                @error('name')
                    <p class="text-red-500 text-sm w-3/4 -mt-6">
                        {{ $message }}
                    </p>
                @enderror

                <label for="email" class="hidden">Email</label>

                <input type="email" name="email" placeholder="Email"
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

                <input type="password" name="password_confirmation" id="confirm_password" placeholder="confirm password"
                    class="w-3/4 border-b-2 border-black-200 shadow p-4 focus:outline-gray-700"><button type="button"
                    onclick="toggleButton('confirm_password')"
                    class="text-black w-7 h-7 absolute right-14 top-100 lg:top-84"><x-gmdi-visibility /></button>
                <button type="submit"
                    class="bg-blue-400 w-30 h-14 rounded-2xl shadow text-white font-semibold mt-4 hover:bg-blue-500">Register</button>
            </form>
            <div class="w-full h-10 text-center">
                <p>Already have an account? <a href=""
                        class="font-semibold text-blue-700 hover:text-blue-900 hover:font-bold hover:underline">Log
                        In</a></p>
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