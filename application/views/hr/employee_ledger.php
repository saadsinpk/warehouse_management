<?php
$CI = & get_instance();
$CI->load->library('Occational');
?>
<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('employee') ?></h1>
            <small><?php echo display('employee_ledger') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('web_settings') ?></a></li>
                <li class="active"><?php echo display('employee_ledger') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="">
            <?php
            $error = $this->session->flashdata('error');
            $success = $this->session->flashdata('success');
            if ($error != '') {
                echo $error;
            }
            if ($success != '') {
                echo $success;
            }
            ?>
        </div>

        <!-- New user -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title" style="display: flex; align-content: center; justify-content: space-between; ">
                            <h4><?php echo display('employee_ledger') ?> </h4>
                            <div style="display: flex;">  
                                <a  class="btn custom_btn custom_fontcolor" href="#" onclick="printDiv('printableArea')"><i class="fa fa-print text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table" id="printableArea">
                            <h4 class="text-center"><?php echo $single_employee[0]->first_name . " " . @$single_employee[0]->last_name; ?></h4>
                            <h5 class="text-center"><?php echo display('address') ?>: <?php echo $single_employee[0]->city; ?></h5>
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('date') ?></th>
                                        <th class=""><?php echo display('description') ?></th>
<!--                                        <th class="text-center"><?php echo display('invoice_no') ?></th>
                                        <th class="text-center"><?php echo display('deposite_id') ?></th>-->
                                        <th class="text-right"><?php echo display('debit') ?></th>
                                        <th class="text-right"><?php echo display('credit') ?></th>
                                        <th class="text-right"><?php echo display('balance') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($employee_ledgerinfo) {
//                                        echo '<pre>';                                        print_r($employee_ledgerinfo);die();
                                        $sl = 0;
                                        $debit = $credit = $balance = 0;
                                        $currency = $currency_details[0]['currency'];
                                        $position = $currency_details[0]['currency_position'];
                                        foreach ($employee_ledgerinfo as $ledger) {
                                            $sl++;
                                            ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php
                                                    echo $CI->occational->dateConvertMyformat($ledger['date']);
                                                    ?>
                                                </td>
                                                <td><?php echo $ledger['description']; ?></td>
        <!--                                                <td><a href="<?php echo base_url(); ?>Cpurchase/purchase_details_data/<?php echo $ledger['transaction_id']; ?>"><?php echo $ledger['chalan_no']; ?></a></td>
                                                <td><?php echo @$ledger['deposit_no']; ?></td>-->
                                                <td align="right">
                                                    <?php
                                                    if ($ledger['d_c'] == 'd') {
                                                        echo (($position == 0) ? "$currency " : " $currency");
                                                        echo number_format($ledger['amount'], 2, '.', ',');
                                                        $debit += $ledger['amount'];
                                                    } else {
                                                        echo (($position == 0) ? "$currency " : " $currency");
                                                        echo number_format($ledger['amount'], 2, '.', ',');
                                                        $debit += '0.00';
                                                    }
                                                    ?>
                                                </td>
                                                <td align="right">
                                                    <?php
                                                    if ($ledger['d_c'] == 'c') {
                                                        echo (($position == 0) ? "$currency " : " $currency");
                                                        echo number_format($ledger['amount'], 2, '.', ',');
                                                        $credit += $ledger['amount'];
                                                    } else {
                                                        echo $credit += '0.00';
                                                    }
                                                    ?>
                                                </td>
                                                <td align='right'>
                                                    <?php
                                                    $balance = $debit - $credit;
                                                    echo (($position == 0) ? "$currency " : " $currency");
                                                    echo number_format($balance, 2, '.', ',');
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" align="right"><b><?php echo display('grand_total') ?>:</b></td>
                                        <td align="right"><b><?php
                                                echo (($position == 0) ? "$currency " : "$currency");
                                                echo number_format(($debit), 2, '.', ',');
                                                ?></b>
                                        </td>
                                        <td align="right"><b><?php
                                                echo (($position == 0) ? "$currency " : "$currency");
                                                echo number_format(($credit), 2, '.', ',');
                                                ?></b>
                                        </td>
                                        <td align="right"><b><?php
                                                echo (($position == 0) ? "$currency " : "$currency");
                                                echo number_format(($balance), 2, '.', ',');
                                                ?></b></td>
                                    </tr>
                                </tfoot>
                            </table>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<!-- Edit user end -->
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        document.body.style.marginTop = "0px";
        document.getElementsByClassName("dt-buttons btn-group")[0].style.display = "none";
        document.getElementsByClassName("dataTables_filter")[0].style.display = "none";
        document.getElementsByClassName("dataTables_length")[0].style.display = "none";
        document.getElementsByClassName("pagination")[0].style.display = "none";
        window.print();
        document.body.innerHTML = originalContents;
        document.location.href = "<?php echo base_url('Chrm/single_employee_ledger/' . $single_employee[0]->employee_id); ?>";
    }

</script>