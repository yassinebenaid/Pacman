@props(['is_manager' => false])

@if ($is_manager)
    @if ($page == 1)
        <div
            class="relative flex flex-col items-center gap-3 p-5 rounded-lg bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-default ">

            <div class="absolute px-4 py-1 text-xs font-semibold text-white rounded-lg top-1 right-1 bg-primary ">
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
            <div class="absolute px-4 py-1 text-xs font-semibold text-white rounded-lg top-1 right-1 bg-primary ">
                Manager
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
