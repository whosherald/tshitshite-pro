<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Log In | Tshitshite & Bros|Funeral Undertaker</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        
    </head>
    <body class="font-sans text-gray-900 antialiased bg-black">

        <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray" style="background: rgba(128, 128, 128, 0.397);">
            <div>
                <a href="index.html">
                    <img src="assets/images/logo.png" width="180" alt="logo">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 p-6 bg-white overflow-hidden sm:rounded-lg"
             style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); margin-bottom:6em;">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
