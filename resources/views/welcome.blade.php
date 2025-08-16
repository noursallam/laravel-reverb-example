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

<body class="bg-gray-100">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6 flex flex-col"
            style="height: 500px;">
            <h2 class="text-2xl font-bold mb-4 text-center">Chat</h2>
            <div id="chat-log"
                class="flex flex-col flex-1 overflow-y-auto mb-4 space-y-2"></div>
        </div>
    </div>

</body>

</html>