<div class="pb-[8rem]">

    <div class="grid items-start gap-10 lg:grid-cols-6">
        <div class="flex flex-col w-full px-2 bg-white rounded-lg shadow-default lg:col-span-4 lg:col-start-2">

            @foreach ($project->notes as $note)
                <div class="border-b">
                    <div class="flex gap-3 p-3 pb-0">
                        <div class="w-10 ">
                            <x-main.avatar src="29.jpg" />
                        </div>
                        <div>
                            <div class="font-medium">{{ $note->user->name }}</div>
                            <div class="text-sm text-gray-3">{{ $note->user->profession }}</div>
                        </div>
                    </div>


                    <div class="p-2 font-medium text-slate-600" class="break-words">
                        {!! $note->body_html !!}
                    </div>

                    <div class="flex items-center justify-between w-full px-5 py-4 ">
                        <div class="flex gap-2 text-sm text-slate-500">
                            <span><i class="px-2 bi bi-eye"></i> 4</span>
                            <span><i class="px-2 bi bi-chat-square"></i>45</span>
                        </div>
                        <div class="text-xs text-gray-3"> {{ $note->created_at }} </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
    <div class="pt-10">
        {{ $project->notes->links() }}
    </div>
</div>
