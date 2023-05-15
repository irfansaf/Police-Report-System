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
</style>
<body class="font-sans antialiased">
<div class="w-full min-h-screen containers text-white">
    @include('police.layouts.navigation')

    {{--            <!-- Page Heading -->--}}
    {{--            @if (isset($header))--}}
    {{--                <header class="bg-white shadow">--}}
    {{--                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
    {{--                        {{ $header }}--}}
    {{--                    </div>--}}
    {{--                </header>--}}
    {{--            @endif--}}

    <!-- Page Content -->
    <main>
        {{$slot}}
    </main>
    @include('police.layouts.footer')
</div>
<!-- Script-->
@stack('scripts')
</body>
</html>
