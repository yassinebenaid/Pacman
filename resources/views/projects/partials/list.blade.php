<div>
    <div class="flex justify-between p-3 py-5">

        @if (!$isAll)
            <div class="text-gray-3"> {{ $projects->first()?->projects_count }} items in result </div>
        @endif
        {{-- needed for ui friendly --}}
        <div></div>

        <div class="flex items-center gap-8">
            <span>View</span>

            <span wire:click='grid' class="font-semibold cursor-pointer {{ !$isTable ? 'text-primary' : 'text-gray-3' }}">
                <i class="bi bi-grid-3x3-gap-fill"></i> Grid
            </span>

            <span wire:click='table' class="font-semibold cursor-pointer {{ $isTable ? 'text-primary' : 'text-gray-3' }}">
                <i class="text-xl bi bi-list"></i> List
            </span>

            <span wire:click='$refresh'>
                <i class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i>
            </span>
        </div>
    </div>


    @if ($isTable)
        @include('projects.partials.table', ['projects' => $projects])
    @else
        @include('projects.partials.grid', ['projects' => $projects])
    @endif

    {{-- pagination --}}
    <div class="pt-10">
        {{ $projects->links() }}
    </div>

</div>
