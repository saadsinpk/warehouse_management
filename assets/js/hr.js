(function ($) {
    "use strict";
    $(document).ready(function () {
        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();


    });
}(jQuery));


"use strict";
function deleteDesignation(id) {
    var baseurl = $("#baseurl").val();
    var csrf_test_name = $("#CSRF_TOKEN").val();
    var x = confirm("Are You Sure,Want to Delete ?");
    if (x == true) {
        $.ajax({
            type: "POST",
            url: baseurl + "Chrm/designation_delete",
            data: {id: id, csrf_test_name: csrf_test_name},
            cache: false,
            success: function (datas) {
                pageopen(baseurl + 'Chrm/manage_designation');
            }
        });
    }
}

"use strict";
function deleteEmployee(employee_id) {
    var baseurl = $("#baseurl").val();
    var csrf_test_name = $("#CSRF_TOKEN").val();
    var x = confirm("Are You Sure,Want to Delete ?");
    if (x == true) {
        $.ajax({
            type: "POST",
            url: baseurl + "Chrm/employee_delete",
            data: {id: employee_id, csrf_test_name: csrf_test_name},
            cache: false,
            success: function (datas) {
                pageopen(baseurl + 'Chrm/manage_employee');
            }
        });
    }
}

"use strict";
//function printDiv(divName) {
//    var baseurl = $("#baseurl").val();
//    var CSRF_TOKEN = $("#CSRF_TOKEN").val();
//    var customerid = $("#customerid").val();
//    var printContents = document.getElementById(divName).innerHTML;
//    var originalContents = document.body.innerHTML;
//    document.body.innerHTML = printContents;
//    document.body.style.marginTop = "0px";
//    document.getElementsByClassName("dt-buttons btn-group")[0].style.display = "none";
//    document.getElementsByClassName("dataTables_filter")[0].style.display = "none";
//    document.getElementsByClassName("dataTables_length")[0].style.display = "none";
//    document.getElementsByClassName("pagination")[0].style.display = "none";
//    window.print();
//    document.body.innerHTML = originalContents;
//    document.location.href = baseurl + "Ccustomer/customerledger/" + customerid;
//}