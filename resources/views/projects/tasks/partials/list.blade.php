<div>

    <div class="flex justify-between p-3 py-5">
        <div class="text-gray-3"> 8 items in result </div>
        <div class="flex items-center gap-8">
            <span>View</span>
            <span class="font-semibold cursor-pointer text-primary"><i class="bi bi-grid-3x3-gap-fill"></i> Grid</span>
            <span class="font-semibold cursor-pointer text-gray-3"><i class="text-xl bi bi-list"></i> List</span>
            <span><i class="text-2xl cursor-pointer bi bi-repeat text-gray-3 hover:text-primary"></i></span>
        </div>
    </div>


    <div class="grid gap-4 lg:grid-cols-2 xl:grid-cols-3">
        @foreach (range(1, 6) as $project)
            <div class="p-5 bg-white rounded-lg shadow-default">
                <div class="flex items-center justify-between p-1 ">

                    <div class="text-sm font-bold text-yellow">in Progress </div>

                    <div class="relative show-on-hover">
                        <div
                            class="hidden target absolute z-20 bottom-[120%] w-max bg-white p-5 rounded-lg -right-1/2 shadow-default-5">
                            <div class="font-medium">Deadline in 1 week</div>
                            <div class="font-semibold text-green">10 dec 2023</div>

                            <span class="absolute p-3 bg-white rounded-md right-[10%] rotate-45 bottom-[-15%]"></span>

                        </div>
                        <x-breeze.progress prc=70 />
                    </div>

                </div>


                <div class="max-w-full p-2 text-xl font-bold break-words w-max">
                    Web
                    Application for job tracking
                </div>


                <div class="flex gap-4 p-1 text-gray-3">
                    <span>12 Apr</span>
                    <span><i class="bi bi-paperclip"></i> 12</span>
                    <span><i class="bi bi-chat-square"></i> 18</span>
                    <span><i class="bi bi-usb-symbol "></i> 18</span>
                    <span><i class="bi bi-people "></i> 3</span>
                </div>



                <div class="pt-4 text-lg font-semibold cursor-pointer w-max hover:underline text-primary">
                    View task <i class="text-xl bi bi-chevron-down "></i>
                </div>
            </div>
        @endforeach


        <div class="grid p-5 bg-white rounded-lg place-content-center shadow-default">

            <div class="flex flex-col items-center py-5 text-center">
                <div class="rounded-[50%] bg-primary w-12 h-12 grid place-content-center text-white">
                    <i class="text-2xl bi bi-plus"></i>
                </div>
                <div class="pt-2 font-semibold text-primary">Create Task</div>
            </div>
        </div>
    </div>
</div>
