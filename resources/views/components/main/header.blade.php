<div class="flex justify-between pb-5">
    <div class="flex items-center gap-1 text-3xl font-bold">
        {{ $slot }}
    </div>
    <div class="flex items-center gap-5">

        <x-main.global-search />

        <div>
            <i
                class="text-2xl transition-all cursor-pointer text-gray-3 bi bi-gear hover:text-primary hover:opacity-90"></i>
        </div>



        <x-main.notifications />


    </div>
</div>
