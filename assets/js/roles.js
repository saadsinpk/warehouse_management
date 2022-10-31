(function ($) {
    "use strict";
    $(document).ready(function () {

        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();
//        its for customer delete sssss
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

// select 2 dropdown 
        $("select.form-control:not(.dont-select-me)").select2({
            placeholder: "Select option",
            allowClear: true
        });

        $('body').on('click', '#select_deselect', function () {
            $(".sameChecked").prop('checked', $(this).prop('checked'));
        });
        $('body').on('click', '.can_create_all', function () {
            var create_value = $(this).val();
            $("." + create_value + "_can_create").prop('checked', $(this).prop('checked'));
        });
        $('body').on('click', '.can_read_all', function () {
            var read_value = $(this).val();
            $("." + read_value + "_can_read").prop('checked', $(this).prop('checked'));
        });
        $('body').on('click', '.can_edit_all', function () {
            var edit_value = $(this).val();
            $("." + edit_value + "_can_edit").prop('checked', $(this).prop('checked'));
        });
        $('body').on('click', '.can_delete_all', function () {
            var delete_value = $(this).val();
            $("." + delete_value + "_can_delete").prop('checked', $(this).prop('checked'));
        });

        
    });

    var baseurl = $("#baseurl").val();
    var csrf_test_name = $("#CSRF_TOKEN").val();
    $('#module').typeahead({
        highlight: true,
        minLength: 1,
        source: function (query, result) {
            $.ajax({
                url: baseurl + "CRole/moduleAutocomplete/",
                data: 'query=' + query,
                dataType: "json",
                type: "POST",
                success: function (data) {
                    result($.map(data, function (item) {
//                        var items = item.split('|');
//                        $("#module_id").val(items[1]);
//                        return items[0];
                        return item;
                    }));
                }
            });
        }
    });
}(jQuery));


"use strict";

function userRole(id) {
    var baseurl = $("#baseurl").val();
    var csrf_test_name = $("#CSRF_TOKEN").val();
    $.ajax({
        url: baseurl + "CRole/user_role_check",
        type: 'post',
        data: {user_id: id},
        success: function (r) {
            r = JSON.parse(r);
            $("#existrole ul").empty();
            $.each(r, function (ar, typeval) {
                if (typeval.role_name == 'Not Found') {
                    $("#existrole ul").html("Not Found!");
                    $("#exitrole ul").css({'color': 'red'});
                } else {
                    $("#existrole ul").append('<li>' + typeval.role_name + '</li>');
                }
            });
        }
    });
}

function userRoleName(id) {
    if(id==15){
        $('.location_list').show();
        $('.store_id').attr("required",true);
    }else{
        $('.location_list').hide();
        $('.store_id').removeAttr("required");
    }
}