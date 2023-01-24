<div class="p-5 bg-white rounded-lg shadow-default">
    <div class="flex justify-between py-3 pr-5 border-b border-gray-1">
        <div class="text-lg font-bold"> Files</div>
    </div>

    <div class="grid pt-1">

        <div wire:click='type("all")'
            class="flex justify-between px-5 py-3 font-medium cursor-pointer text-gray-3 hover:text-primary hover:opacity-90 hover:bg-gray-1">
            <div class="px-4"> All</div>
            <div>{{ $project->files_count }}</div>
        </div>

        <div wire:click='type("img")'
            class="flex justify-between px-5 py-3 font-medium cursor-pointer text-gray-3 hover:text-primary hover:opacity-90 hover:bg-gray-1">
            <div><i class="px-2 bi bi-image"></i> image</div>
            <div>{{ $project->files_img_count }}</div>
        </div>

        <div wire:click='type("pdf")'
            class="flex justify-between px-5 py-3 font-medium cursor-pointer text-gray-3 hover:text-primary hover:opacity-90 hover:bg-gray-1">
            <div><i class="px-2 bi bi-file-earmark-pdf"></i> pdf</div>
            <div> {{ $project->files_pdf_count }}</div>
        </div>

        <div wire:click='type("code")'
            class="flex justify-between px-5 py-3 font-medium cursor-pointer text-gray-3 hover:text-primary hover:opacity-90 hover:bg-gray-1">
            <div><i class="px-2 bi bi-file-earmark-code"></i> source</div>
            <div>{{ $project->files_code_count }}</div>
        </div>

        <div wire:click='type("zip")'
            class="flex justify-between px-5 py-3 font-medium cursor-pointer text-gray-3 hover:text-primary hover:opacity-90 hover:bg-gray-1">
            <div><i class="px-2 bi bi-file-earmark-zip"></i> zip</div>
            <div>{{ $project->files_zip_count }}</div>
        </div>

        <div wire:click='type("other")'
            class="flex justify-between px-5 py-3 font-medium cursor-pointer text-gray-3 hover:text-primary hover:opacity-90 hover:bg-gray-1">
            <div><i class="px-2 bi bi-file-earmark"></i> others</div>
            <div>{{ $project->files_other_count }} </div>
        </div>
    </div>
</div>
