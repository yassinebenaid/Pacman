<div x-data="{ open: 0 }">

    {{-- icon --}}
    <span x-on:click="open=1" class="relative">
        <i class="text-2xl cursor-pointer bi bi-person-down text-gray-3 hover:text-primary"></i>
        <x-breeze.new :visible="$project->membership_requests->count()" />
    </span>

    {{-- side model --}}
    <div x-show="open" x-cloak class="fixed top-0 right-0 z-50 w-screen h-screen bg-indigo-900/20">


        <div x-on:click.away="open=false" x-show="open" x-cloak x-transition:enter="ease duration-300"
            x-transition:leave="ease duration-300" x-transition:enter-start="translate-x-full rtl:-translate-x-full"
            x-transition:enter-end="translate-x-0" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full rtl:-translate-x-full"
            class="absolute right-0 w-[30rem] h-full bg-white">

            @if ($project->membership_requests->isNotEmpty())
                <div class="relative p-5">
                    <i x-on:click="shown=false"
                        class="absolute cursor-pointer bi bi-x-lg right-5 top-5 text-gray-3"></i>
                    <div class="pb-1 text-xl font-bold ">
                        Membership Raquests
                    </div>

                    <div class="text-sm text-gray-3">
                        <span class="font-medium transition-all ">
                            {{ $project->membership_requests->count() }} @choice('request|requests', $project->membership_requests->count())
                        </span>
                    </div>
                </div>

                <div class="flex flex-col max-h-full pb-20 overflow-y-scroll no-scroll">
                    @foreach ($project->membership_requests as $request)
                        <div class="flex justify-between px-6 py-3 pl-3 border-b border-gray-2 ">
                            <div class="flex items-center gap-3 ">
                                <div class="w-14">
                                    <x-main.avatar src="29.jpg" />
                                </div>
                                <div>
                                    <div class="font-medium cursor-pointer hover:underline"> {{ $request->name }}
                                    </div>
                                    <div class="text-sm font-medium text-gray-35"> {{ $request->profession }}</div>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <button wire:click='accept("{{ encrypt($request->id) }}")'
                                    class="font-medium hover:underline text-green">Accept</button>
                                <button wire:click='remove("{{ encrypt($request->id) }}")'
                                    class="font-medium text-red-500 hover:underline">Remove</button>
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
                        <div class="grid px-3 py-2 rounded-full bg-indigo-50 place-content-center text-primary">
                            <i class="text-3xl bi bi-person-exclamation"></i>
                        </div>
                    </div>
                    <div>
                        <div class="py-1 text-lg font-bold"> No requests here </div>
                        <div class="text-sm text-slate-400">please check again later</div>
                    </div>
                </div>
            @endif
        </div>

    </div>
</div>
