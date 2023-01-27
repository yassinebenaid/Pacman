@props(['src', 'border' => false])
<img class="rounded-full w-full h-full {{ $border ? 'border-2 border-gray-2' : null }}" src="{{ image($src) }}"
    alt="{{ $alt ?? 'avatar' }}">
