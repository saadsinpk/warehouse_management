<?php echo form_open_multipart('CWarehouse/warehouse_product_update', 'class="form-inner"') ?>

    <div class="table-responsive">
        <table class="table table-bordered" id="locationlist">
            <thead>
                <tr>
                    <th><?php echo display('sl'); ?></th>
                    <th>Warehouse</th>
                    <th>Store</th>
                    <th>Product</th>
                    <th>Purcahse Price</th>
                    <th>Sale Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                foreach($products as $product_details):
                    $i++;
                    ?>
                    <tr>
                       <td><?php echo $i?></td>
                       <td><?php echo $product_details->warehouse_name?></td>
                       <td><?php echo $product_details->location_name?></td>
                       <td><?php echo $product_details->product_name?></td>
                       <td><?php echo $product_details->price_one?></td>
                       <td><?php echo $product_details->price_two?></td> 
                    </tr>
                    <?php
                endforeach;    
                ?>
            </tbody>
        </table>
    </div>

    
<?php echo form_close() ?>