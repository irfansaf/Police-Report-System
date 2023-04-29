<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/regular.min.css">
    <title>Document</title>
</head>

<body>
    <div class="w-full min-h-screen bg-blue-600 text-white">
        @include('admin.partials.navbar')
        <div class="w-full h-full">
            @yield('container')
        </div>
        @include('admin.partials.footer')
    </div>
</body>

</html>
