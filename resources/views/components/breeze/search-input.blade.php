<div x-data="search" class="relative">

    <input x-on:keyup.window="focus($el,$event)" type="search" placeholder="Press / to search"
        class="pl-14 rounded-sm border-gray-2 focus:ring-primary w-60 md:w-96 placeholder:text-gray-3 focus:border-gray-2 focus:w-[30rem] transition-all duration-500 focus:outline-0 ">

    <i class="absolute text-lg -translate-y-1/2 text-gray-3 bi bi-search top-1/2 left-5"></i>


    <script>
        alpine("search", {
            focus(el, event) {
                if (event.key === "/" || event.key === ":") el.focus()
            }
        })
    </script>

</div>
