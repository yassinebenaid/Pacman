<div x-data='{open:0}'>


    <i x-on:click="open=1"
        class=" text-primary cursor-pointer p-0 h-10 w-10 grid place-content-center  bi bi-plus text-[4rem]"></i>


    <div x-show="open" x-cloak class="fixed top-0 left-0 grid justify-center w-screen h-screen pt-20 bg-primary/10">
        <div class="mt-20">
            <div x-show="open" x-transition class="bg-gray-0 px-2 rounded-lg grid  font-medium  w-[35rem] lg:w-[50rem]">


                <div class="flex justify-between font-semibold">
                    <div class="px-4 py-2">New Issue</div>
                </div>

                @include('projects.issues.partials.markdown', ['id' => 'hhh'])

            </div>
        </div>
    </div>

</div>
