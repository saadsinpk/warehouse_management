<?php echo form_open_multipart('CWarehouse/warehouse_product_update', 'class="form-inner"') ?>

    

    <div class="form-group row">
        <label for="location_id" class="col-sm-4 col-form-label">Store</label>
        <div class="col-sm-8">
            <select required class="form-control" id="location_id" name="location_id"  tabindex='3'>
                <option value="">Select One</option>
                <?php
                foreach($location_list as $locations){
                ?>
                <option value="<?php echo $locations['location_id']?>"><?php echo $locations['location_name']?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>


    <div class="form-group row">
        <label for="product_id" class="col-sm-4 col-form-label">Product</label>
        <div class="col-sm-8">
            <select required class="form-control" id="product_id" name="product_id"  tabindex='3'>
                <option value="">Select One</option>
                <?php
                foreach($product_list as $products){
                ?>
                <option value="<?php echo $products['product_id']?>"><?php echo $products['product_name']?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="price_one" class="col-sm-4 col-form-label">Purchase Price</label>
        <div class="col-sm-8">
            <input required class="form-control" name="price_one" id="price_one" type="number" placeholder="Purchase Price" tabindex='5'>
        </div>
    </div>

    <div class="form-group row">
        <label for="price_two" class="col-sm-4 col-form-label">Sale Price</label>
        <div class="col-sm-8">
            <input required class="form-control" name="price_two" id="price_two" type="number" placeholder="Sale Price" tabindex='5'>
        </div>
    </div>
    

<div class="form-group row">
    <div class="col-sm-offset-1 col-sm-2"></div>
    <div class="col-sm-4">
        <input type="hidden" name="warehouseid" class="itemid" value="<?php echo $warehouseid; ?>" id="itemid">
        <button type="submit" class="btn custom_btn custom_fontcolor btn-sm" name="add-class"  tabindex="7"><?php echo display('update') ?></button>
    </div>
</div> 
<?php echo form_close() ?>