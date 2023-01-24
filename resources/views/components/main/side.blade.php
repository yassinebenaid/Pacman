<div class="sticky top-0 flex flex-col h-full bg-white w-max md:w-full shadow-default">

    <a href="{{ route('home') }}" class="py-5 border- b px-7 border-gray-2 ">
        <x-breeze.application-logo />
    </a>

    <div class="flex items-center gap-3 py-5 pl-7">
        <div class="w-14">
            <x-main.avatar src="29.jpg" />
        </div>
        <div class="hidden xl:inline">
            <div class="text-xl font-bold"> {{ auth()->user()->name }} </div>
            <div class="text-lg font-medium"> developer</div>
        </div>
    </div>


    <div class="grid gap-10 py-10 text-xl font-bold text-gray-3 pl-7">
        <a href="{{ route('home') }}"
            class="transition-all xl:after:inline after:hidden after:content-[''] after:border-primary after:rounded-l-lg after:border-2 after:absolute after:right-0 after:h-full relative rounded-lg cursor-pointer text-primary hover:text-primary hover:opacity-80 ">
            <i class="px-2 text-2xl bi bi-layers "></i> <span class="hidden xl:inline"> Projects </span>
        </a>
        <div class="transition-all cursor-pointer hover:text-primary hover:opacity-80">
            <i class="px-2 text-2xl bi bi-calendar"></i> <span class="hidden xl:inline"> Calender</span>
        </div>
        <div class="transition-all cursor-pointer hover:text-primary hover:opacity-80">
            <i class="px-2 text-2xl bi bi-flag"></i> <span class="hidden xl:inline">Reports</span>
        </div>
        <div class="transition-all cursor-pointer hover:text-primary hover:opacity-80">
            <i class="px-2 text-2xl bi bi-arrow-left-right"></i> <span class="hidden xl:inline">Discussion</span>
        </div>
    </div>


</div>
