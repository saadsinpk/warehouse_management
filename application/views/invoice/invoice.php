<!-- Manage Invoice Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('manage_invoice') ?></h1>
            <small><?php echo display('manage_your_invoice') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('manage_invoice') ?></li>
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
        <!-- Manage Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10" style="float: right;">
                    <?php if ($this->permission->check_label('new_invoice')->read()->access()) { ?>
                        <a style="display: none;" href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cinvoice/'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('new_invoice'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('pos_invoice')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cinvoice/pos_invoice'); ?>')" class="btn btn-success"><?php echo display('pos_invoice'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_invoice') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th>Store</th>
                                        <th><?php echo display('customer_name') ?></th>
                                        <th><?php echo display('date') ?></th>
                                        <th class="text-right"><?php echo display('total_amount') ?></th>
                                        <th>Status</th>
                                        <th style="text-align: center; "><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
        // exit;
                                    if ($invoices_list) {
                                        ?>
                                        {invoices_list}
                                        <tr>
                                            <td>{sl}</td>
                                            <td>
                                                <a href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/{invoice_id}'; ?>">
                                                    {invoice}
                                                </a>
                                            </td>
                                            <td>
                                                {location_name}              
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url() . 'Ccustomer/customerledger/{customer_id}'; ?>">{customer_name}</a>				
                                            </td>

                                            <td>{final_date}</td>
                                            <td style="text-align: right;"><?php echo (($position == 0) ? "$currency {total_amount}" : "{total_amount} $currency") ?></td>
                                            <td>
                                               {invoice_status}          
                                            </td>
                                            <td>
                                    <center>
                                        <?php
                                        echo form_open();
                                        if ($this->permission->check_label('manage_invoice')->read()->access()) {
                                            ?>
                                            <a href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/{invoice_id}'; ?>" class="btn custom_btn custom_fontcolor btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('invoice') ?>"><i class="fa fa-window-restore" aria-hidden="true"></i></a>
                                            <?php
                                        }
                                        if ($this->permission->check_label('manage_invoice')->read()->access()) {
                                            ?>
                                            <a href="<?php echo base_url() . 'Cinvoice/pos_invoice_inserted_data/{invoice_id}/0'; ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left" title="View PO"><i class="fa fa-fax" aria-hidden="true"></i></a>
                                            <?php
                                        }
                                        ?>
                                        {return_popup}
                                        <?php
                                        if ($this->permission->check_label('manage_invoice')->update()->access()) {
                                            ?>{invoice_status_for_edit}<?php
                                        }
                                        if ($this->permission->check_label('manage_invoice')->delete()->access()) {
                                            ?>
                                            <a href="javascript:void(0)" class="deleteInvoice btn btn-danger btn-xs" name="{invoice_id}" onclick="deleteInvoice('{invoice_id}')" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            <?php
                                        }
                                        echo form_close()
                                        ?>
                                    </center>
                                    </td>
                                    </tr>
                                    {/invoices_list}
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="text-right"><?php echo $links ?></div>
                            <div class="modal" id="item_modal_info">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title float_left">Return</h4>
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
        </div>
    </section>
</div>
<!-- Manage Invoice End -->
<script src="<?php echo base_url() ?>assets/js/invoice.js" type="text/javascript"></script>
<script type="text/javascript">
    function invoice_return(id) {
        var baseurl = $("#baseurl").val();
        var csrf_test_name = $("#CSRF_TOKEN").val();
        $.ajax({
            url: baseurl + "Cinvoice/invoice_return",
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
