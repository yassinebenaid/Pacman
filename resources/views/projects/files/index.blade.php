<div>
    <div class="flex justify-between p-3 py-5">
        <div class="text-gray-3"> {{ $project->files_count }} items in result </div>
        <div class="flex items-center gap-8">
            <span>View</span>
            <span wire:click='grid'
                class="font-semibold cursor-pointer {{ $view === 'grid' ? 'text-primary' : 'text-gray-3' }}"><i
                    class="bi bi-grid-3x3-gap-fill"></i> Grid</span>
            <span wire:click='table'
                class="font-semibold cursor-pointer {{ $view === 'table' ? 'text-primary' : 'text-gray-3' }}"><i
                    class="text-xl bi bi-list"></i>
                List</span>
            <span wire:click='$refresh'><i
                    class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i></span>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-10">

        @if ($view === 'table')
            @include('projects.files.partials.table')
        @else
            @include('projects.files.partials.grid')
        @endif

        <div class="h-max">
            @include('projects.files.partials.filters')
        </div>
    </div>

    <div class="pt-10">
        {{ $project->files->links() }}
    </div>
</div>
