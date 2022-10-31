<!-- Purchase Payment Ledger Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('purchase_ledger') ?></h1>
            <small><?php echo display('purchase_ledger') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('purchase') ?></a></li>
                <li class="active"><?php echo display('purchase_ledger') ?></li>
            </ol>
        </div>
    </section>
    <!-- Invoice information -->
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
        <!-- Purchase Ledger -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title printbtn">
                            <h4><?php echo display('invoice_information') ?></h4>
                            <div>  
                                <a  class="btn btn-success" href="#" onclick="printDiv('printableArea')"><i class="fa fa-print text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" id="printableArea">
                        <div class="table">
                            <div class="text-center">
                                <th width="100%" colspan="5">
                                    {company_info}
                                    <h5> <u> {company_name}</u> </h5> 
                                    {/company_info}
                                    <?php echo display('supplier_name') ?> : &nbsp;<span style="font-weight:normal">{supplier_name}</span>  <span style="margin-left:800px;float:right"><?php echo display('supplier_invoice') ?> </span> <br />
                                    Date :&nbsp;{final_date} <br /><?php echo display('purchase_no') ?> :&nbsp; {chalan_no}<br><span style="float:right"><?php echo display('print_date') ?> : <?php echo date("Y-m-d h:i:s"); ?> </span>
                                </th>
                            </div>
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('product') ?></th>
                                        <th class='text-center'><?php echo display('cartoon') ?></th>
                                        <th class='text-center'><?php echo display('item_cartoon') ?></th>
                                        <th class="text-center"><?php echo display('quantity') ?></th>
                                        <th class="text-right"><?php echo display('rate') ?></th>
                                        <th class="text-right"><?php echo display('total_ammount') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($purchase_all_data) {
                                        ?>
                                        {purchase_all_data}
                                        <tr>
                                            <td>{sl}</td>
                                            <td>
                                                <a href="<?php echo base_url() . 'Cproduct/product_details/{product_id}'; ?>">
                                                    {product_name}-({product_model})
                                                </a>
                                            </td>
                                            <td class="text-center">{cartoon}</td>
                                            <td class="text-center">{cartoon_quantity}</td>
                                            <td class="text-center">{quantity}</td>
                                            <td class="text-right"><?php echo (($position == 0) ? "$currency {rate}" : "{rate} $currency") ?></td>
                                            <td class="text-right p-r-20"><?php echo (($position == 0) ? "$currency {total_amount}" : "{total_amount} $currency") ?></td>
                                        </tr>
                                        {/purchase_all_data}
                                        <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-right" colspan="6"><b><?php echo display('grand_total') ?>:</b></td>
                                        <td class="text-right p-r-20"><b><?php echo (($position == 0) ? "$currency {sub_total_amount}" : "{sub_total_amount} $currency") ?></b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<input type="hidden" id="purchaseid" value="<?php echo $purchase_id; ?>">

<script src="<?php echo base_url() ?>assets/js/purchase.js" type="text/javascript"></script>
<!-- Purchase ledger End  -->
