<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    </head>
    <body class="font-sans antialiased">
        <div class="w-full min-h-screen bg-blue-600 text-white">
            @include('layouts.navigation')


            <main>
                {{$slot}}
            </main>
        </div>
        <!-- Script-->
        @stack('scripts')
        <script src="js/modal.js" defer></script>
        <script src="js/caseToggle.js" defer></script>
        <script src="js/authToggle.js" defer></script>
        <script src="js/uploadToggle.js" defer></script>
        <script src="js/sliderInfinite.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="js/slider.js"></script>
        <script src="js/utils.js"></script>
    </body>
</html>
