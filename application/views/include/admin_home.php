<!--<style type="text/css">
    .canvasjs-chart-credit {
        display: none;
    }
    .highcharts-credits, .highcharts-button-symbol{
        display: none;
    }
    /*========== its for flotChart8 pie chart ===========*/
    .flotChart{
        height: 192px;
    }
    .legend div {background: none !important;}
    .legend table{
        top: -30px !important;
    right: -5px !important;
    }
</style>-->
<!-- Admin Home Start -->
<?php
// echo "<pre>";
//     print_r($_SESSION);
//     echo "</pre>";
//     exit; ?>
<div class="content-wrapper removeContentwraper"  id="bodycontent">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>

        </div>
        <div class="header-title">
            <h1><?php echo display('dashboard') ?></h1>
            <small><?php echo display('home') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li class="active"><?php echo display('dashboard') ?></li>
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
        <!-- First Counter -->
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">                            
                            <div id="chart_div1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Report -->
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="panel panel-bd lobidisable">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('todays_report') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="message_innerx">
                            <div class="message_widgets">
                                <table class="table table-bordered table-striped table-hover">
                                    <tr>
                                        <th><?php echo display('todays_report') ?></th>
                                        <th><?php echo display('money') ?></th>
                                    </tr>
                                    <tr>
                                        <th><?php echo display('total_sales') ?></th>
                                        <td><?php echo (($position == 0) ? "$currency $sales_amount" : "$sales_amount $currency") ?></td>
                                    </tr>
                                    <tr>
                                        <th><?php echo display('total_purchase') ?></th>
                                        <td><?php echo (($position == 0) ? "$currency $purchase_amount" : "$purchase_amount $currency") ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>      
                        <h4 class="f-s-13px">Last Month Sales & Purchase</h4>
                        <div class="flotChart">
                            <div id="flotChart8" class="flotChart-demo"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <!--<canvas class="totalCustomer"></canvas>-->
                            <div class="small"><?php echo display('total_customer') ?></div>
                            <h2 style="float: left;">
                                <span class="count-number"><?php echo $total_customer ?></span>
                                <span class="slight"><i class="fa fa-play fa-rotate-270 text-primary"> </i></span>
                            </h2>
                            <span>
                                <img src="<?php echo base_url('assets/dist/img/customer.png'); ?>" style="width: 25%; float: right;">
                            </span>
                            <!--<div class="small"><?php echo display('total_customer') ?></div>-->
                            <!--<div class="sparkline1 text-center"></div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <!--<canvas class="totalProduct"></canvas>-->
                            <div class="small"><?php echo display('total_product') ?></div>
                            <h2 class="float_left">
                                <span class="count-number"><?php echo $total_product ?></span> 
                                <span class="slight"><i class="fa fa-play fa-rotate-270 text-primary"> </i></span>
                            </h2>                            
                            <span>
                                <img src="<?php echo base_url('assets/dist/img/products-icon-3.jpg'); ?>" style="width: 25%; float: right;">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <!--<canvas class="totalSupplier"></canvas>-->
                            <div class="small"><?php echo display('total_supplier') ?></div>
                            <h2 style="float: left;">
                                <span class="count-number"><?php echo $total_suppliers ?></span> 
                                <span class="slight"><i class="fa fa-play fa-rotate-270 text-primary"> </i> </span>
                            </h2>
                            <span>
                                <img src="<?php echo base_url('assets/dist/img/supplier.png'); ?>" style="width: 35%; float: right;">
                            </span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <div class="small"><?php echo display('total_invoice') ?></div>
                            <h2 class="float_left">
                                <span class="count-number"><?php echo $total_sales ?></span>
                                <span class="slight"> <i class="fa fa-play fa-rotate-270 text-primary"> </i> </span>
                            </h2>
                            <span>
                                <img src="<?php echo base_url('assets/dist/img/invoice.png'); ?>" style="width: 25%; float: right;">
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Counter -->
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">              
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;">
                                    <img src="<?php echo base_url('my-assets/image/pos_invoice.png'); ?>" height="40" width="40" >
                                </span>
                            </h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cinvoice/pos_invoice') ?>')"><?php echo display('create_pos_invoice') ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="<?php echo base_url('my-assets/image/invoice.png'); ?>" height="45" width="45" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cinvoice') ?>')"><?php echo display('create_new_invoice') ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="<?php echo base_url('my-assets/image/product.png'); ?>" height="45" width="45" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="javascipt:void(0)" onclick="pageopen('<?php echo base_url('Cproduct') ?>')"><?php echo display('add_product') ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="panel panel-bd">
                    <div class="panel-body">
                        <div class="statistic-box">
                            <h2><span class="slight" style="margin-left: 70px;"><img src="<?php echo base_url('my-assets/image/customer.png'); ?>" height="45" width="45" > </span></h2>
                            <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Ccustomer') ?>')"><?php echo display('add_customer') ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($this->session->userdata('user_type') == '1') { ?>
            <!-- Third Counter -->
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="slight" style="margin-left: 70px;"><img src="<?php echo base_url('my-assets/image/sale.png'); ?>" height="45" width="45"> </span></h2>
                                <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Admin_dashboard/todays_sales_report') ?>')"><?php echo display('sales_report') ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="slight" style="margin-left: 70px;"><img src="<?php echo base_url('my-assets/image/purchase.png'); ?>" height="45" width="45"> </span></h2>
                                <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Admin_dashboard/todays_purchase_report') ?>')"><?php echo display('purchase_report') ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="slight" style="margin-left: 70px;"><img src="<?php echo base_url('my-assets/image/stock.png'); ?>" height="40"> </span></h2>
                                <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Creport') ?>')"><?php echo display('stock_report') ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="panel panel-bd">
                        <div class="panel-body">
                            <div class="statistic-box">
                                <h2><span class="slight" style="margin-left: 70px;"><img src="<?php echo base_url('my-assets/image/account.png'); ?>" height="40"></span></h2>
                                <div class="small" style="font-size: 17px;margin-top: 20px;text-align: center;"><a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Admin_dashboard/all_report') ?>')"><?php echo display('todays_report') ?></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!--<hr>-->

    </section> <!-- /.content -->
</div> <!-- /.content-wrapper -->
<!-- Admin Home end -->

<!-- ChartJs JavaScript -->
<script src="<?php echo base_url() ?>assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/series-label.js"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
<script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>

<script type="text/javascript">

                                window.onload = function () {
//    ========== First chart start ===========
                                    Highcharts.chart('chart_div1', {
                                        chart: {
                                            zoomType: 'xy'
                                        },
                                        title: {
                                            text: ' Monthly Sales Amount & Order',
                                            align: 'left'
                                        },
                                        xAxis: [{
                                                categories: [<?php echo $monthly_sales_month; ?>],
//                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
//                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                                                crosshair: true
                                            }],
                                        yAxis: [{// Primary yAxis
                                                labels: {
                                                    format: '${value}',
                                                    style: {
                                                        color: Highcharts.getOptions().colors[2]
                                                    }
                                                },
                                                title: {
                                                    text: 'Sales Amount',
                                                    style: {
                                                        color: Highcharts.getOptions().colors[2]
                                                    }
                                                },
                                                opposite: true

                                            }, {// Secondary yAxis
                                                gridLineWidth: 0,
                                                title: {
                                                    text: 'Sales Order',
                                                    style: {
                                                        color: Highcharts.getOptions().colors[0]
                                                    }
                                                },
                                                labels: {
                                                    format: '{value}',
                                                    style: {
                                                        color: Highcharts.getOptions().colors[0]
                                                    }
                                                }

                                            }],
                                        tooltip: {
                                            shared: true
                                        },
                                        legend: {
                                            layout: 'vertical',
                                            align: 'left',
                                            x: 80,
                                            verticalAlign: 'top',
                                            y: 55,
                                            floating: true,
                                            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || 'rgba(255,255,255,0.25)'
                                        },
                                        series: [{
                                                name: 'Sales Order',
                                                type: 'column',
                                                yAxis: 1,
                                                data: [<?php echo $monthlysaleorders; ?>],
                                                tooltip: {
//                        valuePrefix: '$'
                                                }

                                            }, {
                                                name: 'Sales Amount',
                                                type: 'spline',
                                                data: [<?php echo $monthly_sales_amount; ?>],
                                                tooltip: {
//                        valueSuffix: ' °C'
                                                    valuePrefix: '$'
                                                }
                                            }],
                                        responsive: {
                                            rules: [{
                                                    condition: {
                                                        maxWidth: 500
                                                    },
                                                    chartOptions: {
                                                        legend: {
                                                            floating: false,
                                                            layout: 'horizontal',
                                                            align: 'center',
                                                            verticalAlign: 'bottom',
                                                            x: 0,
                                                            y: 0
                                                        }
                                                    }
                                                }]
                                        }
                                    });
//    ========== First chart Close 
//    ===========$purchase_amount  $sales_amount ===========                                
                                    var data8 = [
                                        {label: "Sales <?php echo number_format($lastmonth_ttlsales, 2, '.', ','); ?>", data: '<?php echo $lastmonth_ttlsales; ?>', color: "#003366"},
                                        {label: "Purchase <?php echo number_format($lastmonth_ttlpurchase, 2, '.', ','); ?>", data: <?php echo $lastmonth_ttlpurchase; ?>, color: "#86b4e2"},
                                    ];
                                    var chartUsersOptions8 = {
                                        series: {
                                            pie: {
                                                show: true
                                            }
                                        },
                                        grid: {
                                            hoverable: true
                                        },
                                        tooltip: true,
                                        tooltipOpts: {
                                            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
                                            shifts: {
                                                x: 20,
                                                y: 0
                                            },
                                            defaultTheme: false
                                        }
                                    };

                                    $.plot($("#flotChart8"), data8, chartUsersOptions8);

                                }
</script>