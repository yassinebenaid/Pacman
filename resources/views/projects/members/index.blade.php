<x-app-layout>
    <div class="flex justify-between h-screen gap-1 overflow-hidden">

        <div class=" w-max xl:w-96">
            <x-main.sidebar />
        </div>

        <div class="flex-1 h-full p-4 md:p-8">


            <x-main.header>
                <div class="grid gap-3">
                    <div>
                        Facebook
                        <span class="self-end pl-5 text-sm cursor-pointer text-gray-3 hover:underline">Edit</span>
                    </div>

                    <div class="text-sm font-normal cursor-pointer text-slate-500 hover:underline w-max">
                        <i class="bi bi-chevron-left"></i> All projects
                    </div>
                </div>
            </x-main.header>



            <div class="max-h-full pt-5 pb-20 overflow-scroll no-scroll">
                @include('projects.members.partials.nav')

                @include('projects.members.partials.list')
            </div>

        </div>

    </div>
    </div>

</x-app-layout>
