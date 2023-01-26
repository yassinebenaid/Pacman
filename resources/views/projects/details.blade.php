<div x-data x-on:status:success.window="$wire.$refresh" class="flex justify-between h-screen gap-1 overflow-hidden">

    <div class=" w-max xl:w-96">
        <x-main.side />
    </div>

    <div class="flex-1 h-full p-4 md:p-8">


        <x-main.header>
            <div class="grid gap-3">
                <div>
                    {{ $project->name }}

                    @if ($project->authIsManager())
                        <span class="self-end pl-5 text-sm cursor-pointer text-gray-3 hover:underline">Edit</span>
                    @endif
                </div>

                <a href="{{ route('home') }}"
                    class="text-sm font-normal cursor-pointer text-slate-500 hover:underline w-max">
                    <i class="bi bi-chevron-left"></i> All projects
                </a>
            </div>
        </x-main.header>



        <div x-data x-on:should:scroll.window="$el.scroll({top: 0,left: 0,behavior: 'smooth'})"
            class="h-full pt-5 pb-20 overflow-scroll no-scroll">

            @include('projects.partials.nav-2')

            @include("projects.$section.index")
        </div>

    </div>
    <x-breeze.loading wire:loading />
</div>
