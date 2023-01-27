<div x-data x-on:status:success.window="$wire.$refresh" class="flex justify-between h-screen pb-20 gap-1 overflow-hidden">

    <div class=" w-max xl:w-96">
        <x-main.side />
    </div>

    <div class="flex-1  h-screen  overflow-y-scroll p-4  md:p-8">


        <x-main.header>
            <div class="grid gap-3">
                <div>
                    {{ $issue->project->name }}

                    @if ($issue->project->authIsManager())
                        <span class="self-end pl-5 text-sm cursor-pointer text-gray-3 hover:underline">Edit</span>
                    @endif
                </div>

                <a href="{{ url(route('project.show', $issue->project->definer) . '?cs=issues') }}"
                    class="text-sm font-normal cursor-pointer text-slate-500 hover:underline w-max">
                    <i class="bi bi-chevron-left"></i> Get back
                </a>
            </div>
        </x-main.header>



        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 grid gap-5">
                <div class=" bg-white rounded-lg shadow-default">

                    <div class="p-5">
                        {!! $issue->body_html !!}
                    </div>

                    {{-- <div class="p-3 mt-5 flex justify-between text-gray-3  border-t">
                        <div>
                            <span> <i class="bi bi-eye px-3"></i>1202 </span>
                            <span> <i class="bi bi-chat-square px-3"></i>12 </span>
                        </div>
                        <div>{{ $issue->created_at }} </div>
                    </div> --}}
                </div>

                <div class="grid gap-2 p-5 pb-20">
                    @foreach ($issue->replies as $reply)
                        <div class="flex gap-2 items-start justify-start ">
                            <div class="w-12 shrink-0">
                                <x-main.avatar src="29.jpg" />
                            </div>
                            <div class="grid p-2 rounded-lg bg-white border w-full">
                                <div class="p-1">
                                    <div class="font-medium">{{ $reply->user->name }}</div>
                                    <div class="text-sm text-gray-3">{{ $reply->user->profession }}</div>
                                </div>
                                <div class="p-3">{!! $reply->body_html !!}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="p-2 grid h-max gap-5">
                <div class="bg-white shadow-default p-2 rounded-lg">
                    <div class="font-semibold p-2 border-b">Details </div>


                    <div>
                        <div class="text-xs text-gray-3 p-2">author</div>
                        <div class="flex gap-2 px-5 p-2 items-center ">
                            <div class="w-12 shrink-0">
                                <x-main.avatar src="29.jpg" />
                            </div>
                            <div class="">
                                <div class="font-medium">{{ $issue->user->name }}</div>
                                <div class="text-sm text-gray-3">{{ $issue->user->profession }}</div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="text-xs text-gray-3 p-2">Creating date</div>
                        <div class="p-1 px-5 font-medium">
                            {{ $issue->created_at }}
                        </div>
                    </div>

                    <div>
                        <div class="text-xs text-gray-3 p-2">Analytics</div>
                        <div class="p-1 px-5 font-medium flex gap-3">
                            <div>55 <span class="text-sm">Views</span> </div> •
                            <div>55 <span class="text-sm">Replies</span> </div>
                        </div>
                    </div>
                </div>

                <button
                    class="bg-primary text-white font-medium py-2 hover:shadow-[0_0_5px_1px_#3C4DDB] flex items-center justify-center gap-3 px-5 rounded-lg">
                    <i class="bi bi-reply text-2xl"></i> <span>Reply</span></button>
            </div>


        </div>
    </div>
    <x-breeze.loading wire:loading />
</div>
