<!-- Manage employee Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Warehouse</h1>
            <small>Manage Warehouse</small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('web_settings') ?></a></li>
                <li class="active">Manage Warehouse</li>
            </ol>
        </div>
    </section>
    <section class="content">
        <!-- Alert Message -->
        <?php
        // echo "<pre>";
        // print_r($_SESSION['success']);
        // echo "</pre>";

        $message = $_SESSION['success'];
        if (isset($message)) {
            ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $message ?>                    
            </div>
            <?php
            unset($_SESSION['success']);
        }
        $error_message = $_SESSION['error_message'];
        if (isset($error_message)) {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error_message ?>                    
            </div>
            <?php
            unset($_SESSION['error_message']);
        }
        ?>

        <!-- Manage employee -->
        <div class="row">
            <!-- <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CWarehouse'); ?>')" class="btn custom_btn custom_fontcolor">Add Warehouse</a>
                </div>
            </div> -->
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Manage Warehouse</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="warehouselist" class="table table-bordered table-striped table-hover">
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
                                        <h4 class="modal-title float_left"><?php echo display('add_warehouse_item'); ?></h4>
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
<script src="<?php echo base_url() ?>assets/js/warehouse.js" type="text/javascript"></script>
<script type="text/javascript">
    $('.buttons-html5').remove();
    $('.buttons-print').remove();
    $('.dataTables_length').remove();
    $('.dataTables_filter').remove();
    function warehouseitem_edit(id) {
        var baseurl = $("#baseurl").val();
        var csrf_test_name = $("#CSRF_TOKEN").val();
        $.ajax({
            url: baseurl + "CWarehouse/warehouseitem_edit",
            type: "post",
            data: {id: id},
            success: function (r) {
                $("#item_info").html(r);
                $("#item_modal_info").modal('show');
                $("#id").val(id);
            }
        });
    }
    function warehouse_product(id) {
        var baseurl = $("#baseurl").val();
        var csrf_test_name = $("#CSRF_TOKEN").val();
        $.ajax({
            url: baseurl + "CWarehouse/warehouse_product",
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

