<div class="py-5">
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span
                        class='px-8 py-2 ml-4 text-sm font-medium transition-shadow border rounded-md border-primary text-primary'>
                        {!! __('pagination.previous') !!}
                    </span>
                    {{-- <span
                        class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded-md cursor-default">

                    </span> --}}
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev"
                        class='px-8 py-2 ml-4 font-medium text-white text-sm rounded-md bg-primary hover:shadow-[0_0_5px_0_#3C4DDB] transition-shadow'>
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
            </span>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                        class='px-8 py-2 ml-4 font-medium text-white text-sm rounded-md bg-primary hover:shadow-[0_0_5px_0_#3C4DDB] transition-shadow'>
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span
                        class='px-8 py-2 ml-4 text-sm font-medium transition-shadow border rounded-md border-primary text-primary'>
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
