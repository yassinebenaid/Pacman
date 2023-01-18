<div class="grid gap-5 pb-20 stick -top-1/2">

    <div class="p-5 bg-white rounded-lg shadow-default">
        <div class="flex justify-between py-3 pr-5">
            <div class="text-lg font-bold">Actions</div>
        </div>
        <form class="flex gap-3 pt-1">

            <input
                class="w-full px-3 py-2 border rounded-lg outline-none resize-none border-gray-2 placeholder:text-gray-3 "
                placeholder="Looking for members ?" />

            <button class="px-4 py-2 font-medium text-white rounded-lg bg-primary"> Search</button>
        </form>


        <div class="flex justify-between py-3 pr-5 mt-5">
            <div class="text-lg font-bold"></div>
        </div>

        <button class="w-full px-4 py-2 font-medium text-white rounded-lg bg-primary">Join the team</button>


    </div>

    <div class="p-5 bg-white rounded-lg shadow-default">
        <div class="flex justify-between py-3 pr-5">
            <div class="text-lg font-bold">Membership Requests</div>
        </div>

        <div>
            @foreach (range(1, 6) as $request)
                <div class="flex justify-between py-3 pl-3 border-b border-gray-2 ">
                    <div class="flex items-center gap-3 ">
                        <div class="w-14">
                            <x-main.avatar src="29.jpg" />
                        </div>
                        <div class="hidden xl:inline">
                            <div class="font-medium cursor-pointer hover:underline"> Yassine benaid </div>
                            <div class="text-sm font-medium text-gray-35"> developer</div>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <button class="font-medium hover:underline text-green">Accept</button>
                        <button class="font-medium text-red-500 hover:underline">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="flex justify-between py-3 pr-5 mt-5">
            <div class="text-sm font-medium">or add them manually</div>
        </div>


        <form class="flex gap-3 pt-1">

            <input
                class="w-full px-3 py-2 border rounded-lg outline-none resize-none border-gray-2 placeholder:text-gray-3 "
                placeholder="ID: Type user id" />

            <div class="flex justify-end">
                <button class="px-4 py-2 font-medium text-white rounded-lg bg-primary"> Search</button>
            </div>
        </form>




    </div>

</div>
