<!-- Product js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product.js.php" ></script>

<!-- Stock report start -->
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        document.body.style.marginTop = "0px";
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
<?php 
$CI = & get_instance();
$CI->load->library('Occational');

?>
<!-- Stock List Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('stock_report') ?></h1>
            <small><?php echo display('all_stock_report') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('stock') ?></a></li>
                <li class="active"><?php echo display('stock_report') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Manage Product report -->
        <div class="row">
            <div class="col-sm-12">
                <button class="btn custom_btn custom_fontcolor default m-b-10" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Filter
                </button>
                <div class="collapse panel panel-default" id="collapseExample">
                    <div class="panel-body"> 
                        <?php echo form_open_multipart('Creport/index/1', array('class' => 'form-inline', 'id' => 'stock_report')) ?>
                        <?php
                        date_default_timezone_set("Asia/Dhaka");
                        $today = date('Y-m-d');
                        ?>
                        <label class="select m-r-15"><?php echo display('search_by_product') ?>:</label>
                        <input type="text" name="product_name" onclick="producstList();" class="form-control productSelection" placeholder='<?php echo display('product_name') ?>' id="product_name" required>
                        <input type="hidden" class="autocomplete_hidden_value" name="product_id" id="SchoolHiddenId"/>
<!--                        <label class="select m-r-15"><?php echo display('date') ?></label>
                        <input type="text" name="stock_date" value="<?php echo $today; ?>" class="datepicker form-control productSelection " required/>-->
                        <button type="submit" class="btn custom_btn custom_fontcolor"><?php echo display('search') ?></button>
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
                            <h4><?php echo display('stock_report') ?></h4>
                            <div class="" style="display: flex;">
                            <!--<a href="<?php echo base_url('Creport/stock_report_download/'); ?>" class="btn btn-success"><i class="fa fa-download text-white"></i></a>-->
                                <a  class="btn custom_btn custom_fontcolor" href="#" onclick="printDiv('printableArea')"><i class="fa fa-print text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="printableArea" style="margin-left:2px;">
                            <div class="text-center">
                                {company_info}
                                <h3> {company_name} </h3>
                                <h4 >{address} </h4>
                                {/company_info}
                                <h4> <?php echo display('stock_date') ?> : <?php echo $CI->occational->dateConvertMyformat($date); ?> </h4>
                                <h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
                            </div>

                            <div class="table-responsive" style="margin-top: 10px;">
                                <table id="" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><?php echo display('sl') ?></th>
                                            <th class="text-center"><?php echo display('product_name') ?></th>
                                            <th class="text-center"><?php echo display('product_model') ?></th>
                                            <th class="text-center"><?php echo display('quantity_per_cartoon') ?></th>
                                            <th class="text-center"><?php echo display('in_ctn') ?></th>
                                            <th class="text-center"><?php echo display('out_ctn') ?></th>
                                            <th class="text-center"><?php echo display('stock') ?></th>
                                            <th class="text-right"><?php echo display('supplier_price') ?></th>
                                            <th class="text-right"><?php echo display('sell_price') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if ($stok_report) {
                                            ?>
                                            {stok_report}
                                            <tr>
                                                <td>{sl}</td>
                                                <td align="center">
                                                    <a href="<?php echo base_url() . 'Cproduct/product_details/{product_id}'; ?>">
                                                        {product_name}
                                                    </a>	
                                                </td>
                                                <td align="center">{product_model}</td>
                                                <td align="center">{cartoon_quantity}</td>
                                                <td align="center">{totalPrhcsCtn}</td>
                                                <td align="center">{totalSalesCtn}</td>
                                                <td align="center">{stok_quantity_cartoon}</td>
                                                <td style="text-align: right;"><?php echo (($position == 0) ? "$currency {supplier_price}" : "{supplier_price} $currency") ?></td>
                                                <td style="text-align: right;"><?php echo (($position == 0) ? "$currency {price}" : "{price} $currency") ?></td>
                                            </tr>
                                            {/stok_report}
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4" align="right"><b><?php echo display('grand_total') ?>:</b></td>
                                            <td align="center">
                                              <strong>
                                                    <?php echo (($position == 0) ? "$currency ". number_format($sub_total_in,2,'.',',') : number_format($sub_total_in,2,'.',',')." $currency"); ?>
                                                </strong>
                                            </td>
                                            <td align="center">
                                             <strong>
                                                    <?php echo (($position == 0) ? "$currency ". number_format($sub_total_out,2,'.',',') : number_format($sub_total_out,2,'.',',')." $currency"); ?>
                                                </strong>
                                            </td>
                                            <td align="center">
                                                     <strong>
                                                    <?php echo (($position == 0) ? "$currency ". number_format($sub_total_stock,2,'.',',') : number_format($sub_total_stock,2,'.',',')." $currency"); ?>
                                                </strong>
                                                </td>
                                            <td class="text-right">
                                                <strong>
                                                    <?php echo (($position == 0) ? "$currency ". number_format($supplier_ttlprice,2,'.',',') : number_format($supplier_ttlprice,2,'.',',')." $currency"); ?>
                                                </strong>
                                            </td>
                                            <td class="text-right">
                                                <strong>
                                                    <?php echo (($position == 0) ? "$currency ". number_format($ttl_sellprice, 2,'.',',') : number_format($ttl_sellprice, 2, '.', ',')." $currency"); ?>
                                                </strong>
                                            </td>
                                            <!--<td colspan="2"></td>-->
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="text-center">
                            <?php
                            if (isset($link)) {
                                echo $link;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Stock List End -->
<script type="text/javascript">
    $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
</script>