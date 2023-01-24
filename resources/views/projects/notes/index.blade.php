<div class="pb-[8rem]">
    <div class="flex justify-end p-3 py-5">
        <div class="flex items-center gap-8">
            <span wire:click='$refresh'><i
                    class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i></span>
        </div>
    </div>

    <div class="grid items-start gap-10 lg:grid-cols-6">
        <div class="flex flex-col w-full gap-4 p-5 bg-white rounded-lg lg:col-span-4 lg:col-start-2 shadow-default">

            @foreach ($project->notes as $note)
                <div class="p-2 border-b border-gray-2">
                    <div class="flex gap-5">
                        <div class="w-14">
                            <x-main.avatar src="29.jpg" />
                        </div>
                        <div>
                            <div class="font-medium">{{ $note->user->name }}</div>
                            <div class="text-sm text-gray-3">{{ $note->user->profession }}</div>
                        </div>
                    </div>


                    <div class="p-5 text-gray-3">
                        <p>{!! safe_text($note->body) !!}</p>

                        <div class="w-full text-xs text-end">{{ $note->created_at }}</div>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- @include('projects.notes.partials.form') --}}

    </div>
    <div class="pt-10">
        {{ $project->notes->links() }}
    </div>
</div>
