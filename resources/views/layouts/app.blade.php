<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'SafeZone')</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>
<body>
    <div>
        <div class="w-full min-h-screen bg-blue-600 text-white">
            @yield('container')
        </div>
    </div>

    <script src="js/modal.js" defer></script>
    <script src="js/caseToggle.js" defer></script>
    <script src="js/authToggle.js" defer></script>
    <script src="js/uploadToggle.js" defer></script>
    <script src="js/sliderInfinite.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>