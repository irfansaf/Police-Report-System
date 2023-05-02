@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-2 border-black rounded-lg py-2.5 px-4 mt-4 w-full outline-none input-on-hover ease-in-out duration-100 transform hover:-translate-y-0.5 hover:-translate-x-0.5']) !!}>
