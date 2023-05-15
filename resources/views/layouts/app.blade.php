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
<style>
    .containers {
        background: linear-gradient(180deg, #004790 0%, #2178DD 125.31%);
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
    }

    .circle {
        position: absolute;
        top: 150px;
        width: 40%;
        background: #2178DD;
        height: 60%;
        border: 1px solid white
    }

    .circle2 {
        position: absolute;
        top: 150px;
        left: 20px;
        width: 30%;
        background: #2178DD;
        height: 60%;
        border: 1px solid white
    }

    .circle3 {
        position: absolute;
        width: 80px;
        background: #2178DD;
        height: 80px;
        border: 1px solid white
    }

    .circle4 {
        position: absolute;
        width: 50%;
        left: 0px;
        background: #2178DD;
        height: 60%;
        border: 1px solid white
    }

    .circle5 {
        position: absolute;
        width: 40%;
        background: #2178DD;
        right: 50px;
        height: 60%;
        border: 1px solid white
    }

    .containerss {
        background: linear-gradient(136.88deg, #224c9a 0.19%, rgba(255, 255, 255, 0.14) 80.52%), linear-gradient(0deg, rgba(217, 217, 217, 0.15), rgba(217, 217, 217, 0.15));

    }
</style>

<body class="font-sans antialiased">
    <div class="containers w-full text-white">
        @include('layouts.navigation')
        <main>
            {{ $slot }}
            {{-- @include('layouts.footer') --}}
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
