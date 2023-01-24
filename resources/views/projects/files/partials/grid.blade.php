<div class="grid grid-cols-3   pb-[8rem] col-span-2 gap-4  px-14 ">

    @forelse ($project->files as $file)
        <div class="bg-white rounded-lg shadow-default">
            <div class="grid place-content-center text-[6rem]">
                {!! $file->icon !!}
            </div>
            <div class="p-2 font-semibold text-center">
                {{ $file->name }}
            </div>
            <div class="flex items-center justify-between gap-4 px-3 py-2 text-gray-3">
                <div class="flex items-center gap-3">
                    <span>{{ $file->created_at }}</span>
                    <span>{{ $file->size }}</span>
                </div>
                <i wire:click='download({{ $file->id }})'
                    class="px-2 py-1 text-xl transition-all cursor-pointer bi bi-download text-gray-4 bottom-1 right-3 hover:bg-gray-2 rounded-xl"></i>
            </div>
        </div>

    @empty
        <div class="grid col-span-3 font-medium place-content-center text-gray-3/60 h-96">
            <i class="text-[6rem]  bi bi-file-x"></i>
            <span>No files here !</span>
        </div>
    @endforelse

</div>
