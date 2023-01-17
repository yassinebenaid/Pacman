<div>
    <div class="flex justify-between p-3 py-5">
        <div class="text-gray-3"> 1 apr 2023, 21:00 </div>
        <div class="flex items-center gap-8">
            <span><i class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i></span>
        </div>
    </div>

    <div class="grid items-start grid-cols-3 gap-10">
        <div
            class="rounded-lg flex flex-col max-h-[67vh] no-scroll pb-[8rem] p-5 bg-white col-span-2 gap-4 overflow-scroll shadow-default">

            @foreach (range(1, 20) as $image)
                <div class="p-2 border-b border-gray-2">
                    <div class="flex gap-5">
                        <div>
                            <div class="font-medium">Yassine benaid</div>
                            <div class="text-sm text-gray-3">web developer</div>
                        </div>
                    </div>


                    <div class="p-5 text-gray-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores placeat voluptates iure
                            officia ducimus similique dicta sed, dignissimos voluptas nulla nihil. Voluptatem, vitae
                            doloremque. Saepe quas pariatur impedit ut dolorum.
                        </p>

                        <div class="w-full text-xs text-end">1 apr 2023</div>
                    </div>
                </div>
            @endforeach

        </div>


        @include('projects.activities.partials.filters')
    </div>
</div>
</div>
