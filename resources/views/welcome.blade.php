<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/welcome.js'])
    @endif
</head>

<body>
    <div id="chat-log" style="padding:2em;font-family:monospace;"></div>

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Laravel</h1>
            <p class="text-lg">This is a simple welcome page.</p>
        </div>

    </div>

</body>

</html>