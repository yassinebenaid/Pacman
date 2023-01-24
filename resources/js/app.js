import './bootstrap';
import Alpine from 'alpinejs';
import Swal from 'sweetalert2';
import collapse from '@alpinejs/collapse';
import "./helpers";



window.Alpine = Alpine;

Alpine.plugin(collapse);

Alpine.start();

window.Swal = Swal;






