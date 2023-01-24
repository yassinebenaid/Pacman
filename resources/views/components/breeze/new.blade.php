@props(['visible' => false])

@if ($visible)
    <span class="absolute top-0 right-0 p-1 rounded-full bg-primary">
        <span class="absolute top-0 right-0 p-1 rounded-full animate-ping bg-primary"></span>
    </span>
@endif
