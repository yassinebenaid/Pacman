<div class="pt-5 pb-20">

    <div class="grid items-start gap-10 lg:grid-cols-2 xl:grid-cols-3">
        <div
            class="rounded-lg flex flex-col pb-[8rem] px-5 bg-white xl:col-span-2 shadow-default hover:shadow-door transition-all">
            <div class="py-4 text-xl font-bold">Details</div>

            <div>
                <div class="flex justify-center p-4 text-2xl font-semibold">
                    {{ $project->name }}
                </div>
                <div class="text-center text-gray-3">{{ $project->type }}</div>
            </div>

            <div class="py-10 text-gray-35">
                <p>{!! safe_text($project->description) !!}</p>
            </div>

            <div class="flex gap-4 p-4 ">
                <div class="text-sm">created in : </div>
                <div class="font-medium">{{ $project->created_at }}</div>
            </div>

        </div>


        <div class="grid gap-5">
            <div class="p-4 transition-all bg-white rounded-lg shadow-default hover:shadow-door">
                <div class="text-lg font-bold">Manager</div>

                <div class="flex gap-4 p-4 ">
                    <div class="w-14">
                        <x-main.avatar src="29.jpg" />
                    </div>
                    <div>
                        <div class="font-medium">{{ $project->manager->name }}</div>
                        <div class="text-sm">{{ $project->manager->profession }}</div>
                    </div>
                </div>
            </div>

            <div class="grid">
                <div class="p-4 transition-all bg-white rounded-lg shadow-default hover:shadow-door">
                    <div class="text-lg font-bold">Categories</div>

                    <div class="flex flex-wrap gap-4 p-4">
                        <div class="px-3 py-1 text-sm font-medium bg-primary/10 text-primary rounded-xl">
                            web developement </div>
                        <div class="px-3 py-1 text-sm font-medium bg-primary/10 text-primary rounded-xl">
                            programming </div>
                        <div class="px-3 py-1 text-sm font-medium bg-primary/10 text-primary rounded-xl">
                            web </div>
                        <div class="px-3 py-1 text-sm font-medium bg-primary/10 text-primary rounded-xl">
                            Laravel </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
