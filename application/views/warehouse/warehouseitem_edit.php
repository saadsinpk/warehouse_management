
<?php echo form_open_multipart('CWarehouse/warehouse_name_update', 'class="form-inner"') ?>
<?php //echo $warehouseitem_edit->item_name;  dd($warehouseitem_edit); ?>
<div class="form-group row">
    <label for="menu_name" class="col-sm-3 col-form-label text-right">Warehouse Name <i class="text-danger">*</i></label>
    <div class="col-sm-6">
        <input name="warehouse_name" type="text" value="<?php echo $warehouseitem_edit->warehouse_name; ?>" class="form-control" id="warehouseitem" placeholder="Warehouse Name" required tabindex="1" onkeyup="special_character_remove(this.value, 'warehouseitem')">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-offset-1 col-sm-2"></div>
    <div class="col-sm-4">
        <input type="hidden" name="id" class="itemid" value="<?php echo $warehouseitem_edit->id; ?>" id="itemid">
        <button type="submit" class="btn custom_btn custom_fontcolor btn-sm" name="add-class"  tabindex="7"><?php echo display('update') ?></button>
    </div>
</div> 
<?php echo form_close() ?>