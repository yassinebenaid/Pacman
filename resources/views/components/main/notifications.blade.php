<div x-data="{ shown: false }">

    {{-- icon --}}
    <i x-on:click="shown=true"
        class="text-2xl transition-all cursor-pointer text-gray-3 bi bi-bell hover:text-primary hover:opacity-90"></i>


    {{-- model --}}
    <div x-show="shown" x-cloak class="fixed top-0 right-0 z-50 w-screen h-screen bg-indigo-900/20">


        <div x-on:click.away="shown=false" x-show="shown" x-cloak x-transition:enter="ease duration-300"
            x-transition:leave="ease duration-300" x-transition:enter-start="translate-x-full rtl:-translate-x-full"
            x-transition:enter-end="translate-x-0" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full rtl:-translate-x-full"
            class="absolute right-0 w-[30rem] h-full bg-white">

            @if (false)
                <div class="relative p-5">
                    <i x-on:click="shown=false"
                        class="absolute cursor-pointer bi bi-x-lg right-5 top-5 text-gray-3"></i>
                    <div class="pb-1 text-xl font-bold ">
                        Notifications 5
                    </div>

                    <div class="text-sm text-gray-3">
                        <span class="font-medium transition-all cursor-pointer hover:underline hover:text-gray-4"> Mark
                            all as
                            read</span>
                        •
                        <span class="font-medium transition-all cursor-pointer hover:underline hover:text-gray-4"> Clear
                        </span>
                    </div>
                </div>

                <div class="flex flex-col max-h-full pb-20 overflow-y-scroll">
                    @foreach (range(1, 20) as $n)
                        <div class="flex items-start gap-2 p-2 border-t border-gray-2">
                            <i class="bi bi-clipboard-data text-gray-3"></i>
                            <div class="relative grid w-full gap-1">
                                <i class="absolute bi bi-x-lg right-1 top-1 text-gray-3"></i>
                                <div class="font-medium">New task</div>
                                <div class="text-xs">5 minutes ago</div>
                                <div class="py-1 text-sm font-medium text-gray-3">you have a new task to a.</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                {{-- placeholder --}}
                <div class="relative py-20 text-center">
                    <i x-on:click="shown=false"
                        class="absolute cursor-pointer bi bi-x-lg right-5 top-5 text-gray-3"></i>

                    <div class="flex justify-center py-3">
                        <div class="grid px-3 py-2 text-xl rounded-full bg-indigo-50 place-content-center text-primary">
                            <i class="bi bi-bell"></i>
                        </div>
                    </div>
                    <div>
                        <div class="py-1 text-lg font-bold"> No notifications here </div>
                        <div class="text-sm text-slate-400">please check again later</div>
                    </div>
                </div>
            @endif
        </div>

    </div>

</div>
