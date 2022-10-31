<table id="dataTableExample2xx" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th><?php echo display('sl') ?></th>
            <th><?php echo display('purchase_no') ?></th>
            <th><?php echo display('purchase_id') ?></th>
            <th><?php echo display('supplier_name') ?></th>
            <th><?php echo display('purchase_date') ?></th>
            <th class="text-right"><?php echo display('total_ammount') ?></th>
            <th class="text-center"><?php echo display('action') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        //d($purchases_list);
        $ttlamount = $sl = 0;
        if ($purchases_list) {
            foreach ($purchases_list as $single) {
                $sl++;
                ?>
                <tr>
                    <td><?php echo $sl; ?></td>
                    <td>
                        <a href="<?php echo base_url() . 'Cpurchase/purchase_details_data/' . $single['purchase_id']; ?>">
                            <?php echo $single['chalan_no']; ?>
                        </a>
                    </td>
                    <td>                                                
                        <a href="<?php echo base_url() . 'Cpurchase/purchase_details_data/' . $single['purchase_id']; ?>">
                            <?php echo $single['purchase_id']; ?>
                        </a>
                    </td>
                    <td>
                        <a href="<?php echo base_url() . 'Csupplier/supplier_details/' . $single['supplier_id']; ?>">
                            <?php echo $single['supplier_name']; ?>
                        </a>
                    </td>
                    <td><?php echo $single['purchase_date']; ?></td>
                    <td class="text-right">
                        <?php
                        $ttlamount += $single['grand_total_amount'];
                        echo (($position == 0) ? "$currency " . $single['grand_total_amount'] : $single['grand_total_amount'] . " $currency")
                        ?>
                    </td>
                    <td>
            <center>
                <?php
                echo form_open();
                if ($this->permission->check_label('manage_purchase')->update()->access()) {
                    ?>
                    <a href="<?php echo base_url() . 'Cpurchase/purchase_update_form/' . $single['purchase_id']; ?>" class="btn custom_btn custom_fontcolor btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <?php
                }
                if ($this->permission->check_label('manage_purchase')->delete()->access()) {
                    ?>
                    <a href="javascript:void(0)" class="deletePurchase btn btn-danger btn-sm" onclick="deletepurchase(<?php echo $single['purchase_id']; ?>)" name="<?php echo $single['purchase_id']; ?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                <?php } ?>
            </center>
            <?php echo form_close() ?>
        </td>
        </tr>
        <?php
    }
}
?>
</tbody>
<tfoot>
    <tr>
        <th colspan="6" class="text-right">
            <?php echo (($position == 0) ? "$currency " . number_format($ttlamount, 2, '.', ',') : number_format($ttlamount, 2, '.', ',') . " $currency"); ?>
        </th>                        
        <td></td>
    </tr>
</tfoot>
<?php if (empty($purchases_list)) { ?>
    <tfoot>
        <tr>
            <th class="text-center text-danger" colspan="9"><?php echo display('data_not_found'); ?></th>
        </tr>
    </tfoot>
<?php } ?>
</table>
<script src="<?php echo base_url() ?>assets/js/purchase.js" type="text/javascript"></script>