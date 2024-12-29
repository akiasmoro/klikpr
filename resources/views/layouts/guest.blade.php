<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app-frontend.css'])
        @vite(['resources/js/app-frontend.js'])

        <style>
            .bg-image {
                background-image: url('{{ asset('img/lampung-hero.png') }}'); /* Path gambar */
                background-size: cover; /* Gambar menutupi seluruh layar */
                background-position: center; /* Pusatkan gambar */
                background-repeat: no-repeat; /* Jangan ulangi gambar */
                min-height: 100vh; /* Tinggi minimum layar penuh */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <x-selected-theme />
        <div class="bg-image">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
