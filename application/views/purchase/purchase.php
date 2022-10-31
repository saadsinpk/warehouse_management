<!-- Manage Purchase Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('manage_purchase') ?></h1>
            <small><?php echo display('manage_your_purchase') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('purchase') ?></a></li>
                <li class="active"><?php echo display('manage_purchase') ?></li>
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
        <div class="panel panel-default">
            <div class="panel-body"> 
                <div class="row">
                    <div class="col-sm-7">
                        <form action="javascript:void(0)<?php //echo base_url('Cpurchase/manage_purchase')      ?>" class="form-inline" method="post" accept-charset="utf-8">
                            <?php $today = date('Y-m-d'); ?>
                            <div class="form-group">
                                <label class="" for="from_date"><?php echo display('from') ?></label>
                                <input type="text" name="from_date" class="form-control datepicker" id="from_date" value="<?php echo $today ?>" placeholder="<?php echo display('start_date') ?>" >
                            </div> 
                            <div class="form-group">
                                <label class="" for="to_date"><?php echo display('to') ?></label>
                                <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>" value="<?php echo $today ?>">
                            </div>  
                            <button type="button" class="btn btn-success" onclick="purchase_datefilter()"><?php echo display('find') ?></button>
                        </form>	
                    </div>
                    <div class="col-sm-5">
                        <form action="javascript:void(0)<?php //echo base_url('Cpurchase/purchase_info_id')   ?>" class="form-inline" method="post" accept-charset="utf-8">
                            <label for="invoice_no"><?php echo display('purchase_no') ?></label>
                            <input type="text" class="form-control" name="invoice_no" id="purchase_no" placeholder="<?php echo display('purchase_no') ?>">
                            <button type="button" class="btn btn-primary" onclick="purchase_nofilter()"><?php echo display('find') ?></button>     
                        </form>		
                    </div>
                </div>
            </div>
        </div>
        <!-- Manage Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('add_purchase')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpurchase'); ?>')" class="btn custom_btn custom_fontcolor m-b-10"><?php echo display('add_purchase'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_purchase') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive" id="results">
                            <table id="dataTableExample2xx" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('purchase_no') ?></th>
                                        <th><?php echo display('purchase_id') ?></th>
                                        <th><?php echo display('supplier_name') ?></th>
                                        <th><?php echo display('purchase_date') ?></th>
                                        <th class="text-right"><?php echo display('total_ammount') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($purchases_list) {
                                        ?>
                                        {purchases_list}
                                        <tr>
                                            <td>{sl}</td>
                                            <td>
                                                <a href="<?php echo base_url() . 'Cpurchase/purchase_details_data/{purchase_id}'; ?>">
                                                    {chalan_no}
                                                </a>
                                            </td>
                                            <td>                                                
                                                <a href="<?php echo base_url() . 'Cpurchase/purchase_details_data/{purchase_id}'; ?>">
                                                    {purchase_id}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url() . 'Csupplier/supplier_details/{supplier_id}'; ?>">
                                                    {supplier_name}
                                                </a>
                                            </td>
                                            <td>{final_date}</td>
                                            <td class="text-right"><?php echo (($position == 0) ? "$currency {grand_total_amount}" : "{grand_total_amount} $currency") ?></td>
                                            <td>
                                    <center>
                                        <?php
                                        echo form_open();
                                        if ($this->permission->check_label('manage_purchase')->update()->access()) {
                                            ?>
                                            <a href="<?php echo base_url() . 'Cpurchase/purchase_update_form/{purchase_id}'; ?>" class="btn custom_btn custom_fontcolor btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <?php
                                        }
                                        if ($this->permission->check_label('manage_purchase')->delete()->access()) {
                                            ?>
                                            <a href="javascript:void(0)" class="deletePurchase btn btn-danger btn-sm" onclick="deletepurchase({purchase_id})" name="{purchase_id}" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <?php } ?>
                                    </center>
                                    <?php echo form_close() ?>
                                    </td>
                                    </tr>
                                    {/purchases_list}
                                    <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6" class="text-right">
                                            <?php echo (($position == 0) ? "$currency " . number_format($ttlamount, 2, '.', ',') : number_format($ttlamount, 2, '.', ',') . " $currency"); ?>
                                        </th>                        
                                        <td></td>
                                    </tr>
                                </tfoot>
                                <?php if (empty($purchases_list)) { ?>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center text-danger" colspan="9"><?php echo display('data_not_found'); ?></th>
                                        </tr>
                                    </tfoot>
                                <?php } ?>
                            </table>
                            <div class="text-right"><?php echo $links ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Manage Purchase End -->

<script src="<?php echo base_url() ?>assets/js/purchase.js" type="text/javascript"></script>
<!-- Delete Purchase ajax code -->
