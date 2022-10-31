<?php
$CI = & get_instance();
$CI->load->library('Occational');
?>
<!-- Product Report Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('sales_report_product_wise') ?></h1>
            <small><?php echo display('sales_report_product_wise') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('report') ?></a></li>
                <li class="active"><?php echo display('sales_report_product_wise') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Product report -->
        <div class="row">
            <div class="col-sm-12">
                <button class="btn custom_btn custom_fontcolor default m-b-10" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Filter
                </button>
                <div class="collapse panel panel-default" id="collapseExample">
                    <div class="panel-body"> 
                        <?php echo form_open('Admin_dashboard/product_sales_search_reports/2', array('class' => 'form-inline')) ?>
                        <div class="form-group">
                            <label class="sr-only  m-r-15" for="from_date"><?php echo display('start_date') ?></label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('start_date') ?>" >
                        </div> 
                        <div class="form-group">
                            <label class="sr-only  m-r-15" for="to_date"><?php echo display('end_date') ?></label>
                            <input type="text" name="to_date" class="form-control datepicker" id="to_date" placeholder="<?php echo display('end_date') ?>">
                        </div>  

                        <button type="submit" class="btn btn-success"><?php echo display('search') ?></button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title" style="display: flex; align-content: center; justify-content: space-between;">
                            <h4><?php echo display('sales_report_product_wise') ?></h4>
                            <div class="" style="display: flex; ">
                                <a href="<?php echo base_url('Admin_dashboard/product_sales_reports_date_wise/1'); ?>" class="btn custom_btn custom_fontcolor" style="margin-right: 5px;"><?php echo display('all'); ?></a>
                                <a  class="btn btn-success" href="#" onclick="printDiv('printableArea')"><i class="fa fa-print text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" id="printableArea">
                        <div class="table-responsive">
                            <!--dataTableExample2-->
                            <table id="" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sales_date') ?></th>
                                        <th><?php echo display('product_name') ?></th>
                                        <th><?php echo display('product_model') ?></th>
                                        <th><?php echo display('customer_name') ?></th>
                                        <th>Store</th>
                                        <th>Status</th>
                                        <th class="text-right"><?php echo display('rate') ?></th>
                                        <th class="text-right"><?php echo display('total_ammount') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
//                                    echo '<pre>';   print_r($product_report);  echo '<pre>';
                                    $totalamount = $ttl_amount = $rate = 0;
                                    if ($product_report) {
                                        foreach ($product_report as $report) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php
                                                    echo $CI->occational->dateConvertMyformat($report['date']);
                                                    ?>
                                                </td>
                                                <td><?php echo $report['product_name']; ?></td>
                                                <td><?php echo $report['product_model']; ?></td>
                                                <td><?php echo $report['customer_name']; ?></td>
                                                <td><?php echo $report['location_name']; ?></td>
                                                <td><?php echo $report['invoice_status_p_wise']; ?></td>
                                                <td class="text-right">
                                                    <?php
                                                    $rate = $report['rate'];
                                                    echo (($position == 0) ? "$currency $rate" : "$rate $currency");
                                                    ?>
                                                </td>
                                                <td class="text-right">
                                                    <?php
                                                    $totalamount += @$report['total_amount'];
                                                    $ttl_amount = @$report['total_amount'];
                                                    echo (($position == 0) ? "$currency $ttl_amount" : "$ttl_amount $currency");
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
<!--                                <tbody>
                                <?php
                                if ($product_report) {
                                    ?>
                                                                                    {product_report}
                                                                                    <tr>
                                                                                        <td>{sales_date}</td>
                                                                                        <td>{product_name}</td>
                                                                                        <td>{product_model}</td>
                                                                                        <td>{customer_name}</td>
                                                                                        <td style="text-align: right;"><?php echo (($position == 0) ? "$currency {rate}" : "{rate} $currency") ?></td>
                                                                                        <td style="text-align: right;"><?php echo (($position == 0) ? "$currency {total_price}" : "{total_price} $currency") ?></td>
                                                                                    </tr>
                                                                                    {/product_report}
                                    <?php
                                }
                                ?>
                                </tbody>-->
                                <tfoot>
                                    <tr>
                                        <td colspan="7" align="right" style="text-align:right;font-size:14px !Important">&nbsp; <b><?php echo display('total_ammount') ?></b></td>
                                        <td style="text-align: right;"><b>
                                                <?php
                                                echo $totalamount;
// echo (($position == 0) ? "$currency $totalamount" : "$totalamount $currency") 
                                                ?>
                                            </b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="text-right"><?php echo $links ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Product Report End -->
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        document.body.style.marginTop = "0px";
//        document.getElementsByClassName("dt-buttons btn-group")[0].style.display = "none";
        window.print();
        document.body.innerHTML = originalContents;
        document.location.href = '<?php echo base_url('Admin_dashboard/product_sales_reports_date_wise/1'); ?>';
    }
</script>
<script type="text/javascript">
    $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
</script>
