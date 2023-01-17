@props(['prc' => 70, 'color' => 'green'])
@php
    $color = match ($color) {
        'primary' => '#3C4DDB',
        'orange' => '#FA6322',
        'blue' => '#5F96E9',
        'yellow' => '#fabe25',
        'green' => '#5ac08f',
    };
@endphp
<svg style=" transform: rotate(-90deg);" width="30" height="30" viewBox="0 0 120 120">
    <circle cx="60" cy="60" r="54" fill="none" stroke="{{ $color }}" stroke-width="12" />
    <circle stroke-dasharray="100" stroke-dashoffset="-{{ $prc }}" cx="60" cy="60" r="54"
        fill="none" stroke="#e6e6e6" stroke-width="12" pathLength="100" />
</svg>
