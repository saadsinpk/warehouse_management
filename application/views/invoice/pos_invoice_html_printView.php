<?php
$CI = & get_instance();
$CI->load->model('Web_settings');
$Web_settings = $CI->Web_settings->retrieve_setting_editdata();
?>
<!--its for pos style css start--> 
<style type="text/css">
    BODY, TD
    {
        background-color: #ffffff;
        color: #000000;
        font-family: "Times New Roman", Times, serif;
        font-size: 10pt;
    }

</style>
<?php $segment4 = $this->uri->segment('4'); ?>
<!--its for pos style css close--> 
<div id="printableArea">
    <div class="panel-body">
        <div bgcolor='#e4e4e4' text='#ff6633' link='#666666' vlink='#666666' alink='#ff6633' style='margin:0;font-family:Arial,Helvetica,sans-serif;border-bottom:1' >
            <table border="0" width="40%">
                <tr>
                    <td>
                        <table border="0" width="100%">

                            <tr>
                                <td align="center" style="border-bottom:2px #333 solid;">
                                    <span style="font-size: 17pt; font-weight:bold;">
                                        <?php echo $company_name; ?>
                                    </span><br>
                                    <?php echo $address; ?><br>
                                    <?php echo $mobile; ?><br>
                                </td>
                            </tr>


                            <tr>
                                <td align="center"><b><?php echo $customer_name; ?></b><br>
                                    <?php if ($customer_address) { ?>
                                            <?php echo $customer_address; ?><br>
                                        <?php } ?>
                                        <?php
                                        if ($customer_mobile) {
                                            echo $customer_mobile;
                                        }
                                        ?>
                                </td>
                            </tr>
                            <tr>
                                <td align="center"><nobr>
                                <date>
                                    <?php
                                    echo date('Y-m-d');
                                    ?> 
                                </date>
                            </nobr></td>
                </tr>
                <tr>
                    <td><strong><?php echo display('invoice_no'); ?> : <?php echo $invoice_no; ?></strong></td>
                </tr>
            </table>

            <table width="100%" style="font-size: 10px;">
                <tr style="line-height: 20px;">
                    <td><?php // echo display('sl'); ?>Sl</th>
                    <td><?php echo display('product_name'); ?></td>
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
                <tr style="line-height: 15px;">
                        <td align="left"><nobr><?php echo $sl; ?>. </nobr></td>
                    <td align="left"><nobr><?php echo $invoice_data['product_name'] . '(' . $invoice_data['product_model'] . ')'; ?></nobr></td>
                    <td align="right"><nobr><?php echo $invoice_data['quantity']; ?></nobr></td>
                    <td></td>
                    <td align="right">
                    <nobr>
                        <?php
                        if ($position == 0) {
                            echo $currency . ' ' . $invoice_data['rate'];
                        } else {
                            echo $invoice_data['rate'] . ' ' . $currency;
                        }
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

                <tr>
                    <td colspan="6" style="border-top:#333 1px solid;"><nobr></nobr></td>
                </tr>
                <tr>
                    <td colspan="6" style="border-top:#333 1px solid;"><nobr></nobr></td>
                </tr>
                <tr>
                    <td align="left"><nobr></nobr></td>
                <td align="right" colspan="4"><nobr><?php echo display('total') ?></nobr></td>
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
                    <tr>
                        <td align="left"><nobr></nobr></td>
                    <td align="right" colspan="4"><nobr><?php echo display('total_discount') ?></nobr></td>
                    <td align="right">
                    <nobr>
                        <?php echo (($position == 0) ? "$currency $total_discount" : "$total_discount $currency") ?>
                    </nobr></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="6" style="border-top:#333 1px solid;"><nobr></nobr></td>
                </tr>
                <tr>
                    <td align="left"><nobr></nobr></td>
                <td align="right" colspan="4"><nobr><strong><?php echo display('grand_total') ?></strong></nobr></td>
                <td align="right"><nobr>
                    <strong>
                        <?php echo (($position == 0) ? "$currency $total_amount" : "$total_amount $currency")
                        ?>
                    </strong></nobr></td>
                </tr>

                <tr>
                    <td colspan="6" style="border-top:#333 1px solid;"><nobr></nobr></td>
                </tr>
                <?php if ($paid_amount > 0) { ?>
                    <tr>
                        <td align="left"><nobr></nobr></td>
                    <td align="right" colspan="4"><nobr>
                        <?php echo display('paid_ammount') ?>
                    </nobr></td>
                    <td align="right"><nobr>
                        <?php echo (($position == 0) ? "$currency $paid_amount" : "$paid_amount $currency") ?>
                    </nobr></td>
                    </tr>
                <?php } ?>
                <?php if ($due_amount > 0) { ?>
                    <tr>
                        <td align="left"><nobr></nobr></td>
                    <td align="right" colspan="4"><nobr><?php echo display('due') ?></nobr></td>
                    <td align="right"><nobr>
                        <?php echo (($position == 0) ? "$currency $due_amount" : "$due_amount $currency") ?>
                    </nobr></td>
                    </tr>
                <?php } ?>

            </table>

            </td>
            </tr>
            <tr>
                <td>Powered  By: <a href="{website}"><strong><?php echo $company_name; ?></strong></a></td>

            </tr>
            </table>


        </div>


    </div>
</div>
<?php if ($segment4 == 1) { ?>
    <script type="text/javascript">
        window.print();
        setInterval(function () {
            document.location.href = "<?php echo base_url('Cinvoice/pos_invoice/1'); ?>";
        }, 3000);
    </script>
<?php } ?>