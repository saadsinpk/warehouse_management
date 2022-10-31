
<?php echo form_open_multipart('Clocation/location_name_update', 'class="form-inner"') ?>
<?php //echo $locationitem_edit->item_name;  dd($locationitem_edit); ?>
<div class="form-group row">
    <label for="menu_name" class="col-sm-3 col-form-label text-right"><?php echo display('store') ?> <i class="text-danger">*</i></label>
    <div class="col-sm-6">
        <input name="location_name" type="text" value="<?php echo $locationitem_edit->location_name; ?>" class="form-control" id="locationitem" placeholder="<?php echo display('location_name') ?>" required tabindex="1" onkeyup="special_character_remove(this.value, 'locationitem')">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-offset-1 col-sm-2"></div>
    <div class="col-sm-4">
        <input type="hidden" name="id" class="itemid" value="<?php echo $locationitem_edit->id; ?>" id="itemid">
        <button type="submit" class="btn custom_btn custom_fontcolor btn-sm" name="add-class"  tabindex="7"><?php echo display('update') ?></button>
    </div>
</div> 
<?php echo form_close() ?>