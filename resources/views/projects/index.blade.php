<div class="flex justify-between h-screen gap-1 overflow-hidden">

    <div class=" w-max xl:w-96">
        <x-main.side />
    </div>

    <div class="flex-1 h-full p-4 md:p-8">


        <x-main.header>Projects </x-main.header>



        <div class="h-full pt-5 pb-20 overflow-scroll no-scroll">
            @include('projects.partials.nav')


            @include('projects.partials.list', ['projects' => $this->projects])
        </div>

    </div>
    <x-breeze.loading wire:loading />
</div>
