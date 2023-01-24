<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'px-8 py-2 ml-4 font-medium text-white text-sm rounded-md bg-primary hover:shadow-[0_0_5px_0_#3C4DDB] transition-shadow']) }}>
    {{ $slot }}
</button>
