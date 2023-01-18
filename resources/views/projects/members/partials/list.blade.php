<div>
    <div class="flex justify-between p-3 py-5">
        <div class="text-gray-3"> 8 items in result </div>
        <div class="flex items-center gap-8">
            <span><i class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i></span>
        </div>
    </div>

    <div class="grid items-start grid-cols-3 gap-10">
        <div
            class="rounded-lg grid xl:grid-cols-3 lg:grid-cols-2 no-scroll pb-[8rem] p-5 col-span-2 gap-4 overflow-scroll">

            <div
                class="relative flex flex-col items-center gap-3 p-5 rounded-lg bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-default ">

                <div class="absolute px-4 py-1 text-xs font-semibold text-white rounded-lg top-1 right-1 bg-primary ">
                    owner
                </div>

                <div class="w-20">
                    <x-main.avatar src="29.jpg" />
                </div>

                <div class="text-center">
                    <div class="font-medium text-white">Yassine benaid</div>
                    <div class="text-sm text-gray">web developer</div>
                </div>

            </div>

            @foreach (range(1, 20) as $image)
                <div class="flex flex-col items-center gap-3 p-5 bg-white rounded-lg shadow-default">

                    <div class="w-20">
                        <x-main.avatar src="29.jpg" />
                    </div>
                    <div class="text-center">
                        <div class="font-medium cursor-pointer hover:underline">Yassine benaid</div>
                        <div class="text-sm text-gray-3">web developer</div>
                    </div>

                </div>
            @endforeach

        </div>


        @include('projects.members.partials.actions')

    </div>
</div>
