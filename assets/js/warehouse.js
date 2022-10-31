(function ($) {
    "use strict";
    $(document).ready(function () {

        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();
        $("#location_item").focus();
        $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});


//              =============== its for warehouselist datatables ==================
        var table = $("#warehouselist").DataTable({
            dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
            buttons: [{
                    extend: "copy", className: "btn-sm"
                }
                , {
                    extend: "csv", title: "ExampleFile", className: "btn-sm"
                }
                , {
                    extend: "excel", title: "ExampleFile", className: "btn-sm"
                }
                , {
                    extend: "pdf", title: "ExampleFile", className: "btn-sm"
                }
                , {
                    extend: "print", className: "btn-sm"
                },
            ],
            order: [],
            paging: true,
            "searching": true,
            "processing": true,
            "serverSide": true,
            'columnDefs': [
                {
                    "targets": 3,
                    "className": "text-right",
                }],

            "ajax": {
                "url": baseurl + "CWarehouse/warehouselist_custom",
                "type": "POST",
                "data": function (data) {
                    data.item = $('#item').val();
                },

            }
        });

        $('#custom_search').click(function () {
            table.ajax.reload();
        });

    });
}(jQuery));


"use strict";
function bank_paymet(val) {
    if (val == 2) {
        var style = 'block';

    } else {
        var style = 'none';
    }
    document.getElementById('bank_div').style.display = style;
}
"use strict";


"use strict";
function statementResults() {
    var baseurl = $("#baseurl").val();
    var csrf_test_name = $("#CSRF_TOKEN").val();
    var id = $("#id").val();
    var from_date = $("#from_date").val();
    var end_date = $("#end_date").val();
    if (id == '' && (from_date == '' || end_date == '')) {
        alert('Empty field must be required!');
        $("#id").focus();
        return false;
    } 
    if (from_date) {
        if (!end_date) {
            alert("End date must be required!");
            $("#end_date").focus();
            return false;
        }
    }
    $.ajax({
        url: baseurl + "Clocation/statement_result",
        type: "POST",
        data: {id: id, from_date: from_date, end_date: end_date},
        success: function (r) {
            $(".results").html(r);
            $("#loaded_img").show();
            setTimeout(function () {
                $("#loaded_img").hide();
            }, 500);
        }
    });
}

//"use strict";
//function deleteDesignation(id) {
//    var baseurl = $("#baseurl").val();
//    var csrf_test_name = $("#CSRF_TOKEN").val();
//    var x = confirm("Are You Sure,Want to Delete ?");
//    if (x == true) {
//        $.ajax({
//            type: "POST",
//            url: baseurl + "Chrm/designation_delete",
//            data: {id: id, csrf_test_name: csrf_test_name},
//            cache: false,
//            success: function (datas) {
//                pageopen(baseurl + 'Chrm/manage_designation');
//            }
//        });
//    }
//}

"use strict";
function printDiv() {
    var divName = "printArea";
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.getElementsByClassName("dt-buttons btn-group")[0].style.display = "none";
    document.getElementsByClassName("dataTables_filter")[0].style.display = "none";
    document.getElementsByClassName("dataTables_length")[0].style.display = "none";
    document.getElementsByClassName("pagination")[0].style.display = "none";
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
//    window.location.reload(true);
}