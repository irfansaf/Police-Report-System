@props(['message'])

<div {{ $attributes->merge(['class' => 'bg-green-200 border border-green-400 text-green-700 px-4 py-3 rounded']) }} role="alert">
    <p class="font-bold">{{ $message }}</p>
</div>
