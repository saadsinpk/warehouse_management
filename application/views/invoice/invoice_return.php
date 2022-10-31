<style>
	/*Radio buttons*/


	input[type="radio"] {
	  display: none;
	}

	input[type="radio"] + label:before {
	  content: "";
	  display: inline-block;
	  width: 25px;
	  height: 25px;
	  padding: 6px;
	  margin-right: 3px;
	  background-clip: content-box;
	  border: 2px solid #bbb;
	  background-color: #e7e6e7;
	  border-radius: 50%;
	}

	input[type="radio"]:checked + label:before {
	  background-color: #003366;
	}

	label {
	  display: flex;
	  align-items: center;
	}

</style>
<?php echo form_open_multipart('Cinvoice/invoice_return_update', 'class="form-inner"'); 
$style='';
if(
    ($invoice_count_early['order_return'] > 0) || 
    ($invoice_count_early['order_product_return'] > 0) && 
    ($invoice_count_early['invoice_details']==$invoice_count_early['order_product_return']) && 
    $_SESSION['user_role']==14){
    $style="style='display:none;'";
}
echo "<pre>";
 print_r($invoice_count_early['invoice_details']);
 print_r($invoice_count_early['order_return']);
 print_r($invoice_count_early['order_product_return']);
//         print_r($_SESSION);
        echo "</pre>";
?>
    <input type="hidden" name="invoiceid" value="<?php echo $invoiceid?>">
    <?php if(($invoice_count['order_return']==0 && $invoice_count['invoice_details']!=$invoice_count['order_product_return'])){?>

	<div class="row d-flex justify-content-center mt-100" <?php echo $style?> >
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div>

                    	<label for="radio2">Choose Return Type</label>
						<input type="radio" name="return_type" id="radio2" class="return_type" value="product"/>
						<label for="radio2">Product</label>
						<input type="radio" name="return_type" id="radio3" class="return_type" value="order"/>
						<label for="radio3">Order</label>
                    	

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- <div class="form-group row">
        <label for="location_id" class="col-sm-4 col-form-label">Store</label>
        <div class="col-sm-8">
            <select required class="form-control" id="location_id" name="location_id"  tabindex='3'>
                <option value="">Select One</option>
                <?php
                //foreach($location_list as $locations){
                ?>
                <option value="<?php echo $locations['location_id']?>"><?php echo $locations['location_name']?></option>
                <?php
                //}
                ?>
            </select>
        </div>
    </div> -->
    <?php
    $return_type="";
    if($return_list) {
        foreach ($return_list as $key => $returnitems) {
            $return_type=$returnitems['return_type'];
            $returnId=$returnitems['returnId'];
            $returnStatus=$returnitems['acceptStatus'];
        }
    }

    if($_SESSION['user_role']==14){
        if($return_type=='order'){
            ?><div class="form-group orderlist" <?php if(($invoice_count['order_return']==0 && $invoice_count['invoice_details']!=$invoice_count['order_product_return'])){?>style="display:none;"<?php } ?>>
                <?php if($returnStatus==0){?><button class="btn btn-warning acceptReturn" data-id="<?php echo $returnId?>">Accept</button><?php }else{?><button class="btn btn-success acceptedReturn">Accepted</button><?php }?>
                </div><?php
        }else{
        ?>
        <div class="table-responsive product_list" <?php if(($invoice_count['order_return']==0 && $invoice_count['invoice_details']!=$invoice_count['order_product_return'])){?>style="display:none;"<?php } ?> >
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><?php echo display('sl'); ?></th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    // $newQuantity=0;
                    foreach($product_list as $product_details):
                        $i++;
                        $newQuantity=0;
                        if($return_list) {
                            foreach ($return_list as $key => $returnitems) {
                                if($product_details['product_id']==$returnitems['returnGoodId']){
                                    $newQuantity=$returnitems['goodQuantity'];
                                    $returnId=$returnitems['returnId'];
                                    $returnStatus=$returnitems['acceptStatus'];
                                }
                            }
                        }
                        ?>
                        <tr>
                           <td><?php echo $i?></td>
                           <td><?php echo $product_details['product_name']?></td>
                           <td><?php echo $newQuantity?></td>
                           <td>
                            <?php if($returnStatus==0){?>
                                <button class="btn btn-warning acceptReturn" data-id="<?php echo $returnId?>">Accept</button>
                            <?php }else{ ?>
                                <button class="btn btn-success acceptedReturn">Accepted</button>
                            <?php }?>
                            </td>
                        </tr>
                        <?php
                    endforeach;    
                    ?>
                </tbody>
            </table>
        </div><?php }
    }else{

        ?>
        <div class="table-responsive product_list" <?php if(($invoice_count['order_return']==0 && $invoice_count['invoice_details']!=$invoice_count['order_product_return'])){?>style="display:none;"<?php } ?>>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><?php echo display('sl'); ?></th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    // $newQuantity=0;
                    foreach($product_list as $product_details):
                        $i++;
                        $newQuantity=$product_details['quantity'];
                        if($return_list) {
                            foreach ($return_list as $key => $returnitems) {
                                if($product_details['product_id']==$returnitems['returnGoodId']){
                                    ?>
                                    <input type="hidden" value="<?php echo $returnitems['goodQuantity']?>" name="addquantity[]">
                                    <input type="hidden" value="<?php echo $returnitems['goodQuantity']?>" name="deletequantity[]">
                                    <?php
                                    $newQuantity=$product_details['quantity']-$returnitems['goodQuantity'];
                                    $returnStatus=$returnitems['acceptStatus'];
                                }
                            }
                        }
                        // echo $newQuantity;
                        ?>
                        <input type="hidden" id="hiddenQuantity<?php echo $product_details['product_id']?>" value="<?php echo $newQuantity?>" name="oldquantity[]">
                        <input type="hidden" name="productid[]" value="<?php echo $product_details['product_id']?>">
                        <tr>
                           <td><?php echo $i?></td>
                           <td><?php echo $product_details['product_name']?></td>
                           <td><?php echo $newQuantity?></td>
                           <td>
                           <?php if($returnStatus==0){?>
                               <input type="number" min="1" name="modifyquantity[]" id="modifyquantity<?php echo $product_details['product_id']?>" onchange="checkQuantity(<?php echo $product_details['product_id']?>);">
                           <?php }else{ ?>
                               <button class="btn btn-success acceptedReturn">Accepted</button>
                           
                           <?php }?>
                           </td>
                        </tr>
                        <?php
                    endforeach;    
                    ?>
                </tbody>
            </table>
        </div><?php
    }
    ?>

    <!-- <div class="form-group row">
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
    </div> -->
    
<?php

    if($_SESSION['user_role']==15){
        ?>
<div class="form-group row">
    <div class="col-sm-offset-1 col-sm-2"></div>
    <div class="col-sm-4">
        <input type="hidden" name="warehouseid" class="itemid" value="<?php echo $warehouseid; ?>" id="itemid">
        <button type="submit" class="btn custom_btn custom_fontcolor btn-sm" name="add-class"  tabindex="7"><?php echo display('update') ?></button>
    </div>
</div> 
<?php } echo form_close() ?>
<script>
	$("input[name=return_type]:radio").click(function () {
    	if ($('input[name=return_type]:checked').val() == "product") {
    	    $('.product_list').show();
            $('.orderlist').hide();
    	}else if($('input[name=return_type]:checked').val() == "order"){
    	  $('.product_list').hide();
          $('.orderlist').show();
    	}
    });
    function checkQuantity(productid){
        var oldQuantity=$('#hiddenQuantity'+productid).val();
        var modifyquantity=$('#modifyquantity'+productid).val();


        if(parseInt(modifyquantity)>parseInt(oldQuantity)){
            alert("Return quantity should be less than present quantity.");
            $('#modifyquantity'+productid).val('');
            $('#modifyquantity'+productid).focus();
        }
    }

    $('.acceptReturn').click(function(e){
        e.preventDefault();
        returnId=$(this).attr('data-id');

        var baseurl = $("#baseurl").val();
        var x = confirm("Are You Sure,Want to accept this return ?");

        if (x == true) {
            $.ajax
                    ({
                        type: "POST",
                        url: baseurl + 'Cinvoice/accept_return',
                        data: {returnId: returnId},
                        cache: false,
                        success: function (datas)
                        {
                            location.reload();
                        }
                    });
        }
    });
    $('.acceptedReturn').click(function(e){
        e.preventDefault();
    });
</script>