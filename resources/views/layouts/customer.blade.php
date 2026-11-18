@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Help Desk')</title>
</head>

<body>
    <div class="flex min-h-screen">
        <x-sidebar />
        <div class="flex-1">
            <header>
                <x-navbar />
            </header>
                <main class="lg:ml-64 min-h-screen p-4 md:p-6 bg-blue-50">
                @yield('content')
            </main>
            <footer class="ml-64">Thank you visiting this Page</footer>
        </div>
    </div>
</body>

</html>