<div>
    <div class="grid gap-4 lg:grid-cols-2">
        @foreach (range(1, 20) as $project)
            <div class="p-5 bg-white rounded-lg shadow-default">
                <div class="flex items-center justify-between p-1 text-sm font-bold text-yellow">
                    in developement
                </div>
                <div
                    class="max-w-full p-2 text-xl font-bold break-words cursor-pointer w-max hover:text-primary hover:underline">
                    Web
                    Application for job tracking
                </div>
                <div class="flex gap-4 p-1 text-gray-3">
                    <span>12 Apr</span>
                    <span><i class="bi bi-people"></i> 18</span>
                    <span><i class="bi bi-cash-stack"></i> 12256</span>
                    <span><i class="bi bi-clipboard-data"></i> 12</span>
                </div>
                <div class="text-sm text-gray-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet expedita
                    commodi ipsum. Dolorum non
                    animi, neque earum, vero eum soluta facere perferendis voluptas accusamus minima ab magnam
                    recusandae. Mollitia, facere!
                </div>
            </div>
        @endforeach

        <div class="grid p-5 bg-white rounded-lg place-content-center shadow-default">

            <div class="flex flex-col items-center py-5 text-center">
                <div class="rounded-[50%] bg-primary w-12 h-12 grid place-content-center text-white">
                    <i class="text-2xl bi bi-plus"></i>
                </div>
                <div class="py-2 font-semibold text-primary">Create Project</div>
            </div>
        </div>
    </div>

</div>
