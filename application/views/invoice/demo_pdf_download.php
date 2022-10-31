<style type="text/css">
        table {
        border-collapse: collapse;
        width: 100%;
    }

    table, th, td {
        border: 1px solid black;
    }
</style>
<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-8" style="display: inline-block;width: 64%">
                                    <img src="<?php
//                                    if (isset($Web_settings[0]['invoice_logo'])) {
//                                        echo $Web_settings[0]['invoice_logo'];
//                                    }
                                    ?>" class="" alt="" style="margin-bottom:20px">
                                    <br>
                                    <span class="label label-success-outline m-r-15 p-10" ><?php echo display('billing_from') ?></span>
                                    <address style="margin-top:10px">
                                        <strong>Company Name</strong><br>
                                    </address>
                                </div>
                                <div class="col-sm-4 text-left" style="display: inline-block;margin-left: 5px;">
                                    <h2 class="m-t-0"><?php echo display('invoice') ?></h2>
                                    <div><?php echo display('invoice_no') ?>: 5555</div>
                                    <div class="m-b-15"><?php echo display('billing_date') ?>: 55544</div>

                                    <span class="label label-success-outline m-r-15"><?php echo display('billing_to') ?></span>
                                    <address style="margin-top:10px;width: 200px">  
                                        <strong>Customer Name </strong><br>
                                    </address>
                                </div>
                            </div>

                            <div class="">
                                <table class="">
                                    <thead>
                                        <tr>
                                            <th align="center"><?php echo display('sl') ?></th>
                                            <th align="center"><?php echo display('product_name') ?></th>
                                            <th align="center"><?php echo display('cartoon') ?></th>
                                            <th align="center"><?php echo display('quantity') ?></th>
                                            <th align="center"><?php echo display('total_quantity') ?></th>
                                            <th align="center"><?php echo display('discount') ?></th>
                                            <th align="center"><?php echo display('rate') ?></th>
                                            <th align="center"><?php echo display('ammount') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="">1</td>
                                            <td align=""><div><strong>Product One</strong></div></td>
                                            <td align="center">2</td>
                                            <td align="center">3</td>
                                            <td align="center">2</td>
                                            <td align="center">25</td>
                                            <td align="center">5</td>
                                            <td align="center">100</td>
                                        </tr>
                                       
                                    </tbody>
                                    <tfoot>
                                    <td align="center" colspan="2" style="border: 0px"><b><?php echo display('grand_total') ?>:</b></td>
                                    <td align="center"  style="border: 0px"><b>subtotal</b></td>
                                    <td style="border: 0px"></td>
                                    <td align="center"  style="border: 0px"><b>subtotalqnt</b></td>
                                    <td style="border: 0px"></td>
                                    <td style="border: 0px"></td>
                                    <td align="center"  style="border: 0px"><b>200</b></td>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="" style="display: inline-block;width: 60%">
                                    <p><?php echo display('invoice_description') ?></p>
                                    <p><strong><?php echo display('thank_you_for_choosing_us') ?></strong></p>

                                </div>
                                <div class="" style="display: inline-block; width: 35%; float: right;">
                                    <table class="table">
                                        <?php
//                                        if ($invoice_all_data[0]['total_discount'] != 0) {
                                            ?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;text-align: right;"><?php echo display('total_discount') ?> : </th>
                                                <td style="border-top: 0; border-bottom: 0; text-align: right;">333</td>
                                            </tr>
                                            <?php
//                                        }
//                                        if ($invoice_all_data[0]['tax'] != 0) {
                                            ?>
                                            <tr>
                                                <th style="border-top: 0; border-bottom: 0;text-align: right;"><?php echo display('tax') ?> : </th>
                                                <td style="border-top: 0; border-bottom: 0; text-align: right;">2200 </td>
                                            </tr>
                                        <?php //} ?>
                                        <tr>
                                            <th class="grand_total" style="text-align: right;"><?php echo display('grand_total') ?> :</th>
                                            <td class="grand_total" style="text-align: right;">999</td>
                                        </tr>
                                        <tr>
                                            <th style="border-top: 0; border-bottom: 0;text-align: right;"><?php echo display('paid_ammount') ?> : </th>
                                            <td style="border-top: 0; border-bottom: 0; text-align: right;">0002</td>
                                        </tr>				 
                                        <?php
                                        //if ($invoice_all_data[0]['due_amount'] != 0) {
                                            ?>
                                            <tr>
                                                <th style="text-align: right;"><?php echo display('due') ?> : </th>
                                                <td style="text-align: right;">0005</td>
                                            </tr>
                                            <?php
                                        //}
                                        ?>
                                    </table>

                                    <div  style="float:left;width:90%;text-align:center;border-top:1px solid #e4e5e7;margin-top: 100px;font-weight: bold;">
                                        <?php echo display('authorised_by') ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->



