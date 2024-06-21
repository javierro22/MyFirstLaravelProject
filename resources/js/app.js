import 'bootstrap';
// resources/js/app.js
import 'datatables.net-dt/css/jquery.dataTables.css';
import $ from 'jquery';
import dt from 'datatables.net';

$(document).ready(function() {
    $('#users-table').DataTable();
});