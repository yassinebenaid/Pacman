<div class="w-full p-2 px-8 my-4 bg-white rounded-lg shadow-default">
    <div>
        <div class="flex items-center justify-between border-b-2 border-gray-1 ">
            <div class="flex justify-between font-semibold text-gray-3">
                <div
                    class="p-5 transition-all border-b-4 rounded-sm cursor-pointer text-primary border-primary hover:text-primary hover:opacity-90">
                    All
                </div>
                <div class="p-5 transition-all cursor-pointer hover:text-primary hover:opacity-90">My Projects</div>
            </div>

            <div class="flex items-center gap-5 ">
                <div class="font-semibold cursor-pointer text-gray-3 hover:underline">Drafts (5)</div>
                <x-breeze.create-button>Create Project </x-breeze.create-button>
            </div>

        </div>

    </div>

    <div class="flex gap-5 py-5 font-medium">
        <div>Status <span class="font-bold cursor-pointer">Any <i class="bi bi-caret-down-fill "></i></span> </div>
        <div>Created at <span class="font-bold cursor-pointer">Anytime <i class="bi bi-caret-down-fill "></i></div>
        <div>created by <span class="font-bold cursor-pointer">Anyone <i class="bi bi-caret-down-fill "></i></div>
    </div>
</div>
