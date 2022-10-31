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
$currency = $Web_settings[0]['currency'];
$position = $Web_settings[0]['currency_position'];
$CI = & get_instance();
$CI->load->library('Occational');
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
                                <img src="<?php echo $Web_settings[0]['invoice_logo']; ?>" class="" alt="" style="margin-bottom:20px">
                                <?php echo '৳';  //       d($company_info);?>
                                <br>
                                <span class=""  style="font-size: 15px; color: #45c203; background-color: transparent; border: 2px solid #45c203; padding: 5px; margin-top: 5px;"><?php echo display('billing_from') ?></span>
                                <address style="margin-top:10px">
                                    <?php //echo $Web_settings[0]['invoice_logo']; ?>
                                    <strong><?php echo $company_info[0]['company_name']; ?> </strong><br>
                                    <strong><?php echo $company_info[0]['address']; ?> </strong><br>
                                    <strong><?php echo $company_info[0]['mobile']; ?> </strong><br>
                                    <strong><?php echo $company_info[0]['email']; ?> </strong><br>
                                    <strong><?php echo $company_info[0]['website']; ?> </strong><br>
                                </address>
                            </div>
                            <div class="col-sm-4 text-left" style="width: 30%; display: inline-block;margin-left: 5px;">
                                <br>
                                <span class="" style="font-size: 15px; color: #45c203; background-color: transparent; border: 2px solid #45c203; padding: 5px;"><?php echo display('billing_to') ?></span>
                                <br><br>
                                <!--<h2 class=""><?php echo display('invoice') ?></h2>-->
                                <div><?php echo display('invoice_no') ?>: <?php echo $invoice_detail[0]['invoice']; ?></div>
                                <div class="m-b-15"><?php echo display('billing_date') ?>: <?php echo $CI->occational->dateConvertMyformat(date($invoice_detail[0]['date'])); ?></div>

                                <address style="margin-top:10px; margin-bottom: 20px;">  
                                    <strong><?php echo $invoice_detail[0]['customer_name']; ?> </strong><br>
                                    <strong><?php echo $invoice_detail[0]['customer_address']; ?> </strong><br>
                                    <strong><?php echo $invoice_detail[0]['customer_mobile']; ?> </strong><br>
                                    <strong><?php echo $invoice_detail[0]['customer_email']; ?> </strong><br>
                                </address>
                            </div>
                        </div>

                        <div class="" style="margin-top: 20px;">
                            <table class="">
                                <thead>
                                    <tr>
                                        <th align="center"><?php echo display('sl') ?></th>
                                        <th align="left">Store</th>
                                        <th align="left"><?php echo display('product_name') ?></th>
                                        <th align="left">Status</th>
                                        <th align="center"><?php echo display('cartoon') ?></th>
                                        <th align="center"><?php echo display('quantity') ?></th>
                                        <!--<th align="center"><?php echo display('total_quantity') ?></th>-->
                                        <th align="right"><?php echo display('discount') ?></th>
                                        <th align="right"><?php echo display('rate') ?></th>
                                        <th align="right"><?php echo display('ammount') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sl = 0;
                                    foreach ($invoice_detail as $single) {
                                        $sl++;
                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $sl; ?></td>
                                            <td align="" style="padding: 4px; "><div><strong><?php echo $single['location_name']; ?></strong></div></td>
                                            <td align="" style="padding: 4px; "><div><strong><?php echo $single['product_name']; ?></strong></div></td>
                                            <td align="" style="padding: 4px; ">
                                                <?php
                                                if($single['invoice_status_html']==0){
                                                    echo '<button class="btn btn-warning">Processing</button>';
                                                }else{
                                                    echo '<button class="btn btn-success">Dispatch</button>';
                                                }
                                                ?>

                                            </td>
                                            <td align="center" style="padding: 4px; "><?php echo $single['cartoon']; ?></td>
                                            <td align="center" style="padding: 5px; "><?php echo $single['quantity']; ?></td>
                                            <td align="right" style="padding: 5px; ">
                                                <?php
                                                $dis = $single['discount'];
                                                echo (($position == 0) ? "$currency $dis" : "$dis $currency");
                                                ?>
                                            </td>
                                            <td align="right" style="padding: 5px; ">
                                                <?php
                                                $rate = $single['rate'];
                                                echo (($position == 0) ? "$currency $rate" : "$rate $currency");
                                                ?>
                                            </td>
                                            <td align="right" style="padding: 5px; ">
                                                <?php
                                                $ttlprice = $single['total_price'];
                                                echo (($position == 0) ? "$currency $ttlprice" : "$ttlprice $currency");
                                                ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                        <div class="row">
                            <div class="" style="display: inline-block;width: 65%">
                                <p><?php echo display('invoice_description') ?></p>
                                <p><strong><?php echo display('thank_you_for_choosing_us') ?></strong></p>

                            </div>
                            <div class="" style="display: inline-block; width: 35%; float: right;"><br><br>
                                <table class="table">      
                                    <tr>
                                        <th style="border-top: 0; border-bottom: 0;text-align: right; padding: 4px;"><?php echo display('total_discount') ?> : </th>
                                        <td style="border-top: 0; border-bottom: 0; text-align: right; padding: 4px;">
                                            <?php
                                            echo (($position == 0) ? "$currency $invoiceinfo->total_discount" : "$invoiceinfo->total_discount $currency");
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="grand_total" style="text-align: right; padding: 4px;"><?php echo display('grand_total') ?> :</th>
                                        <td class="grand_total" style="text-align: right; padding: 4px;">
                                            <?php
                                            echo (($position == 0) ? "$currency $invoiceinfo->total_amount" : "$invoiceinfo->total_amount $currency");
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="border-top: 0; border-bottom: 0;text-align: right; padding: 4px;"><?php echo display('paid_ammount') ?> : </th>
                                        <td style="border-top: 0; border-bottom: 0; text-align: right; padding: 4px;">
                                            <?php
                                            $paidamt = $invoice_detail[0]['paid_amount'];
                                            echo (($position == 0) ? "$currency $paidamt" : "$paidamt $currency");
                                            ?>
                                        </td>
                                    </tr>				 
                                    <?php
                                    ?>
                                    <tr>
                                        <th style="text-align: right; padding: 4px;"><?php echo display('due') ?> : </th>
                                        <td style="text-align: right; padding: 4px;">
                                            <?php
                                            $dueamt = $invoice_detail[0]['due_amount'];
                                            echo (($position == 0) ? "$currency $dueamt" : "$dueamt $currency");
                                            ?>
                                        </td>
                                    </tr>
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



