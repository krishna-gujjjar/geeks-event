/*
 * @Author: Geek'O Studio
 * @Date: 2019-05-21 21:23:10
 * @Last Modified by: krishna_gujjjar
 * @Last Modified time: 2019-05-25 13:01:26
 */

$(document).ready($ => {
    if ($(document).attr('title') === 'Dashboard – Entorg') {
        if (($("#VolunteerColum").length != 0 && $("#SupplierColum").length != 0)) {
            TableLimit("#VolunteerTable");
            TableLimit("#SupplierTable");
            // $("#VolunteerColum").parent().addClass('row');
            // $("#VolunteerColum").removeClass('col-auto').addClass('col-sm-6');
            // $("#SupplierColum").removeClass('col-auto').addClass('col-sm-6');
            $('.dataTables_length').remove();
            $('.dataTables_filter').remove();
            $('.dataTables_info').parent().remove();
            $('.dataTables_paginate').parent().addClass('mx-auto');
        }

        if (($('#EventColum').parent().attr('class') != 'row') && ($('#EventTable').length != 0)) {
            $('#EventTable').DataTable();
        }

        function TableLimit(TableID) {
            if ($(TableID).length != 0) {
                $(TableID).DataTable({
                    pageLength: 3,
                    lengthMenu: [3, 5, 10, 20, 50, 100]
                });
            }
        }
        console.log($("#EventColum").parent().attr('class') != 'row');
        $('.dataTables_filter label input[type=search]').addClass('rounded-pill form-control-lg');
        $('.table *').addClass('text-center');
    }
    console.log("🎉 Geeks Event Plugin 🎉 \n \n It's Ready for use. 😻");
});