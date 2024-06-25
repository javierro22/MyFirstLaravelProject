// resources/js/app.js
import 'bootstrap';
import $ from 'jquery';
import dt from 'datatables.net-bs5';
import 'datatables.net-bs5/css/dataTables.bootstrap5.min.css';

$(document).ready(function() {
    $('#users-table').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json"
        }
    });
});
