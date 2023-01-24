<div x-data="{ open: 0 }">
    <span x-on:click="open=1" class="relative">
        <i class="text-2xl cursor-pointer bi bi-person-plus text-gray-3 hover:text-primary"></i>
    </span>

    <div x-show="open" x-cloak class="fixed top-0 left-0 z-50 flex justify-center w-screen h-screen pt-20 bg-primary/10">

        <div x-show="open" x-transition class="pt-20 mt-10">

            <div x-on:click.away="open=0" class="mx-5 mt-20 bg-gray rounded-xl">

                <div class="px-3 py-2 text-xs text-gray-3">Users</div>

                <div class="  bg-white rounded-xl w-[100%] sm:w-[25rem] flex flex-col gap-4">

                    <div class="relative w-full px-4 py-5">

                        <i class="absolute -translate-y-1/2 bi bi-search left-5 top-1/2 text-gray-3"></i>

                        <input wire:model.debounce.800ms='user' x-ref="input" type="text"
                            class="w-full border-0 border-b pl-14 border-gray-2 focus:ring-0 focus:border-gray-3 placeholder:text-gray-3/70 placeholder:font-normal"
                            placeholder="Type a user name or email" autofocus>
                    </div>

                    <div class="flex flex-col h-full">

                        @foreach ($users as $user)
                            <div wire:click="$emitUp('add-new-member',{{ $user->id }})"
                                x-on:click="open=0;$refs.input.value=null;"
                                class="px-5 py-2 font-medium transition-all border-b cursor-pointer hover:bg-gray-1 last:border-0 border-gray-1">
                                <div>{{ $user->name }}</div>
                                <div class="px-2 text-sm text-gray-3">{{ $user->email }}</div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
