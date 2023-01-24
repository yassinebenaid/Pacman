<div x-data="scroller" x-show="show" x-init="el($el.parentElement)"
    class="fixed grid w-12 h-12 text-white border-2 border-white rounded-full bg-primary place-content-center bottom-20 right-10 shadow-default-5">
    <i class="text-2xl bi bi-chevron-up"></i>

    <script>
        alpine('scroller', {
            show: 0,
            el(el) {
                console.log(el)
                el.onscroll = () => {
                    if (window.scrollY > 200) this.show = 1
                    else this.open = 0
                }
            }
        })
    </script>
</div>
