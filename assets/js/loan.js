(function ($) {
    "use strict";
    $(document).ready(function () {
        var baseurl = $("#baseurl").val();
        var CSRF_TOKEN = $("#CSRF_TOKEN").val();
        $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});




    });
}(jQuery));


"use strict";
function getpersoninfo(person_id) {
    var baseurl = $("#baseurl").val();
    var csrf_test_name = $("[name=csrf_test_name]").val();
    $.ajax({
        url: baseurl + 'Csettings/loan_phone_search_by_name',
        type: 'post',
        data: {person_id: person_id, csrf_test_name: csrf_test_name},
        success: function (msg) {
            $(".phone").val(msg);
        },
        error: function (xhr, desc, err) {
            alert('failed');
        }
    });
}