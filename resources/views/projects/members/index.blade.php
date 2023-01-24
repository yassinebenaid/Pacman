<div x-data="{ manually: 1 }" class="pb-20">

    <div class="flex justify-between p-3 py-5">
        <div class="text-gray-3"> {{ ++$project->members_count }} @choice('member|members', $project->members_count) in total </div>

        <div class="flex items-center gap-8">

            <div x-data="{ open: 0 }">
                <form x-on:click.away="open=0" wire:submit.prevent='$refresh' class="relative">
                    <input wire:model.defer='name' type="search"
                        class="rounded-full w-max pl-14 focus:border-gray-2 focus:ring-gray-2 border-gray-2 "
                        placeholder="look for members ">
                    <button type="submit">
                        <i class="absolute text-lg -translate-y-1/2 left-5 bi bi-search top-1/2 text-gray-3"></i>
                    </button>
                </form>
            </div>

            @if ($project->authIsManager())
                @livewire('project.filter.add-members-manually', ['project_id' => $project->id])


                @include('projects.members.partials.membership-requests')
            @endif

            <span wire:click='$refresh'><i
                    class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i></span>
        </div>
    </div>



    <div class="grid items-start gap-10 ">
        <div
            class="rounded-lg grid xl:grid-cols-5 w-full lg:grid-cols-4 md-grid-cols-3 sm:grid-cols-2 no-scroll pb-[8rem] p-5  gap-4 overflow-scroll">

            {{-- owner --}}
            @include('projects.members.partials.member-card', ['is_manager' => true])


            {{-- other members --}}
            @foreach ($project->members as $member)
                @include('projects.members.partials.member-card')
            @endforeach

        </div>


        <div class="pt-20 ">
            {{ $project->members->links() }}
        </div>
    </div>
</div>
