import './bootstrap';
import 'laravel-datatables-vite';
import * as toastr from 'toastr';

window.toastr = toastr;

window.toastr.options = {
    progressBar: true,
    closeButton: true,
    preventDuplicates: true,
    positionClass: 'toast-bottom-right',
};
