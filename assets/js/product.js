(function ($) {
    "use strict";
    $(document).ready(function () {
        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();
//        its for product delete 
        $("body").on('click', '.deleteProduct', function () {
            var product_id = $(this).attr('name');
            var baseurl = $("#baseurl").val();
            var csrf_test_name = $("#CSRF_TOKEN").val();
            var x = confirm("Are You Sure,Want to Delete ?");
            if (x == true) {
                $.ajax({
                    type: "POST",
                    url: baseurl + "Cproduct/product_delete",
                    data: {product_id: product_id, csrf_test_name: csrf_test_name},
                    cache: false,
                    success: function (datas) {
                        pageopen(baseurl + 'Cproduct/manage_product');
                    }
                });
            }
        });

//        its for category delete 
        $("body").on('click', '.DeleteCategory', function () {
            var category_id = $(this).attr('name');
            var baseurl = $("#baseurl").val();
            var csrf_test_name = $("#CSRF_TOKEN").val();
            var x = confirm("Are You Sure,Want to Delete ?");
            if (x == true) {
                $.ajax({
                    type: "POST",
                    url: baseurl + "Ccategory/category_delete",
                    data: {category_id: category_id, csrf_test_name: csrf_test_name},
                    cache: false,
                    success: function (datas) {
                        pageopen(baseurl + 'Ccategory');
                    }
                });
            }
        });
    });
}(jQuery));