$(document).ready(function() {
    $('#example').DataTable({
        language: {
            searchPlaceholder: 'Search records',
            sSearch: '',
            sLengthMenu: 'Show _MENU_',
            sLength: 'dataTables_length',
            oPaginate: {
                sFirst: '<i class="material-icons">first</i>',
                sPrevious: '<i class="material-icons">previous</i>',
                sNext: '<i class="material-icons">next</i>',
                sLast: '<i class="material-icons">last</i>' 
        }
        }
    });
    $('.dataTables_length select').addClass('browser-default');
});