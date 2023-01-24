@props(['is_manager' => false])

@if ($is_manager)
    @if ($page == 1)
        <div
            class="relative flex flex-col items-center gap-3 p-5 rounded-lg bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-default ">

            <div class="absolute px-4 py-1 text-xs font-semibold text-white rounded-lg top-1 left-1 bg-primary ">
                owner
            </div>

            <div class="w-20">
                <x-main.avatar src="29.jpg" />
            </div>

            <div class="text-center">
                <div class="font-medium text-white">{{ $project->manager->name }}</div>
                <div class="text-sm text-gray">{{ $project->manager->profession }}</div>
            </div>

        </div>
    @endif
@else
    <div class="relative flex flex-col items-center gap-3 p-5 bg-white rounded-lg shadow-default">


        @if ($member->pivot->is_manager)
            <div class="absolute px-4 py-1 text-xs font-semibold text-white rounded-lg top-1 left-1 bg-primary ">
                Manager
            </div>
        @endif
        @if ($project->authIsOwner())
            <div x-data="{ open: 0 }" class="absolute top-0 right-0 p-2">
                <i @click="open=1"
                    class="p-2 transition-all rounded-lg cursor-pointer bi bi-three-dots-vertical hover:bg-gray-1"></i>
                <div @click.away="open=0" x-show="open" x-cloak x-transition.origin.right.top
                    class="absolute top-0 grid w-40 bg-white border rounded-md right-full shadow-default border-gray-1">

                    @if ($member->pivot->is_manager)
                        <div wire:click='disupgrade("{{ encrypt($member->id) }}")'
                            class="p-3 transition-all cursor-pointer hover:bg-gray-1">
                            <i class="bi bi-shield-minus text-yellow "></i> Disupgrade
                        </div>
                    @else
                        <div wire:click='upgrade("{{ encrypt($member->id) }}")'
                            class="p-3 transition-all cursor-pointer hover:bg-gray-1">
                            <i class="bi bi-shield-plus text-blue"></i> Upgrade
                        </div>
                    @endif

                    <div wire:click='remove("{{ encrypt($member->id) }}")'
                        class="p-3 transition-all cursor-pointer hover:bg-gray-1">
                        <i class="text-red-500 bi bi-trash"></i> Remove
                    </div>
                </div>
            </div>
        @endif

        <div class="w-20">
            <x-main.avatar src="29.jpg" />
        </div>
        <div class="text-center">
            <div class="font-medium cursor-pointer hover:underline">{{ $member->name }}</div>
            <div class="text-sm text-gray-3">{{ $member->profession }}</div>
        </div>

    </div>
@endif
