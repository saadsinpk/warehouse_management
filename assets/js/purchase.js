(function ($) {
    "use strict";
    $(document).ready(function () {
        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();
        $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
        $('body').on('change', '#supplier_sss', function (event) {
            event.preventDefault();
            var supplier_id = $('#supplier_sss').val();
            var csrf_test_name = $("[name=csrf_test_name]").val();

            $.ajax({
                url: baseurl + 'Cpurchase/product_search_by_supplier',
                type: 'post',
                data: {supplier_id: supplier_id, csrf_test_name: csrf_test_name},
                success: function (msg) {
                    $(".supplier_load").html(msg);
                },
                error: function (xhr, desc, err) {
                    alert('failed');
                }
            });
        });
        // Product selection start
        $('body').on('change', '.productSelection', function () {
            var product_id = $(this).val();
            var base_url = $('.baseUrl').val();
            var target = $(this).parent().parent().children().next().next().next().next().children();
            var item_cartoon = $(this).parent().next().next().next().children();
            var stock = $(this).parent().next().children();
            var csrf_test_name = $("[name=csrf_test_name]").val();
            console.log(item_cartoon);
            $.ajax({
                url: base_url + "Cinvoice/retrieve_product_data",
                data: {product_id: product_id, csrf_test_name: csrf_test_name},
                type: "post",
                success: function (data) {
                    var obj = JSON.parse(data);
                    target.val(obj.supplier_price);
                    item_cartoon.val(obj.cartoon_quantity);
                    stock.val(obj.total_product);
                    var cartoon = $('.qty_calculate').val();
                    var item = $('.qty_calculate').parent().next().children().val();
//                    console.log(item);
                    // set quantity
                    $('.qty_calculate').parent().next().next().children().val(cartoon * item);
                    var rate = $('.qty_calculate').parent().next().next().next().children().val();

                    //set total
                    $('.qty_calculate').parent().next().next().next().next().children().val(rate * cartoon * item);
                    calculateSum();
                }
            });
        });


        // Product selection start
//        $('body').on('change', '.editproductSelection', function () {
//            var product_id = $(this).val();
//            var base_url = $('.baseUrl').val();
//            var target = $(this).parent().parent().children().next().next().next().next().children();
//            var item_cartoon = $(this).parent().next().next().next().children();
//            var stock = $(this).parent().next().children();
//            var csrf_test_name = $("[name=csrf_test_name]").val();
////            alert(product_id);
////            console.log(item_cartoon);
//            $.ajax({
//                url: base_url + "Cinvoice/retrieve_product_data",
//                data: {product_id: product_id, csrf_test_name: csrf_test_name},
//                type: "post",
//                success: function (data) {
//                    var obj = JSON.parse(data);
////                    console.log(obj);
//                    target.val(obj.supplier_price);
//                    item_cartoon.val(obj.cartoon_quantity);
//                    stock.val(obj.total_product);
//                    var cartoon = $('.qty_calculate').val();
//                    var item = $('.qty_calculate').parent().next().children().val();
//                    // set quantity
//                    $('.qty_calculate').parent().next().next().children().val(cartoon * item);
//                    var rate = $('.qty_calculate').parent().next().next().next().children().val();
////                    alert(rate * cartoon * item);
//                    //set total
//                    $('.qty_calculate').parent().next().next().next().next().children().val(rate * cartoon * item);
//                    calculateSum();
//                }
//            });
//        });


        //Delete Purchase Item 
//        $('body').on('click', '#deletePurchase', function () {
//            var baseurl = $("#baseurl").val();
//            var CSRF_TOKEN = $("#CSRF_TOKEN").val();
//            var purchase_id = $(this).attr('name');
//            var csrf_test_name = $("[name=csrf_test_name]").val();
//            var x = confirm("Are You Sure,Want to Delete ?");
//            if (x == true) {
//                $.ajax
//                        ({
//                            type: "POST",
//                            url: baseurl + 'Cpurchase/purchase_delete',
//                            data: {purchase_id: purchase_id, csrf_test_name: csrf_test_name},
//                            cache: false,
//                            success: function (datas)
//                            {
//                                pageopen(baseurl + 'Cpurchase/manage_purchase');
//                            }
//                        });
//            }
//        });


        $('body').on('change', '#edit_supplier_sss', function (event) {
            event.preventDefault();
            var supplier_id = $('#edit_supplier_sss').val();
            var csrf_test_name = $("[name=csrf_test_name]").val();

            $.ajax({
                url: baseurl + 'Cpurchase/product_search_by_supplier',
                type: 'post',
                data: {supplier_id: supplier_id, csrf_test_name: csrf_test_name},
                success: function (msg) {
                    $(".supplier_item_load").html(msg);
                },
                error: function (xhr, desc, err) {
                    alert('failed');
                }
            });
        });


    });
}(jQuery));
"use strict";
function printDiv(divName) {
    var baseurl = $("#baseurl").val();
    var CSRF_TOKEN = $("#CSRF_TOKEN").val();
    var purchaseid = $("#purchaseid").val();
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    document.body.style.marginTop = "0px";
    document.getElementsByClassName("dt-buttons btn-group")[0].style.display = "none";
    window.print();
    document.body.innerHTML = originalContents;
    document.location.href = baseurl + "Cpurchase/purchase_details_data/" + purchaseid;
}
"use strict";
function productLoad(count) {
    var supplier_id = $('#supplier_sss').val();
    var baseurl = $("#baseurl").val();
    var CSRF_TOKEN = $("#CSRF_TOKEN").val();
    $.ajax({
        url: baseurl + 'Cpurchase/product_search_by_supplier',
        type: 'post',
        data: {supplier_id: supplier_id},
        success: function (msg) {
            $(".supplier_load_" + count).html(msg);
        },
        error: function (xhr, desc, err) {
            alert('failed');
        }
    });
}


//    ============ its for purchase_datefilter ============
function purchase_datefilter() {
    var baseurl = $("#baseurl").val();
    var CSRF_TOKEN = $("#CSRF_TOKEN").val();
    var from_date = $("#from_date").val();
    var to_date = $("#to_date").val();
    $.ajax({
        url: baseurl + "Cpurchase/purchase_search_fromtodate",
        type: "POST",
        data: {from_date: from_date, to_date: to_date},
        success: function (r) {
            $("#results").html(r);
        }
    });
}
function purchase_nofilter() {
    var baseurl = $("#baseurl").val();
    var CSRF_TOKEN = $("#CSRF_TOKEN").val();
    var purchase_no = $("#purchase_no").val();
    $.ajax({
        url: baseurl + "Cpurchase/purchase_search_fromtodate",
        type: "POST",
        data: {purchase_no: purchase_no},
        success: function (r) {
            $("#results").html(r);
        }
    });
}
"use strict";
function deletepurchase(purchase_id) {
    var baseurl = $("#baseurl").val();
    var CSRF_TOKEN = $("#CSRF_TOKEN").val();
    var csrf_test_name = $("[name=csrf_test_name]").val();
    var x = confirm("Are You Sure,Want to Delete ?");
    if (x == true) {
        $.ajax({
            type: "POST",
            url: baseurl + 'Cpurchase/purchase_delete',
            data: {purchase_id: purchase_id, csrf_test_name: csrf_test_name},
            cache: false,
            success: function (datas) {
                pageopen(baseurl + 'Cpurchase/manage_purchase');
            }
        });
    }
}


function editproductSelection(sl, productid) {
    var base_url = $('.baseUrl').val();
    var csrf_test_name = $("[name=csrf_test_name]").val();
    
    $.ajax({
        url: base_url + "Cinvoice/retrieve_product_data",
        data: {product_id: productid, csrf_test_name: csrf_test_name},
        type: "post",
        success: function (data) {
            var obj = JSON.parse(data);
            $("#qty_item_"+sl).val('').focus();
            $("#ctnqntt_"+sl).val(obj.cartoon_quantity);
            $("#price_item_"+sl).val(obj.supplier_price);
            $("#total_qntt_"+sl).val('');
            calculateSum();
        }
    });
}