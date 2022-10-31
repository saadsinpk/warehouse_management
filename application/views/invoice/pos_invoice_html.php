<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
$CI = & get_instance();
$CI->load->library('Occational');
?>
<!--its for pos style css start--> 
<style type="text/css">
    BODY, TD{
        background-color: #ffffff;
        color: #000000;
        font-family: "Times New Roman", Times, serif;
        font-size: 10pt;
    }
</style>
<?php $segment4 = $this->uri->segment('4'); ?>
<!--its for pos style css close--> 
<!-- Printable area start -->
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
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div id="printableArea">
                        <div class="panel-body">
                            <div bgcolor='#e4e4e4' text='#ff6633' link='#666666' vlink='#666666' alink='#ff6633' style='margin:0;font-family:Arial,Helvetica,sans-serif;border-bottom:1' >
                                <table border="0" width="40%">
                                    <tr>
                                        <td>
                                            <table border="0" width="100%">
                                                <tr>
                                                    <td align="center" style="border-bottom:2px #333 solid;">
                                                        {company_info}
                                                        <span style="font-size: 17pt; font-weight:bold;">
                                                            {company_name}
                                                        </span><br>
                                                        {address}<br>
                                                        {mobile}<br>
                                                        {/company_info}
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td align="center"><b>{customer_name}</b><br>
                                                        <?php if ($customer_address) { ?>
                                                            {customer_address}<br>
                                                        <?php } ?>
                                                        <?php if ($customer_mobile) { ?>
                                                            {customer_mobile}
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="center">
                                                <nobr>
                                                    <date>
                                                        <?php
                                                        echo $CI->occational->dateConvertMyformat(date('Y-m-d'));
                                                        ?>
                                                    </date>
                                                </nobr>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong><?php echo display('invoice_no'); ?> : {invoice_no}</strong></td>
                                    </tr>
                                </table>
                                <table width="100%" style="font-size: 14px;">
                                    <tr style="line-height: 20px;">
                                        <td><?php // echo display('sl');       ?>Sl</th>
                                        <th align="left">Store</th>
                                        <th align="left">Status</th>
                                        <td><?php echo display('item'); ?></td>
                                        <td align="right"><?php echo display('qty'); ?></td>
                                        <td></td>
                                        <td align="right"><?php echo display('rate'); ?></td>
                                        <td align="right"><?php echo display('ammount'); ?></td>
                                    </tr>
                                    <?php
                                    $sl = 1;
                                    $s_total = 0;
                                    foreach ($invoice_all_data as $invoice_data) {
                                        ?>
                                        <tr style="line-height: 20px; font-weight: normal;">
                                            <td align="left"><nobr><?php echo $sl; ?>. </nobr></td>
                                            <td align="left"><nobr><?php echo $invoice_data['location_name']?></nobr></td>
                                            <td align="left"><?php echo $invoice_data['invoice_status_html']?></td>
                                        <td align="left"><nobr><?php echo $invoice_data['product_name'] . '(' . $invoice_data['product_model'] . ')'; ?></nobr></td>
                                        <td align="center"><nobr><?php echo $invoice_data['quantity']; ?></nobr></td>
                                        <td></td>
                                        <td align="right">
                                        <nobr>
                                            <?php
//                                            if ($position == 0) {
//                                                echo $currency . ' ' . $invoice_data['rate'];
//                                            } else {
//                                                echo $invoice_data['rate'] . ' ' . $currency;
//                                            }
                                            echo $invoice_data['rate'];
                                            ?>
                                        </nobr>
                                        </td>
                                        <td align="right">
                                        <nobr>
                                            <?php
                                            if ($position == 0) {
                                                echo $currency . ' ' . $invoice_data['total_price'];
                                            } else {
                                                echo $invoice_data['total_price'] . ' ' . $currency;
                                            }
                                            $s_total += $invoice_data['total_price'];
                                            ?>
                                        </nobr>
                                        </td>
                                        </tr>
                                        <?php
                                        $sl++;
                                    }
                                    ?>

                                    <tr style="">
                                        <td colspan="6" style="border-top:#333 1px solid;"><nobr></nobr></td>
                                    </tr>
                                    <tr style="">
                                        <td colspan="6" style="border-top:#333 1px solid;"><nobr></nobr></td>
                                    </tr>
                                    <tr style="height: 25px;">
                                        <!--<td align="left"><nobr></nobr></td>-->
                                        <td align="left" colspan="5"><nobr><?php echo display('total') ?></nobr></td>
                                    <td align="right">
                                    <nobr>
                                        <?php
                                        if ($position == 0) {
                                            echo $currency . ' ' . number_format($s_total, 2, '.', ',');
                                        } else {
                                            echo number_format($s_total, 2, '.', ',') . ' ' . $currency;
                                        }
                                        ?>
                                    </nobr>
                                    </td>
                                    </tr>
                                    <?php if ($total_discount > 0) { ?>
                                        <tr style="height: 25px;">
                                            <!--<td align="left"><nobr></nobr></td>-->
                                            <td align="left" colspan="5"><nobr><?php echo display('total_discount') ?></nobr></td>
                                        <td align="right">
                                        <nobr>
                                            <?php echo (($position == 0) ? "$currency {total_discount}" : "{total_discount} $currency") ?>
                                        </nobr></td>
                                        </tr>
                                    <?php } ?>
                                    <tr style="height: 25px;">
                                        <td colspan="6" style="border-top:#333 1px solid;"><nobr></nobr></td>
                                    </tr>
                                    <tr style="height: 25px;">
                                        <!--<td align="left"><nobr></nobr></td>-->
                                        <td align="left" colspan="5"><nobr><strong><?php echo display('grand_total') ?></strong></nobr></td>
                                    <td align="right">
                                    <nobr>
                                        <?php echo (($position == 0) ? "$currency {total_amount}" : "{total_amount} $currency"); ?>
                                    </nobr>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td colspan="6" style="border-top:#333 1px solid;"><nobr></nobr></td>
                                    </tr>
                                    <?php if ($paid_amount > 0) { ?>
                                        <tr style="height: 25px;">
                                            <!--<td align="left"><nobr></nobr></td>-->
                                            <td align="left" colspan="5"><nobr>
                                            <?php echo display('paid_ammount') ?>
                                        </nobr></td>
                                        <td align="right"><nobr>
                                            <?php echo (($position == 0) ? "$currency {paid_amount}" : "{paid_amount} $currency") ?>
                                        </nobr></td>
                                        </tr>
                                    <?php } ?>
                                    <?php if ($due_amount > 0) { ?>
                                        <tr style="height: 25px;">
                                            <!--<td align="left"><nobr></nobr></td>-->
                                            <td align="left" colspan="5"><nobr><?php echo display('due') ?></nobr></td>
                                        <td align="right"><nobr>
                                            <?php echo (($position == 0) ? "$currency {due_amount}" : "{due_amount} $currency") ?>
                                        </nobr></td>
                                        </tr>
                                    <?php } ?>
                                </table>

                                </td>
                                </tr>
                                <tr>{company_info}
                                    <td>Powered  By: <a href="{website}"><strong>{company_name}</strong></a></td>
                                    {/company_info}
                                </tr>
                                </table>


                            </div>


                        </div>
                    </div>

                    <div class="panel-footer text-left">
                        <a  class="btn btn-danger" href="<?php echo base_url('Cinvoice/manage_invoice/1'); ?>"><?php echo display('cancel') ?></a>
                        <a  class="btn btn-info" href="#" onclick="printDiv('printableArea')"><span class="fa fa-print"></span></a>

                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->

<?php if ($segment4 == 1) { ?>
    <script type="text/javascript">
        var divName = 'printableArea';
    //        alert(divName);
    //        window.print();
    //        printDiv(divName);
    </script>
<?php } ?>
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