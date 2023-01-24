<div class="inline" x-data="{ open: 0, date: 'Anytime' }">

    {{-- clickable text --}}
    <span x-on:click="open=1" class="font-bold cursor-pointer">
        <span x-text="date"></span> <i class="bi bi-caret-down-fill "></i>
    </span>


    {{-- the model --}}
    <div x-show="open" x-cloak
        class="fixed top-0 left-0 pt-20 flex items-center justify-center w-screen h-screen bg-primary/10">

        <div x-show="open" x-on:click.away="open=0" x-transition class="pt-20">

            <div class="mx-5 -translate-y-[40%] bg-gray rounded-xl">

                <div class="px-3 py-2 text-xs text-gray-3">Date</div>

                <div
                    class="overflow-hidden border border-stone-100  bg-white rounded-xl w-[100%] sm:w-[25rem] flex flex-col gap-4">

                    <div class="flex flex-col h-full">

                        <div wire:click="date('any')" x-on:click="open=0;date='Anytime'"
                            class="px-5 py-4 text-center font-medium transition-all border-b cursor-pointer hover:bg-gray-1 last:border-0 border-gray-1">
                            Anytime
                        </div>

                        <div wire:click="date('today')" x-on:click="open=0;date='Today'"
                            class="px-5 py-4 text-center font-medium transition-all border-b cursor-pointer hover:bg-gray-1 last:border-0 border-gray-1">
                            Today
                        </div>

                        <div wire:click="date('this-week')" x-on:click="open=0;date='This week'"
                            class="px-5 py-4 text-center font-medium transition-all border-b cursor-pointer hover:bg-gray-1 last:border-0 border-gray-1">
                            This week
                        </div>

                        <div wire:click="date('this-month')" x-on:click="open=0;date='This month'"
                            class="px-5 py-4 text-center font-medium transition-all border-b cursor-pointer hover:bg-gray-1 last:border-0 border-gray-1">
                            This month
                        </div>

                        <div wire:click="date('this-year')" x-on:click="open=0;date='This year'"
                            class="px-5 py-4 text-center font-medium transition-all border-b cursor-pointer hover:bg-gray-1 last:border-0 border-gray-1">
                            This year
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
