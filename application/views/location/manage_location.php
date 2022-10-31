<!-- Manage employee Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('store') ?></h1>
            <small><?php echo display('manage_store') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('store') ?></a></li>
                <li class="active"><?php echo display('manage_store') ?></li>
            </ol>
        </div>
    </section>
    <section class="content">
        <!-- Alert Message -->
        <?php
        $message = $this->session->userdata('message');
        if (isset($message)) {
            ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('message');
        }
        $error_message = $this->session->userdata('error_message');
        if (isset($error_message)) {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error_message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('error_message');
        }
        ?>

        <!-- Manage employee -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('store')->create()->access()) { ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Clocation'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_store'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_store') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="locationlist">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl'); ?></th>
                                        <th><?php echo display('Name'); ?></th>
                                        <th><?php echo display('Action'); ?></th>
                                        <th class="text-right"><?php echo display('Date'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="modal" id="item_modal_info">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title float_left"><?php echo display('add_location_item'); ?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body" id="item_info">

                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><?php echo display('close'); ?></button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url() ?>assets/js/location.js" type="text/javascript"></script>
<script type="text/javascript">

//              =============== its for locationlist datatables ==================
//    var table = $("#locationlist").DataTable({
//        dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
//        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
//        buttons: [{
//                extend: "copy", className: "btn-sm"
//            }
//            , {
//                extend: "csv", title: "ExampleFile", className: "btn-sm"
//            }
//            , {
//                extend: "excel", title: "ExampleFile", className: "btn-sm"
//            }
//            , {
//                extend: "pdf", title: "ExampleFile", className: "btn-sm"
//            }
//            , {
//                extend: "print", className: "btn-sm"
//            },
//        ],
//        order: [],
//        paging: true,
//        "searching": true,
//        "processing": true,
//        "serverSide": true,
//        'columnDefs': [
//        {
//             "targets": 3,
//             "className": "text-right",
//        }],
//
//        "ajax": {
//            "url": "<?php echo base_url('Clocation/locationlist_custom'); ?>",
//            "type": "POST",
//            "data": function (data) {
//                data.item = $('#item').val();
//            },
//
//        }
//    });
//    $('#custom_search').click(function () {
//        table.ajax.reload();
//    });
function see_products(id) {
    var baseurl = $("#baseurl").val();
    var csrf_test_name = $("#CSRF_TOKEN").val();
    $.ajax({
        url: baseurl + "Clocation/see_products",
        type: "post",
        data: {id: id},
        success: function (r) {
            $("#item_info").html(r);
            $("#item_modal_info").modal('show');
            $("#id").val(id);
        }
    });
}
</script>