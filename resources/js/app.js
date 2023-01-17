import './bootstrap';
import Alpine from 'alpinejs';
import Swal from 'sweetalert2';
import collapse from '@alpinejs/collapse';

alpine("popup", {
    open: false,
    show() {
        this.open = true
    },
    hide() {
        this.open = false
    },
    init() {
        setInterval(() => {
            if (window.innerWidth > 769) this.show()
        }, 1000);
    }
})


window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();

window.Swal = Swal;
window.addEventListener("test", (e) => {
    Swal.fire({
        title: e.detail.title ?? "Error !",
        text: e.detail.message ?? "somthing went wrong !",
        icon: 'error',
        confirmButtonText: 'OK'
    })
})



