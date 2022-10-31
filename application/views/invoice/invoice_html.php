<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();

//$CI = & get_instance();
//$CI->load->library('Occational');
//$today = $CI->occational->dateConvertMyformat(date('d-M-Y'));
?>

<!-- Printable area start -->
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        // document.body.style.marginTop="-45px";
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
<!-- Printable area end -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper removeContentwraper" id="bodycontent">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('invoice_details') ?></h1>
            <small><?php echo display('invoice_details') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('invoice_details') ?></li>
            </ol>
        </div>
    </section>
    <!-- Main content -->
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
        ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea">
                        <div class="panel-body">
                            <div class="row">
                                {company_info}
                                <div class="col-sm-8" style="display: inline-block;width: 64%">
                                    <img src="<?php
                                    if (isset($Web_settings[0]['invoice_logo'])) {
                                        echo base_url() . $Web_settings[0]['invoice_logo'];
                                    }
                                    ?>" class="" alt="" style="margin-bottom:20px">
                                    <br>
                                    <span class="label label-success-outline m-r-15 p-10" ><?php echo display('billing_from') ?></span>
                                    <address style="margin-top:10px">
                                        <strong>{company_name}</strong><br>
                                        {address}<br>
                                        <abbr><b><?php echo display('mobile') ?>:</b></abbr> {mobile}<br>
                                        <abbr><b><?php echo display('email') ?>:</b></abbr> 
                                        {email}<br>
                                        <abbr><b><?php echo display('website') ?>:</b></abbr> 
                                        {website}
                                    </address>
                                </div>
                                {/company_info}
                                <div class="col-sm-4 text-left" style="display: inline-block;margin-left: 5px;">
                                    <!--<h2 class="m-t-0"><?php echo display('invoice') ?></h2>-->                             
                                    <br><br><br>
                                    <span class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>
                                    <br><br>
                                    <div><strong><?php echo display('invoice_no') ?> </strong>: {invoice_no}</div>
                                    <div class="m-b-15"><strong><?php echo display('billing_date') ?> </strong>: 
                                        {final_date}
                                    </div>
                                    <address style="margin-top:10px;width: 200px">  
                                        <strong>{customer_name} </strong><br>
                                        <?php if ($customer_address) { ?>
                                            {customer_address}<br>
                                        <?php } ?>                                        

                                        <?php if ($customer_mobile) { ?>
                                            {customer_mobile}
                                            <br>
                                            <?php
                                        }
                                        if ($customer_email) {
                                            ?>
                                            {customer_email}
                                        <?php } ?>
                                    </address>
                                </div>
                            </div> <hr>

                            <div class="table-responsive m-b-20">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th align="center"><?php echo display('sl') ?></th>
                                            <th align="left">Store</th>
                                            <th align="left"><?php echo display('product_name') ?></th>
                                            <th align="left">Status</th>
                                            <th style="text-align: center;"><?php echo display('cartoon') ?></th>
                                            <th  style="text-align: center;"><?php echo display('quantity_box') ?></th>
                                            <th  style="text-align: center;"><?php echo display('total_quantity') ?></th>
                                            <th style="text-align: center;"><?php echo display('discount') ?></th>
                                            <th  style="text-align: right;"><?php echo display('rate') ?></th>
                                            <th  style="text-align: right;"><?php echo display('ammount') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {invoice_all_data}
                                        <tr>
                                            <td align="">{sl}</td>
                                            <td align=""><div><strong>{location_name}</strong></div></td>
                                            <td align=""><div><strong>{product_name} - ({product_model})</strong></div></td>
                                            <td>{invoice_status_html}</td>
                                            <td align="center">{cartoon}</td>
                                            <td align="center">{per_cartoon}</td>
                                            <td align="center">{quantity}</td>
                                            <td align="center"><?php echo (($position == 0) ? "$currency {discount}" : "{discount} $currency") ?></td>
                                            <td  style="text-align: right;"><?php echo (($position == 0) ? "$currency {rate}" : "{rate} $currency") ?></td>
                                            <td  style="text-align: right;"><?php echo (($position == 0) ? "$currency {total_price}" : "{total_price} $currency") ?></td>
                                        </tr>
                                        {/invoice_all_data}
                                    </tbody>
                                    <tfoot>
                                    <td align="center" colspan="4" style="border: 0px"><b><?php echo display('grand_total') ?>:</b></td>

                                    <td align="center"  style="border: 0px"><b>{subTotal_cartoon}</b></td>

                                    <td style="border: 0px"></td>

                                    <td align="center"  style="border: 0px"><b>{subTotal_quantity}</b></td>

                                    <td style="border: 0px"></td>
                                    <td style="border: 0px"></td>

                                    <td style="text-align: right;"  style="border: 0px"><b><?php echo (($position == 0) ? "$currency {subTotal_ammount}" : "{subTotal_ammount} $currency") ?></b></td>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">

                                <div class="col-xs-8" style="display: inline-block;width: 66%">
                                    <p><?php echo display('invoice_description') ?></p>
                                    <p><strong><?php echo display('thank_you_for_choosing_us') ?></strong></p>

                                </div>
                                <div class="col-xs-4" style="display: inline-block;">
                                    <table class="table">
                                        <?php
                                        if ($invoice_all_data[0]['total_discount'] != 0) {
                                            ?>
                                            <tr style="text-align: right;">
                                                <th style="border-top: 0; border-bottom: 0;"><?php echo display('total_discount') ?> : </th>
                                                <td style="border-top: 0; border-bottom: 0;"><?php echo (($position == 0) ? "$currency {total_discount}" : "{total_discount} $currency") ?> </td>
                                            </tr>
                                            <?php
                                        }
                                        if ($invoice_all_data[0]['tax'] != 0) {
                                            ?>
                                            <tr style="text-align: right;">
                                                <th style="border-top: 0; border-bottom: 0;"><?php echo display('tax') ?> : </th>
                                                <td style="border-top: 0; border-bottom: 0;"><?php echo (($position == 0) ? "$currency {tax}" : "{tax} $currency") ?> </td>
                                            </tr>
                                        <?php } ?>
                                        <tr style="text-align: right;">
                                            <th class="grand_total"><?php echo display('grand_total') ?> :</th>
                                            <td class="grand_total"><?php echo (($position == 0) ? "$currency {total_amount}" : "{total_amount} $currency") ?></td>
                                        </tr>
                                        <tr style="text-align: right;">
                                            <th style="border-top: 0; border-bottom: 0;"><?php echo display('paid_ammount') ?> : </th>
                                            <td style="border-top: 0; border-bottom: 0;"><?php echo (($position == 0) ? "$currency {paid_amount}" : "{paid_amount} $currency") ?></td>
                                        </tr>				 
                                        <?php
                                        if ($invoice_all_data[0]['due_amount'] != 0) {
                                            ?>
                                            <tr style="text-align: right;">
                                                <th><?php echo display('due') ?> : </th>
                                                <td><?php echo (($position == 0) ? "$currency {due_amount}" : "{due_amount} $currency") ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>

                                    <div  style="float:left;width:90%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 100px;font-weight: bold;">
                                        <?php echo display('authorised_by') ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a  class="btn btn-danger" href="<?php echo base_url('Cinvoice/manage_invoice/1'); ?>"><?php echo display('cancel') ?></a>
                        <button  class="btn btn-info" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></button>
                        <a  class="btn btn-success" href="<?php echo base_url('Cinvoice/invoice_download/' . $invoice_id); ?>"><i class="fa fa-download"> </i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->



