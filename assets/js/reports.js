(function ($) {
    "use strict";
    $(document).ready(function () {
        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();
        $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
//        its for customer delete 
//        $("body").on('click', '.deleteCustomer', function () {
//            var customer_id = $(this).attr('name');
//            var baseurl = $("#baseurl").val();
//            var csrf_test_name = $("#CSRF_TOKEN").val();
//            var x = confirm("Are You Sure,Want to Delete ?");
//            if (x == true) {
//                $.ajax({
//                    type: "POST",
//                    url: baseurl + "Ccustomer/customer_delete",
//                    data: {customer_id: customer_id, csrf_test_name: csrf_test_name},
//                    cache: false,
//                    success: function (datas) {
//                        pageopen(baseurl + 'Ccustomer/credit_customer');
//                    }
//                });
//            }
//        });


    });
}(jQuery));
