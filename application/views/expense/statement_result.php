<?php
$currency = $currency_details[0]['currency'];
$position = $currency_details[0]['currency_position'];
$CI = & get_instance();
$CI->load->library('Occational');
?>
<div class="row">
    <div class="col-sm-12">        
        <div class="m-b-10">
            <a  class="btn btn-success" href="#" onclick="printDiv('purchase_div')"><i class="fa fa-print"></i></a>
        </div>        
        <div class="panel panel-bd lobidrag" id="printArea">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo display('expense_statement') ?> </h4>
                </div>
            </div>
            <div class="panel-body">        
                <div id="loaded_img" style="display: none; text-align: center; "><img src="<?php echo base_url('assets/dist/img/loader.gif'); ?>" alt="" width="2%" style="position: fixed; left: 55%; top: 70%; z-index: 999;"></div>

                <table class="table table-bordered" id="expenselistd">
                    <thead>
                        <tr>
                            <th><?php echo display('sl'); ?></th>
                            <th><?php echo display('date'); ?></th>
                            <th><?php echo display('expense_item'); ?></th>
                            <th class='text-right'><?php echo display('amount'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sl = $total = 0;
//                        dd($statement_result);
                        if ($statement_result) {
                            foreach ($statement_result as $result) {
                                $sl++;
                                ?>
                                <tr>
                                    <td><?php echo $sl; ?></td>
                                    <td>
                                        <?php
                                        echo $CI->occational->dateConvertMyformat($result->date);
                                        ?>
                                    </td>
                                    <td><?php echo $result->item_name; ?></td>
                                    <td class='text-right'>
                                        <?php
                                        $total += $result->amount;
                                        echo (($position == 0) ? "$currency " : " $currency");
                                        echo number_format($result->amount, 2, '.', ',');
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                        <tr>
                            <th colspan="3" class="text-right"><?php echo display('total'); ?></th>
                            <th class="text-right">
                                <?php
                                echo (($position == 0) ? "$currency " : " $currency");
                                echo number_format($total, 2, '.', ',')
                                ?>
                            </th>
                        </tr>
                    </tbody>
                    <?php if (empty($statement_result)) { ?>
                        <tr>
                            <th class="text-center text-danger" colspan="6"><?php echo display('data_not_found'); ?></th>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/expense.js" type="text/javascript"></script>