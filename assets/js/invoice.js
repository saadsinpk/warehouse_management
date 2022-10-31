(function ($) {
    "use strict";
    $(document).ready(function () {
        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();
        $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
//        $('body').on('change', '#supplier_sss', function (event) {
//            event.preventDefault();
//            var supplier_id = $('#supplier_sss').val();
//            var csrf_test_name = $("[name=csrf_test_name]").val();
//
//            $.ajax({
//                url: baseurl + 'Cpurchase/product_search_by_supplier',
//                type: 'post',
//                data: {supplier_id: supplier_id, csrf_test_name: csrf_test_name},
//                success: function (msg) {
//                    $(".supplier_load").html(msg);
//                },
//                error: function (xhr, desc, err) {
//                    alert('failed');
//                }
//            });
//        });


        $('.work').click(function(e){
            e.preventDefault();
            var invoiceid=$(this).attr('data-id');
            var locationEmail=$(this).attr('data-location-email');
            var locationName=$(this).attr('data-location-name');
            var x = confirm("Are You Sure,Want to approve ?");

            if (x == true) {
                $.ajax
                        ({
                            type: "POST",
                            url: baseurl + 'Cinvoice/invoice_approve',
                            data: {invoiceid: invoiceid,locationEmail:locationEmail,locationName:locationName},
                            cache: false,
                            success: function (datas)
                            {
                                // alert(datas);
                                pageopen(baseurl + 'Cinvoice/manage_invoice');
                            }
                        });
            }
        });

    });
}(jQuery));
//Customer type change by javascript start
"use strict";
function bank_info_show(payment_type) {
    if (payment_type.value == "1") {
        document.getElementById("bank_info_hide").style.display = "none";
    } else {
        document.getElementById("bank_info_hide").style.display = "block";
    }
}

"use strict";
function active_customer(status) {
    $("#customer_name").val('');
    $("#SchoolHiddenId").val('');
    if (status == "payment_from_2") {
        document.getElementById("payment_from_2").style.display = "none";
        document.getElementById("payment_from_1").style.display = "block";
        document.getElementById("myRadioButton_2").checked = false;
        document.getElementById("myRadioButton_1").checked = true;
    } else {
        document.getElementById("payment_from_1").style.display = "none";
        document.getElementById("payment_from_2").style.display = "block";
        document.getElementById("myRadioButton_2").checked = false;
        document.getElementById("myRadioButton_1").checked = true;
    }
}

// Customer type change by javascript end

"use strict";
function deleteInvoice(invoiceid) {
    var baseurl = $("#baseurl").val();
    var csrf_test_name = $("[name=csrf_test_name]").val();
    var x = confirm("Are You Sure,Want to Delete ?");

    if (x == true) {
        $.ajax
                ({
                    type: "POST",
                    url: baseurl + 'Cinvoice/invoice_delete',
                    data: {invoice_id: invoiceid, csrf_test_name: csrf_test_name},
                    cache: false,
                    success: function (datas)
                    {
                        pageopen(baseurl + 'Cinvoice/manage_invoice');
                    }
                });
    }
}