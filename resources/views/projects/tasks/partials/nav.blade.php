<div class="w-full p-2 px-8 my-4 bg-white rounded-lg shadow-default">
    <div>
        <div class="flex items-center justify-between border-b-2 border-gray-1 ">
            <div class="flex justify-between font-semibold text-gray-3">
                <div
                    class="after:content-[''] after:border-primary after:rounded-t-lg after:border-2 after:absolute after:right-0 after:bottom-0 after:w-full relative
                p-5 transition-all  rounded-sm cursor-pointer text-primary hover:text-primary hover:opacity-90">
                    Tasks
                </div>
                <div class="p-5 transition-all cursor-pointer hover:text-primary hover:opacity-90"> Files </div>
                <div class="p-5 transition-all cursor-pointer hover:text-primary hover:opacity-90">Notes</div>
                <div class="p-5 transition-all cursor-pointer hover:text-primary hover:opacity-90">Activity</div>
                <div class="p-5 transition-all cursor-pointer hover:text-primary hover:opacity-90">About</div>
            </div>

            <div class="flex items-center gap-3 cursor-pointer">
                <div>
                    Team
                </div>
                <div class="flex">
                    @foreach (range(1, 4) as $member)
                        <div class="w-8 -m-1">
                            <x-main.avatar src="29.jpg" border />
                        </div>
                    @endforeach
                </div>

                <div class="font-semibold text-gray-3">
                    Manage Team <i class="text-xl bi bi-arrow-repeat"></i>
                </div>
            </div>

        </div>

    </div>

    <div class="flex justify-between">

        <div class="flex gap-5 py-5 font-medium">
            <div>Status <span class="font-bold cursor-pointer">Any <i class="bi bi-caret-down-fill "></i></span> </div>
            <div>Category <span class="font-bold cursor-pointer">Any <i class="bi bi-caret-down-fill "></i></span>
            </div>
            <div>Assined to <span class="font-bold cursor-pointer">Anyone <i class="bi bi-caret-down-fill "></i></span>
            </div>
            <div>Sorted by <span class="font-bold cursor-pointer">Creation time <i class="bi bi-caret-down-fill "></i>
            </div>
        </div>

        <div class="flex items-center gap-5 ">
            <div class="font-semibold cursor-pointer text-gray-3 hover:underline">Drafts (5)</div>
            <x-breeze.create-button>Create Task </x-breeze.create-button>
        </div>
    </div>
</div>
