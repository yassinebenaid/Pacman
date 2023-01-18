<div>
    <div class="flex justify-between p-3 py-5">
        <div class="text-gray-3"> 1 apr 2023, 21:00 </div>
        <div class="flex items-center gap-8">
            <span><i class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i></span>
        </div>
    </div>

    <div class="grid items-start grid-cols-3 gap-10">
        <div
            class="rounded-lg flex flex-col max-h-[66vh] no-scroll pb-[8rem] px-5 bg-white col-span-2  overflow-scroll shadow-default">

            @foreach (range(1, 20) as $image)
                <div class="flex gap-5 p-2 py-5 transition-all border-b border-gray-2 hover:bg-gray-1">
                    <div class="font-medium">1 apr 2023, 12:14</div>
                    <div class="font-semibold">yassine benaid</div>
                    added new task
                </div>
            @endforeach

        </div>


        @include('projects.activities.partials.filters')
    </div>
</div>
</div>
