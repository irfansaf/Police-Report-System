<div class="w-full flex flex-col justify-center items-center py-8 gap-4 text-white">
    <div class="shrink-0 flex items-center">
        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
    </div>
    <div class="w-2/5 flex justify-center items-center text-medium border-b-2 py-2 border-white gap-5 font-medium">
        <a href="{{ route('dashboard') }}">
            <div class="hover:border-b-2">HOMEPAGE </div>
        </a>
        <a href="{{ route('about') }}">
            <div class="hover:border-b-2"> ABOUT </div>
        </a>
    </div>
    <div>&copy 2023 SafeZone. All rights reserved</div>
</div>
