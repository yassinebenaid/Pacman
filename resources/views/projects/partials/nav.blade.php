<div class="w-full p-2 px-8 my-4 bg-white rounded-lg shadow-default">

    <div class="flex items-center justify-between border-b-2 border-gray-1 ">
        <div class="flex justify-between font-semibold text-gray-3">
            <div wire:click='section("all")'
                class="{{ $isAll ? 'border-primary text-primary' : 'border-transparent' }} border-b-4 p-5 transition-all rounded-sm cursor-pointer  hover:text-primary hover:opacity-90">
                All
            </div>
            <div wire:click='section("mine")'
                class="{{ !$isAll ? 'border-primary text-primary' : 'border-transparent' }} border-b-4 p-5 transition-all cursor-pointer  hover:text-primary hover:opacity-90">
                My Projects
            </div>
        </div>

        <div class="flex items-center gap-5 ">
            <div class="font-semibold cursor-pointer text-gray-3 hover:underline">Drafts (5)</div>
            <x-breeze.create-button>Create Project </x-breeze.create-button>
        </div>

    </div>



    <div class="flex gap-5 py-5 font-medium">
        <div>Type

            <livewire:project.filter.type />
        </div>

        <div>Created at

            @include('projects.partials.filter.date')
        </div>

        @if ($isAll)
            <div> Manager
                <livewire:project.filter.manager />
            </div>
        @endif
    </div>
</div>
