<!-- Customer js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/customer.js.php" ></script>
<!-- Product invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_invoice.js.php" ></script>
<!-- Invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/invoice.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>my-assets/js/admin_js/pos_invoice.js" type="text/javascript"></script>

<!-- Edit Invoice Start -->
<div class="content-wrapper removeContentwraper" id="bodycontent">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('invoice_edit') ?></h1>
            <small><?php echo display('invoice_edit') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('invoice') ?></a></li>
                <li class="active"><?php echo display('invoice_edit') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <!-- Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('invoice_edit') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open('Cinvoice/invoice_update', array('class' => 'form-vertical', 'id' => 'invoice_update')) ?>
                    <div class="panel-body">

                        <div class="row">
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
                                    <label for="add_item_m" class="col-sm-4 col-form-label"><?php echo display('barcode') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="product_name" class="form-control bq" placeholder='<?php echo display('manual_barcode_input'); ?>' id="add_item_m" autocomplete='off' tabindex="1" value="">
                                        <input type="hidden" id="product_value" name="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label"><?php echo display('customer_name') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="customer_name" value="{customer_name}" class="form-control customerSelection" placeholder='<?php echo display('customer_name') ?>' required id="customer_name" tabindex="1">
                                        <input type="hidden" class="customer_hidden_value" name="customer_id" value="{customer_id}" id="SchoolHiddenId"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label"><?php echo display('date') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="2" class="form-control datepicker" name="invoice_date" value="{date}"  required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Store <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select required class="form-control" id="location_id" name="store_id"  tabindex='3'>
                                            <option value="">Select One</option>
                                            <?php
                                            foreach($location_list as $locations){
                                            ?>
                                            <option <?php if($locations['location_id']==$store_id){echo "selected";}?> value="<?php echo $locations['location_id']?>"><?php echo $locations['location_name']?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="addinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('item_information') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('available_ctn') ?></th>
                                        <th class="text-center"><?php echo display('cartoon') ?></th>
                                        <th class="text-center"><?php echo display('item') ?></th>
                                        <th class="text-center"><?php echo display('quantity') ?></th>
                                        <th class="text-center"><?php echo display('rate') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('discount') ?> </th>
                                        <th class="text-center"><?php echo display('total') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                    {invoice_all_data}
                                    <tr>
                                        <td class="" style="width: 200px;">
                                            <input type="text" name="product_name" onclick="invoice_productList({sl});" value="{product_name}-({product_model})" class="form-control productSelection" required placeholder='<?php echo display('product_name') ?>' id="product_names" tabindex="3">

                                            <input type="hidden" class="product_id_{sl} autocomplete_hidden_value" name="product_id[]" value="{product_id}" id="SchoolHiddenId"/>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control available_quantity_{product_id}" readonly id="avalaible_crtn{product_id}" value="<?php echo $available_carton?>" name="avalaible_crtn[]">
                                        </td>
                                        <td>
                                            <input type="number" id="total_qntt_{product_id}" name="cartoon[]" onkeyup="quantity_calculate('123');" onchange="quantity_calculate('123');" class="quantity_123 form-control text-right" value="1" min="1" required="">
                                            
                                        </td>
                                        <td>
                                            <input type="text" class="ctnqntt_{sl} form-control text-right" readonly="" value="{per_cartoon}" />
                                        </td>

                                        <td>
                                            <input type="text" name="product_quantity[]" value="{quantity}" class="total_qntt_{sl} form-control text-right" readonly="" />
                                        </td>

                                        <td>
                                            <input type="text" name="product_rate[]" onkeyup="quantity_calculate({sl});" onchange="quantity_calculate({sl});" value="{rate}" id="price_item_{product_id}" class="price_item{product_id} form-control text-right" min="0" tabindex="5" required="" />
                                        </td>
                                        <!-- Discount -->
                                        <td>
                                            <input type="text" name="discount[]" onkeyup="quantity_calculate({sl});"  onchange="quantity_calculate({sl});" id="discount_{sl}" class="form-control text-right" placeholder="<?php echo display('discount') ?>" value="{discount}" min="0" tabindex="6"/>
                                        </td>

                                        <td>
                                            <input class="total_price form-control text-right" type="text" name="total_price[]" id="total_price_{sl}" value="{total_price}" readonly="readonly" />

                                            <input type="hidden" name="invoice_details_id[]" id="invoice_details_id" value="{invoice_details_id}"/>
                                        </td>
                                        <td>



                                            <!-- Discount calculate start-->
                                            <input type="hidden" id="total_discount_1" class="total_tax_1" />
                                            <input type="hidden" id="all_discount_{sl}" class="total_discount" value="{discount}"/>
                                            <!-- Discount calculate end -->
                                            <button style="text-align: right;" class="btn btn-danger" type="button" value="<?php echo display('delete') ?>" onclick="deleteRow(this)" tabindex="7"><?php echo display('delete') ?></button>
                                        </td>
                                    </tr>
                                    {/invoice_all_data}
                                </tbody>

                                <tfoot>

                                    <tr>
                                        <td style="text-align:right;" colspan="6"><b><?php echo display('total_discount') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="total_discount_ammount" class="form-control text-right" name="total_discount" value="{total_discount}" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6"  style="text-align:right;"><b><?php echo display('grand_total') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="grandTotal" class="form-control text-right" name="grand_total_price" value="{total_amount}" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url(); ?>"/>
                                            <input type="hidden" name="invoice_id" id="invoice_id" value="{invoice_id}"/>

                                        </td>
                                        <td style="text-align:right;" colspan="5"><b><?php echo display('paid_ammount') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="paidAmount" 
                                                   onkeyup="invoice_paidamount();" class="form-control text-right" name="paid_amount" value="{paid_amount}" tabindex="8"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="display:flex;gap:2%;">
                                            <input type="submit" id="add-invoice" class="btn btn-success btn-large" name="add-invoice" value="<?php echo display('save_changes') ?>" tabindex="9" style="margin-bottom: 10px;"/>
                                            <input type="button" id="" class="btn btn-warning" name="" value="<?php echo display('full_paid') ?>" tabindex="12" onClick="full_paid();" style="margin-bottom: 10px;"/>
                                        </td>

                                        <td style="text-align:right;" colspan="5"><b><?php echo display('due') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="dueAmmount" class="form-control text-right" name="due_amount" value="{due_amount}" readonly="readonly"/>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
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
                url: '<?php echo base_url('Cinvoice/insert_pos_invoice') ?>',
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
                    url: '<?php echo base_url('Cinvoice/insert_pos_invoice') ?>',
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
                    url: '<?php echo base_url('Cinvoice/insert_pos_invoice') ?>',
                    data: {product_id: product_id},
                    success: function (data) {
                        console.log(data);
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
            }
        } else {
//            alert('barcode is invalid: ' + barcodeString);
            alert('No product found!');
            $("#add_item").val('').focus();
        }

        barcodeString = ''; // reset
    }
    
</script>
<!-- Edit Invoice End -->


