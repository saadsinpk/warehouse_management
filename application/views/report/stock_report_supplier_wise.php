<!-- Product js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product.js.php" ></script>

<!-- Stock report start -->
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        document.body.style.marginTop = "0px";
//        document.getElementsByClassName("dt-buttons btn-group")[0].style.display = "none";
        window.print();
        document.body.innerHTML = originalContents;
        document.location.href = '<?php echo base_url('Creport/stock_report_supplier_wise/1'); ?>';
    }
</script>
<?php 
$CI = & get_instance();
$CI->load->library('Occational');
?>
<!-- Stock List Supplier Wise Start -->
<div class="content-wrapper removeContentwraper" id="bodycontent">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('stock_report_supplier_wise') ?></h1>
            <small><?php echo display('all_stock_report_supplier_wise') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('stock') ?></a></li>
                <li class="active"><?php echo display('stock_report_supplier_wise') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Stock report supplier wise -->
        <div class="row">
            <div class="col-sm-12">
                <button class="btn custom_btn custom_fontcolor default m-b-10" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Filter
                </button>
                <div class="collapse panel panel-default" id="collapseExample">
                    <div class="panel-body"> 
                        <?php echo form_open('Creport/stock_report_supplier_wise/2', array('class' => 'form-inline', 'id' => 'stock_report_supplier_wise')); ?>
                        <?php
                        date_default_timezone_set("Asia/Dhaka");
                        $today = date('Y-m-d');
                        ?>
                        <!--<div class="col-sm-4">-->
                            <label class="m-r-10"><?php echo display('select_supplier') ?>:</label>
                            <select class="form-control" id="supplier_id" name="supplier_id" required="">
                                <option value=""><?php echo display('select_one') ?></option>
                                {supplier_list}
                                <option value="{supplier_id}">{supplier_name} </option>
                                {/supplier_list}
                            </select>
                        <!--</div>-->
<!--                        <label class="select m-r-10"><?php echo display('date') ?></label>
                        <input type="text" name="stock_date" value="<?php echo $today; ?>" class="form-control productSelection datepicker" required/>-->
                        <button type="submit" class="btn custom_btn custom_fontcolor"><?php echo display('search') ?></button>
                        <!--<a  class="btn btn-warning" href="#" onclick="printDiv('printableArea')"><?php echo display('print') ?></a>-->
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title printbtn">
                            <h4><?php echo display('stock_report_supplier_wise') ?></h4>
                            <div class="" style="display: flex; ">
                                <a href="<?php echo base_url('Creport/stock_report_supplier_wise/1'); ?>" class="btn custom_btn custom_fontcolor m-r-5"><?php echo display('all'); ?></a>
                                <a  class="btn btn-success" href="javascript:void(0)" onclick="printDiv('printableArea')"><i class="fa fa-print text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea m-l-2">
                            <style type="text/css">
                                @media print {
                                    a[href]:after {
                                        content: " (" attr(href) ")";
                                    }
                                }
                                .dt-buttons btn-group{
                                    display: none;
                                }
                            </style>
                            <div class="text-center">
                                <?php
                                if ($supplier_info) {
                                    ?>
                                    {supplier_info}
                                    <h3> {supplier_name} </h3>
                                    <h4><?php echo display('address') ?> : {address} </h4>
                                    <h4 ><?php echo display('phone') ?> : {mobile} </h4>
                                    {/supplier_info}
                                    <!--<h4> <?php echo display('product_name') ?> : {product_name} ( {product_model} ) </h4>-->
                                    <?php
                                }
                                ?>

                                <h4> <?php echo display('stock_date') ?> : <?php echo $CI->occational->dateConvertMyformat($date); ?> </h4>
                                <h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
                            </div>

                            <div class="table m-t-10">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="5%"><?php echo display('sl') ?></th>
                                            <th class="text-center" width="20%"><?php echo display('product') ?></th>
                                            <th class="text-center" width="15%"><?php echo display('supplier') ?></th>
                                            <th class="text-right" width="10%"><?php echo display('sell_price') ?></th>
                                            <th class="text-right" width="10%"><?php echo display('supplier_price') ?></th>
                                            <th class="text-center" width="10%"><?php echo display('quantity_per_cartoon') ?></th>
                                            <th class="text-center" width="10%"><?php echo display('in_ctn') ?></th>
                                            <th class="text-center" width="10%"><?php echo display('out_ctn') ?></th>
                                            <th class="text-center" width="10%"><?php echo display('stock') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
//                                        dd($stok_report);
                                        if ($stok_report) {
                                            ?>
                                            {stok_report}
                                            <tr>
                                                <td>{sl}</td>
                                                <td align="center">
                                                    <a href="<?php echo base_url() . 'Cproduct/product_details/{product_id}'; ?>">
                                                        {product_name} ( {product_model} )
                                                    </a>	
                                                </td>
                                                <td align="center">
                                                    <a href="<?php echo base_url('Csupplier/supplier_ledger_info/');?>{supplier_id}">
                                                {supplier_name}
                                            </a>
                                                </td>
                                                <td class="text-right"><?php echo (($position == 0) ? "$currency {price}" : "{price} $currency") ?></td>
                                                <td class="text-right"><?php echo (($position == 0) ? "$currency {supplier_price}" : "{supplier_price} $currency") ?></td>
                                                <td align="center">{cartoon_quantity}</td>
                                                <td align="center">{totalPrhcsCtn}</td>
                                                <td align="center">{totalSalesCtn}</td>
                                                <td align="center">{stok_quantity_cartoon}</td>

                                            </tr>
                                            {/stok_report}
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6" align="right"><b><?php echo display('grand_total') ?>:</b></td>
                                            <td align="center"><b><?php echo (($position == 0) ? "$currency ".number_format($sub_total_in,2,'.',',') : number_format($sub_total_in,2,'.',',')." $currency");?></b></td>
                                            <td align="center"><b><?php echo (($position == 0) ? "$currency ".number_format($sub_total_out,2,'.',',') : number_format($sub_total_out,2,'.',',')." $currency");?></b></td>
                                            <td align="center"><b><?php echo (($position == 0) ? "$currency ".number_format($sub_total_stock,2,'.',',') : number_format($sub_total_stock,2,'.',',')." $currency");?></b></td>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="text-right"><?php if($links){ echo $links; } ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Stock List Supplier Wise End -->
<script type="text/javascript">
    $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
</script>