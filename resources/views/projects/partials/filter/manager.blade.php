<div class="inline" x-data="{ open: 0, user: 'Anyone' }">

    {{-- clickable text --}}
    <span x-on:click="open=1" class="font-bold cursor-pointer">
        <span x-text="user"> </span> <i class="bi bi-caret-down-fill "></i>
    </span>


    {{-- the model --}}
    <div x-show="open" x-cloak class="fixed top-0 left-0 flex justify-center w-screen h-screen pt-20 bg-primary/10">

        <div x-show="open" x-on:click.away="open=0" x-transition class="pt-20 mt-10">

            <div class="mx-5 mt-20 bg-gray-0 rounded-xl">

                <div class="px-3 py-2 text-xs text-gray-3">Managers</div>

                <div class="  bg-white rounded-xl w-[100%] sm:w-[25rem] flex flex-col gap-4">

                    <div class="relative w-full px-4 py-5">

                        <i class="absolute -translate-y-1/2 bi bi-search left-5 top-1/2 text-gray-3"></i>

                        <input wire:model.debounce.800ms='manager' x-ref="input" type="text"
                            class="w-full border-0 border-b pl-14 border-gray-2 focus:ring-0 focus:border-gray-3 placeholder:text-gray-3/70 placeholder:font-normal"
                            placeholder="Type manager name or email" autofocus>
                    </div>

                    <div class="flex flex-col h-full">

                        @foreach ($managers as $manager)
                            <div wire:click="$emitUp('manager',{{ $manager->id }})"
                                x-on:click="open=0;$refs.input.value=null;user='{{ $manager->name }}'"
                                class="px-5 py-2 font-medium transition-all border-b cursor-pointer hover:bg-gray-1 last:border-0 border-gray-1">
                                <div>{{ $manager->name }}</div>
                                <div class="px-2 text-sm text-gray-3">{{ $manager->email }}</div>
                            </div>
                        @endforeach

                        <div wire:click="$emitUp('manager','any')"
                            x-on:click="open=0;$refs.input.value=null;user='Anyone'"
                            class="px-5 py-4 font-medium transition-all border-b cursor-pointer hover:bg-gray-1 last:border-0 border-gray-1">
                            Anyone
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
