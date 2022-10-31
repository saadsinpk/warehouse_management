<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        document.body.style.marginTop = "0px";
        window.print();
//        document.getElementsByClassName("dt-buttons btn-group")[0].style.display = "none";
//        document.getElementsByClassName("pagination")[0].style.display = "none";
        document.body.innerHTML = originalContents;
        document.location.href = '<?php echo base_url('Admin_dashboard/total_profit_report/1'); ?>';
    }
</script>
<!-- Profit Report Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('profit_report') ?></h1>
            <small><?php echo display('total_profit_report') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('report') ?></a></li>
                <li class="active"><?php echo display('profit_report') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Profit report -->
        <div class="row">
            <div class="col-sm-12">                
                <button class="btn custom_btn custom_fontcolor default m-b-10" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Filter
                </button>
                <div class="collapse panel panel-default" id="collapseExample">
                    <div class="panel-body"> 
                        <?php echo form_open('Admin_dashboard/retrieve_dateWise_profit_report/2', array('class' => 'form-inline')) ?>
                        <div class="form-group col-sm-3">
                            <!--<label for="from_date" class="m-r-15"><?php echo display('start_date') ?>:</label>-->
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('start_date') ?>" >
                        </div> 
                        <div class="form-group">
                            <!--<label for="to_date" class="m-r-15"><?php echo display('end_date') ?>:</label>-->
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
                            <h4><?php echo display('profit_report') ?></h4>
                            <div class="" style="display: flex; ">
                                <a href="<?php echo base_url('Admin_dashboard/total_profit_report/1'); ?>" class="btn custom_btn custom_fontcolor" style="margin-right: 5px;"><?php echo display('all'); ?></a>
                                <a  class="btn btn-success" href="#" onclick="printDiv('printableArea')"><i class="fa fa-print text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" id="printableArea">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sales_date') ?></th>
                                        <th><?php echo display('invoice_no') ?></th>
                                        <th class="text-right"><?php echo display('supplier_ammount') ?></th>
                                        <th class='text-right'><?php echo display('my_sale_ammount') ?></th>
                                        <th class='text-right'><?php echo display('total_profit') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($total_profit_report) {
                                        ?>
                                        {total_profit_report}
                                        <tr>
                                            <td>{prchse_date}</td>
                                            <td>
                                                <a href="<?php echo base_url() . 'Cinvoice/invoice_inserted_data/{invoice_id}'; ?>">
                                                    {invoice}
                                                </a>
                                            </td>
                                            <td style="text-align: right;"><?php echo (($position == 0) ? "$currency {total_supplier_rate}" : "{total_supplier_rate} $currency") ?></td>
                                            <td style="text-align: right;">
                                                <?php echo (($position == 0) ? "$currency {total_sale}" : "{total_sale} $currency") ?>
                                            </td>
                                            <td style="text-align: right;"><?php echo (($position == 0) ? "$currency {total_profit}" : "{total_profit} $currency") ?></td>
                                        </tr>
                                        {/total_profit_report}
                                        <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" align="right" style="text-align:right;font-size:14px !Important">&nbsp; <b><?php echo display('total_profit') ?>: </b></td>
                                        <td style="text-align: right;"><b><?php echo (($position == 0) ? "$currency {SubTotalSupAmnt}" : "{SubTotalSupAmnt} $currency") ?></b></td>	

                                        <td style="text-align: right;"><b><?php echo (($position == 0) ? "$currency {SubTotalSaleAmnt}" : "{SubTotalSaleAmnt} $currency") ?></b></td>

                                        <td style="text-align: right;"><b><?php echo (($position == 0) ? "$currency {profit_ammount}" : "{profit_ammount} $currency") ?></b></td>
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
<!-- Profit Report End -->
<script type="text/javascript">
    $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
</script>