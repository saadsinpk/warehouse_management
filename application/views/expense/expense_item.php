<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_expense_item') ?></h1>
            <small><?php echo display('expense') ?></small>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('expense') ?></a></li>
                <li class="active"><?php echo display('add_expense_item') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="">
            <?php
            $error = $this->session->flashdata('error');
            $success = $this->session->flashdata('success');
            if ($error != '') {
                echo $error;
            }
            if ($success != '') {
                echo $success;
            }
            ?>
        </div>

        <!-- New user -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_expense_item') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open_multipart('CExpense/expense_item_save', 'class="form-inner"') ?>
                        <div class="form-group row">
                            <label for="expense_item" class="col-sm-3 col-form-label text-right"><?php echo display('expense_item') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input name="expense_item" type="text" class="form-control" id="expense_item" placeholder="<?php echo display('expense_item') ?>" required="" tabindex="1" onkeyup="special_character_remove(this.value, 'expense_item')">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-offset-1 col-sm-2"></div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn custom_btn custom_fontcolor btn-sm" name="add-class"  tabindex="7"><?php echo display('save') ?></button>
                            </div>
                        </div> 
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('expense_item_list') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="results_menu">
                            <table class="table table-bordered" id="expenseItems">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl'); ?></th>
                                        <th><?php echo display('expense_item'); ?></th>
                                        <th class="text-center"><?php echo display('action'); ?></th>
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
                                        <h4 class="modal-title float_left"><?php echo display('add_expense_item'); ?></h4>
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
<script src="<?php echo base_url() ?>assets/js/expense.js" type="text/javascript"></script>
<script type="text/javascript">



//            ======== itsf for expense item list datatables ==============
//                                    var table = $("#expenseItemsd").DataTable({
//                                        dom: "'<'col-sm-4'l><'col-sm-4 text-center'><'col-sm-4'>Bfrtip",
//                                        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
//                                        buttons: [{
//                                                extend: "copy", className: "btn-sm"
//                                            }
//                                            , {
//                                                extend: "csv", title: "ExampleFile", className: "btn-sm"
//                                            }
//                                            , {
//                                                extend: "excel", title: "ExampleFile", className: "btn-sm"
//                                            }
//                                            , {
//                                                extend: "pdf", title: "ExampleFile", className: "btn-sm"
//                                            }
//                                            , {
//                                                extend: "print", className: "btn-sm"
//                                            },
//                                        ],
//                                        order: [],
//                                        paging: true,
//                                        "searching": true,
//                                        "processing": true,
//                                        "serverSide": true,
//                                        'columnDefs': [
//                                            {
//                                                "targets": 2,
//                                                "className": "text-center",
//                                            }],
//                                        "ajax": {
//                                            "url": "<?php // echo base_url('CExpense/expenseitem_list_custom'); ?>",
//                                            "type": "POST",
//
//                                        }
//                                    });
//                                    $('#custom_search').click(function () {
//                                        table.ajax.reload();
//                                    });
</script>

