
<?php echo form_open_multipart('CExpense/expense_item_update', 'class="form-inner"') ?>
<?php //echo $expenseitem_edit->item_name;  dd($expenseitem_edit); ?>
<div class="form-group row">
    <label for="menu_name" class="col-sm-3 col-form-label text-right"><?php echo display('expense_item') ?> <i class="text-danger">*</i></label>
    <div class="col-sm-6">
        <input name="expense_item" type="text" value="<?php echo $expenseitem_edit->item_name; ?>" class="form-control" id="expenseitem" placeholder="<?php echo display('expense_item') ?>" required tabindex="1" onkeyup="special_character_remove(this.value, 'expenseitem')">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-offset-1 col-sm-2"></div>
    <div class="col-sm-4">
        <input type="hidden" name="item_id" class="itemid" value="" id="itemid">
        <button type="submit" class="btn custom_btn custom_fontcolor btn-sm" name="add-class"  tabindex="7"><?php echo display('update') ?></button>
    </div>
</div> 
<?php echo form_close() ?>