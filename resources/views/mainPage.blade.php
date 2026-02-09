<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>My App</title>
            @vite('resources/css/app.css')
        </head>
        <body class="font-sans antialiased">
            <header class="bg-gray-800 text-white p-4">
                <div class="container mx-auto">
                    <h1 class="text-xl">My Website</h1>
                </div>
            </header>

            <main class="container mx-auto p-4">
                @yield('content')
            </main>

            <footer class="bg-gray-200 p-4 text-center">
                <p>&copy; {{ date('Y') }} My Company</p>
            </footer>
            @vite('resources/js/app.js')
        </body>
    </html>
</div>
