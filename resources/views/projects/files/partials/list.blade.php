<div>
    <div class="flex justify-between p-3 py-5">
        <div class="text-gray-3"> 8 items in result </div>
        <div class="flex items-center gap-8">
            <span><i class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i></span>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-10">
        <div class="flex flex-col max-h-[67vh] no-scroll pb-[8rem] col-span-2 gap-4 overflow-scroll px-14 ">

            @foreach (range(1, 20) as $image)
                <div class="grid items-center grid-cols-10 p-5 bg-white rounded-lg shadow-default">

                    <div class="text-4xl text-red-500">
                        <i class="bi bi-file-earmark-pdf"></i>
                    </div>
                    <div class="col-span-7">
                        <div class="font-medium "> The larastack dot com </div>
                        <div class="flex gap-3 text-sm text-gray-3">
                            <span>10 apr</span>•
                            <span>5 kb</span>
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-1 font-medium cursor-pointer justify-ter hover:underline text-primary">
                        <i class="bi bi-download"></i> Download
                    </div>
                </div>
            @endforeach

        </div>

        <div class="h-max">
            @include('projects.files.partials.filters')
        </div>
    </div>
</div>
