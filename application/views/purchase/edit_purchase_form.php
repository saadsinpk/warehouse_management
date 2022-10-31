<!-- Product Purchase js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_purchase.js.php" ></script>
<!-- Supplier Js -->
<script src="<?php echo base_url(); ?>my-assets/js/admin_js/json/supplier.js.php" ></script>
<!-- Purchase js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/purchase.js" type="text/javascript"></script>


<!-- Customer js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/customer.js.php" ></script>
<!-- Product invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_invoice.js.php" ></script>
<!-- Invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/pos_invoice.js" type="text/javascript"></script>
<!-- Edit Purchase Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('purchase_edit') ?></h1>
            <small><?php echo display('purchase_edit') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('purchase') ?></a></li>
                <li class="active"><?php echo display('purchase_edit') ?></li>
            </ol>
        </div>
    </section>

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

        <!-- Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('purchase_edit') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Cpurchase/purchase_update', array('class' => 'form-vertical', 'id' => 'purchase_update')) ?>
                    <div class="panel-body">
                        <div class="row">
                            <input type="hidden" value="<?php echo $supplier_id?>" id="supplier_id" name="supplier_id">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="add_item" class="col-sm-4 col-form-label"><?php echo display('barcode') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="product_name" class="form-control" placeholder='<?php echo display('barcode_qrcode_scan_here') ?>' id="add_item" autocomplete='off'>
                                        <input type="hidden" id="product_value" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="purchase_date" class="col-sm-4 col-form-label"><?php echo display('purchase_date') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="2" class="form-control datepicker" name="purchase_date" id="purchase_date" value="{purchase_date}" required />
                                        <input type="hidden" name="purchase_id" value="{purchase_id}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-3 col-form-label"><?php echo display('invoice_no') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" tabindex="3" class="form-control" name="chalan_no" placeholder="<?php echo display('invoice_no') ?>" required value="{chalan_no}" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label"><?php echo display('details') ?></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="adress" name="purchase_details" placeholder=" <?php echo display('details') ?>">{purchase_details}</textarea>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="table-responsive m-t-10">
                            <table class="table table-bordered table-hover" id="addinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('item_information') ?></th>
                                        <th class="text-center"><?php echo display('cartoon') ?> </th>
                                        <th class="text-center"><?php echo display('item_cartoon') ?> </th>
                                        <th class="text-center"><?php echo display('quantity') ?> </th>
                                        <th class="text-center"><?php echo display('rate') ?></th>
                                        <th class="text-center"><?php echo display('total') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <?php // d($purchase_info); ?>
                                <tbody id="addPurchaseItem">

                                    <?php
                                    $sl = 0;
                                    // echo "<pre>";
                                    // print_r($purchase_info);
                                    // echo "</pre>";
                                    foreach ($purchase_info as $purchase) {
                                        $sl++;
                                        ?>
                                        <tr>

                                            <td class="span3 supplier_item_load">     
                                                <input type="hidden" name="product_id[]" id="product_id" class="form-control" value="<?php echo $purchase['product_id']; ?>"> 
                                                <input type="text" name="product_id_view" id="product_id" class="form-control" value="<?php echo $purchase['product_name']." - (".$purchase['product_model'].")"; ?>"> 
                                            </td>
                                            <td class="text-right">
                                                <input type="number" name="cartoon[]" onkeyup="quantity_calculate(<?php echo $sl; ?>);" onchange="quantity_calculate(<?php echo $sl; ?>);" value="<?php echo $purchase['cartoon']; ?>" required  id="qty_item_<?php echo $sl; ?>" class="form-control text-right qty_calculate" min="0" />
                                            </td>
                                            <td class="text-right">   
                                                <input type="text" name="cartoon_item[]" value="<?php echo $purchase['cartoon_quantity']; ?>" readonly="readonly" id="ctnqntt_<?php echo $sl; ?>" class="ctnqntt<?php echo $sl; ?> form-control text-right" />
                                            </td>
                                            <td class="text-right">
                                                <input type="text" name="product_quantity[]" value="<?php echo $purchase['quantity']; ?>" readonly="readonly" id="total_qntt_<?php echo $sl; ?>" class="form-control text-right" />
                                            </td>
                                            <td>
                                                <input type="text" name="product_rate[]"  value="<?php echo $purchase['rate']; ?>" onkeyup="quantity_calculate(<?php echo $sl; ?>);" onchange="quantity_calculate(<?php echo $sl; ?>);" id="price_item_<?php echo $sl; ?>" class="form-control price_item<?php echo $sl; ?> text-right" min="0" />
                                            </td>
                                            <td class="text-right">
                                                <input class="form-control total_price text-right" type="text" name="total_price[]" id="total_price_<?php echo $sl; ?>" value="<?php echo $purchase['total_amount']; ?>" tabindex="-1" readonly="readonly" />
                                            </td>
                                            <td>
                                                <button class="btn btn-danger text-right" type="button" value="Delete" onclick="deleteRow(this)" tabindex="7"><?php echo display('delete') ?></button>
                                                <input type="hidden" name="purchase_detail_id[]" value="<?php echo $purchase['purchase_detail_id']; ?>"/>
                                            </td> 
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">
                                            &nbsp;                        
                                        </td>
                                        <td>
                                            <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url(); ?>"/>
                                        </td>
                                        <td class="text-right"><b><?php echo display('grand_total') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" value="{grand_total}" tabindex="-1" class="text-right form-control" name="grand_total_price" tabindex="-1" value="0.00" readonly="readonly" />
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="submit" id="add-purchase" class="btn custom_btn custom_fontcolor btn-large" name="add-purchase" value="<?php echo display('save_changes') ?>" tabindex="8" />
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit Purchase End -->

<script src="<?php echo base_url() ?>assets/js/purchase.js" type="text/javascript"></script>


<script type="text/javascript">
    //Onload filed select
    window.onload = function () {
        var text_input = document.getElementById('add_item');
        text_input.focus();
        text_input.select();
        $("#add_item").focus();
        $('body').addClass("sidebar-mini sidebar-collapse");
    }

    var barcodeScannerTimer;
    var barcodeString = '';
    //Invoice js
    $('#add_item').keydown(function (e) {
        if (e.keyCode == 13) {
            var product_id = $(this).val();
            var exist = $("#SchoolHiddenId_" + product_id).val();
            var qty = $("#total_qntt_" + product_id).val();
            var add_qty = parseInt(qty) + 1;
//            alert(qty); return false;
            $.ajax({
                type: "post",
                async: false,
                url: '<?php echo base_url('Cpurchase/get_table') ?>',
                data: {product_id: product_id},
                success: function (data) {
                    if (data == false) {
                        alert('This Product Not Found !');
                        document.getElementById('add_item').value = '';
                        document.getElementById('add_item').focus();
                        calculateSum();
                        invoice_paidamount();
                    } else {
                        $("#hidden_tr").css("display", "none");
                        document.getElementById('add_item').value = '';
                        document.getElementById('add_item').focus();
                        $('#addinvoice tbody').append(data);
                        calculateSum();
                        invoice_paidamount();
                    }
                },
                error: function () {
                    alert('Request Failed, Please check your code and try again!');
                }
            });

            $.ajax({
                type:"POST",
                url:'<?php echo base_url('Cpurchase/get_supplier_by_product') ?>',
                data: {product_id: product_id},
                success:function(dataSupplier){
                    alert(data);
                },
            });
        }
    });

    $('#add_item_m').keydown(function (e) {
        if (e.keyCode == 13) {
//            alert("K"); return false;
            var product_id = $(this).val();
            var exist = $("#SchoolHiddenId_" + product_id).val();
            var qty = $("#total_qntt_" + product_id).val();
            var add_qty = parseInt(qty) + 1;
            if (product_id == exist) {
                $("#total_qntt_" + product_id).val(add_qty);
                quantity_calculate(product_id);
                calculateSum();
                invoice_paidamount();
                document.getElementById('add_item_m').value = '';
                document.getElementById('add_item_m').focus();
            } else {
                $.ajax({
                    type: "post",
                    async: false,
                    url: '<?php echo base_url('Cpurchase/get_table') ?>',
                    data: {product_id: product_id},
                    success: function (data) {
//                        alert(product_id);                        return false;
                        if (data == false) {
                            alert('This Product Not Found !');
                            document.getElementById('add_item_m').value = '';
                            document.getElementById('add_item_m').focus();
                            quantity_calculate(product_id);
                            calculateSum();
                            invoice_paidamount();
                        } else {
                            $("#hidden_tr").css("display", "none");
                            document.getElementById('add_item_m').value = '';
                            document.getElementById('add_item_m').focus();
                            $('#addinvoice tbody').append(data);
                            quantity_calculate(product_id);
                            calculateSum();
                            invoice_paidamount();
                        }
                    },
                    error: function () {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }
        }
    });

    // capture barcode scanner input
    $('#add_item').on('keypress', function (e) {
        barcodeString = barcodeString + String.fromCharCode(e.charCode);
        clearTimeout(barcodeScannerTimer);
        barcodeScannerTimer = setTimeout(function () {
            processBarcode();
        }, 300);
    });

    function processBarcode() {
//        if (!isNaN(barcodeString) && barcodeString != '') {
        if (barcodeString != '') {
            var product_id = barcodeString;
            var exist = $("#SchoolHiddenId_" + product_id).val();
            var qty = $("#total_qntt_" + product_id).val();
            var add_qty = parseInt(qty) + 1;
//            alert(product_id);
            if (product_id == exist) {
                $("#total_qntt_" + product_id).val(add_qty);
                quantity_calculate(product_id);
                calculateSum();
                invoice_paidamount();
                document.getElementById('add_item').value = '';
                document.getElementById('add_item').focus();
            } else {
                $.ajax({
                    type: "post",
                    async: false,
                    url: '<?php echo base_url('Cpurchase/get_table') ?>',
                    data: {product_id: product_id},
                    success: function (data) {
                        // console.log(data);
                        if (data == false) {
                            alert('This Product Not Found !');
                            document.getElementById('add_item').value = '';
                            document.getElementById('add_item').focus();
                            quantity_calculate(product_id);
                            calculateSum();
                            invoice_paidamount();
                        } else {
                            $("#hidden_tr").css("display", "none");
                            document.getElementById('add_item').value = '';
                            document.getElementById('add_item').focus();
                            $('#addinvoice tbody').append(data);
                            quantity_calculate(product_id);
                            calculateSum();
                            invoice_paidamount();
                        }
                    },
                    error: function () {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
                $.ajax({
                    type:"POST",
                    url:'<?php echo base_url('Cpurchase/get_supplier_by_product') ?>',
                    data: {product_id: product_id},
                    success:function(dataSupplier){
                        $('#supplier_id').val(dataSupplier);
                    },
                });
            }
        } else {
//            alert('barcode is invalid: ' + barcodeString);
            alert('No product found!');
            $("#add_item").val('').focus();
        }

        barcodeString = ''; // reset
    }
    
    function invoice_paidamount() {
    var t = $("#grandTotal").val(),
        a = $("#paidAmount").val(),
        e = t - a;
    $("#dueAmmount").val(e)
}
</script>
