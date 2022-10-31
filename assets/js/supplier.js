(function ($) {
    "use strict";
    $(document).ready(function () {
        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();
        $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
//        its for customer delete 
        $("body").on('click', '.deleteSupplier', function () {
            var supplier_id = $(this).attr('name');
            var baseurl = $("#baseurl").val();
            var csrf_test_name = $("#CSRF_TOKEN").val();
            var x = confirm("Are You Sure,Want to Delete ?");
            if (x == true) {
                $.ajax({
                    type: "POST",
                    url: baseurl + "Csupplier/supplier_delete",
                    data: {supplier_id: supplier_id, csrf_test_name: csrf_test_name},
                    cache: false,
                    success: function (datas) {
                        pageopen(baseurl + 'Csupplier/manage_supplier');
                    }
                });
            }
        });

        $("body").on('change', '#purpose', function () {
            var x = 0;
            if (this.value > x) {
                $("#datebetween").show();
            } else {
                $("#datebetween").hide();
            }
        });


//    ============ its for load datatables ===============
        $("#dataTableExample3").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp", lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
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
                }
            ],
            ordering: false,
        });

//    ============ its for load datatables ===============
        $("#dataTableExample4").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp", lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
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
                }
            ],
            ordering: false,
        });

    });
}(jQuery));


"use strict";
function printDiv(divName) {
    var baseurl = $("#baseurl").val();
    var CSRF_TOKEN = $("#CSRF_TOKEN").val();
    var supplierid = $("#supplierid").val();
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    document.body.style.marginTop = "0px";
    document.getElementsByClassName("dt-buttons btn-group")[0].style.display = "none";
    document.getElementsByClassName("dataTables_filter")[0].style.display = "none";
    document.getElementsByClassName("dataTables_length")[0].style.display = "none";
    document.getElementsByClassName("pagination")[0].style.display = "none";
    window.print();
    document.body.innerHTML = originalContents;
    document.location.href = baseurl + "Csupplier/supplier_ledger_info/" + supplierid;
}