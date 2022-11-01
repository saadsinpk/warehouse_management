<!-- Product Purchase js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_purchase.js.php"></script>
<!-- Supplier Js -->
<script src="<?php echo base_url(); ?>my-assets/js/admin_js/json/supplier.js.php"></script>
<!-- Purchase js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/purchase.js" type="text/javascript"></script>
<!-- Customer js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/customer.js.php"></script>
<!-- Product invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_invoice.js.php"></script>
<!-- Invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/pos_invoice.js" type="text/javascript"></script>
<!-- Add New Purchase Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_purchase') ?></h1>
            <small><?php echo display('add_new_purchase') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('purchase') ?></a></li>
                <li class="active"><?php echo display('add_purchase') ?></li>
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
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
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
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('manage_purchase')->read()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpurchase/manage_purchase'); ?>')" class="btn custom_btn custom_fontcolor m-b-10"><?php echo display('manage_purchase'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_purchase') ?></h4>
                        </div>
                    </div>

                    <div class="panel-body">
                        <?php echo form_open_multipart('Cpurchase/insert_purchase', array('class' => 'form-vertical', 'id' => 'insert_purchase', 'name' => 'insert_purchase')) ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="add_item" class="col-sm-4 col-form-label"><?php echo display('barcode') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="product_name" class="form-control" placeholder='<?php echo display('barcode_qrcode_scan_here') ?>' id="add_item" autocomplete='off'>
                                        <input type="hidden" id="product_value" name="">
                                        <input type="hidden" id="supplier_id" name="supplier_id">
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label"><?php echo display('purchase_date') ?>
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-8">
                                        <?php $date = date('Y-m-d'); ?>
                                        <input type="text" tabindex="2" class="form-control datepicker" name="purchase_date" value="<?php echo $date; ?>" id="date" required tabindex='2' />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="invoice_no" class="col-sm-3 col-form-label"><?php echo display('purchase_no') ?>
                                        <i class="text-danger">*</i>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" tabindex="3" class="form-control" name="chalan_no" placeholder="<?php echo display('purchase_no') ?>" id="invoice_no" required tabindex='3' />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="adress" class="col-sm-4 col-form-label"><?php echo display('details') ?>
                                    </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" tabindex="4" id="adress" name="purchase_details" placeholder=" <?php echo display('details') ?>" rows="1"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive m-t-10">
                            <table class="table table-bordered table-hover" id="addinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('item_information') ?><i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('stock_ctn') ?></th>
                                        <th class="text-center"><?php echo display('cartoon') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('item_cartoon') ?> </th>
                                        <th class="text-center"><?php echo display('quantity') ?> </th>
                                        <th class="text-center"><?php echo display('price') . "/" . display('item') ?> </th>
                                        <th class="text-center"><?php echo display('rate') ?><i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('total') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                    <tr></tr>
                                </tbody>

                                <tfoot>

                                    <tr style="width: 85px">
                                        <td style="text-align:right;" colspan="7"><b><?php echo display('total_discount') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="total_discount_ammount" class="form-control text-right" name="total_discount" tabindex="-1" value="0.00" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:right;" colspan="7"><b><?php echo display('grand_total') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url(); ?>" />
                                            <input type="text" id="grandTotal" tabindex="-1" class="form-control text-right" name="grand_total_price" value="0.00" min="0" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="button" id="add-invoice-item" class="btn btn-info text-center" name="add-invoice-item" onClick="addInputField('addinvoiceItem');" value="<?php echo display('add_new_item') ?>" />
                                        </td>
                                        <td style="text-align:right;" colspan="6"><b><?php echo display('paid_amount') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="paidAmount" onkeyup="invoice_paidamount();" tabindex="1" class="form-control text-right" name="paid_amount" value="" required />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="submit" id="add-invoice" class="btn custom_btn custom_fontcolor" name="add_pos_invoice" value="<?php echo display('submit') ?>" style="margin-bottom: 10px;" />
                                            <input type="button" id="" class="btn btn-warning" name="" value="<?php echo display('full_paid') ?>" tabindex="12" onClick="full_paid();" style="margin-bottom: 10px;" />
                                        </td>
                                        <td style="text-align:right;" colspan="6"><b><?php echo display('due') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="dueAmmount" class="form-control text-right" name="due_amount" value="0.00" readonly="readonly" />
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="submit" id="add-purchase" class="btn custom_btn custom_fontcolor btn-large" name="add-purchase" value="<?php echo display('submit') ?>" tabindex="10" />
                                <input type="submit" value="<?php echo display('submit_and_add_another') ?>" name="add-purchase-another" class="btn btn-large btn-success" id="add-purchase-another" tabindex="11">
                            </div>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Purchase Report End -->
<script src="<?php echo base_url() ?>assets/js/purchase.js" type="text/javascript"></script>
<script type="text/javascript">
    //Onload filed select
    window.onload = function() {
        var text_input = document.getElementById('add_item');
        text_input.focus();
        text_input.select();
        $("#add_item").focus();
        $('body').addClass("sidebar-mini sidebar-collapse");
    }

    var barcodeScannerTimer;
    var barcodeString = '';
    //Invoice js
    $('#add_item').keydown(function(e) {
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
                data: {
                    product_id: product_id
                },
                success: function(data) {
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
                error: function() {
                    alert('Request Failed, Please check your code and try again!');
                }
            });

            $.ajax({
                type: "POST",
                url: '<?php echo base_url('Cpurchase/get_supplier_by_product') ?>',
                data: {
                    product_id: product_id
                },
                success: function(dataSupplier) {
                    alert(data);
                },
            });
        }
    });

    $('#add_item_m').keydown(function(e) {
        if (e.keyCode == 13) {
            //            alert("K"); return false;
            var product_id = $(this).val();
            var exist = $("#SchoolHiddenId_" + product_id).val();
            var qty = $("#total_qntt_" + product_id).val();
            var add_qty = parseInt(qty) + 1;
            if (product_id == exist) {
                $("#total_qntt_" + product_id).val(add_qty);
                quantity_calculate(product_id);
                claculateItemPrice(product_id);
                calculateSum();
                invoice_paidamount();
                document.getElementById('add_item_m').value = '';
                document.getElementById('add_item_m').focus();
            } else {
                $.ajax({
                    type: "post",
                    async: false,
                    url: '<?php echo base_url('Cpurchase/get_table') ?>',
                    data: {
                        product_id: product_id
                    },
                    success: function(data) {
                        //                        alert(product_id);                        return false;
                        if (data == false) {
                            alert('This Product Not Found !');
                            document.getElementById('add_item_m').value = '';
                            document.getElementById('add_item_m').focus();
                            quantity_calculate(product_id);
                claculateItemPrice(product_id);
                            calculateSum();
                            invoice_paidamount();
                        } else {
                            $("#hidden_tr").css("display", "none");
                            document.getElementById('add_item_m').value = '';
                            document.getElementById('add_item_m').focus();
                            $('#addinvoice tbody').append(data);
                            quantity_calculate(product_id);
                claculateItemPrice(product_id);
                            calculateSum();
                            invoice_paidamount();
                        }
                    },
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
            }
        }
    });

    // capture barcode scanner input
    $('#add_item').on('keypress', function(e) {
        barcodeString = barcodeString + String.fromCharCode(e.charCode);
        clearTimeout(barcodeScannerTimer);
        barcodeScannerTimer = setTimeout(function() {
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
                claculateItemPrice(product_id);
                calculateSum();
                invoice_paidamount();
                document.getElementById('add_item').value = '';
                document.getElementById('add_item').focus();
            } else {
                $.ajax({
                    type: "post",
                    async: false,
                    url: '<?php echo base_url('Cpurchase/get_table') ?>',
                    data: {
                        product_id: product_id
                    },
                    success: function(data) {
                        // console.log(data);
                        if (data == false) {
                            alert('This Product Not Found !');
                            document.getElementById('add_item').value = '';
                            document.getElementById('add_item').focus();
                            quantity_calculate(product_id);
                claculateItemPrice(product_id);
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
                    error: function() {
                        alert('Request Failed, Please check your code and try again!');
                    }
                });
                $.ajax({
                    type: "POST",
                    url: '<?php echo base_url('Cpurchase/get_supplier_by_product') ?>',
                    data: {
                        product_id: product_id
                    },
                    success: function(dataSupplier) {
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

    function addInputField(t) {
        if (count == limits) alert("You have reached the limit of adding " + count + " inputs");
        else {
            var a = "product_name" + count,
                tabindex = count * 5,
                e = document.createElement("tr");
            tab1 = tabindex + 1;
            tab2 = tabindex + 2;
            tab3 = tabindex + 3;
            tab4 = tabindex + 4;
            tab5 = tabindex + 5;
            tab6 = tabindex + 6;
            tab7 = tabindex + 7;
            tab8 = tabindex + 8;
            tab9 = tabindex + 9;

            e.innerHTML = "<td><input type='text' name='product_name[]' class='form-control productSelectionXZ' placeholder='Product Name' id='" + a + "' required tabindex='" + tab1 + "'><input type='hidden' class='autocomplete_hidden_value product_id_" + count + "' name='product_id[]' id='SchoolHiddenId'/></td> <td><input type='text' name='available_quantity[]' id='' class='form-control text-right available_quantity_" + count + "' value='' readonly='readonly' /></td><td><input type='number'  placeholder='0.00' name='cartoon[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' class='quantity_" + count + " form-control text-right' value='' min='1' tabindex='" + tab2 + "'/></td><td><input type='text' class='ctnqntt_" + count + " form-control text-right' readonly='readonly' /></td><td> <input type='text' placeholder='0.00' name='product_quantity[]' class='total_qntt_" + count + " form-control text-right' readonly='readonly' /></td><td><input type='text' name='product_rate[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' value='' id='price_item_" + count + "' class='price_item" + count + " form-control text-right' required tabindex='" + tab3 + "'/></td><td><input type='text' placeholder='0.00' name='discount[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='discount_" + count + "' class='form-control text-right' placeholder='Discount' value='' min='0' tabindex='" + tab4 + "'/></td><td class='text-right'><input class='total_price form-control text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='' readonly='readonly'/></td><td><input type='hidden' id='total_tax_" + count + "' class='total_tax_" + count + "' /><input type='hidden' id='all_tax_" + count + "' class=' total_tax'/><input type='hidden' id='total_discount_" + count + "' class='total_tax_" + count + "' /><input type='hidden' id='all_discount_" + count + "' class='total_discount'/><button style='text-align: right;' class='btn btn-danger' type='button' tabindex='" + tab5 + "' value='Delete' onclick='deleteRow(this)'>Delete</button></td>",

                document.getElementById(t).appendChild(e),
                document.getElementById(a).focus(),
                document.getElementById("add-invoice-item").setAttribute("tabindex", tab6);
            document.getElementById("paidAmount").setAttribute("tabindex", tab7);
            document.getElementById("full_paid_tab").setAttribute("tabindex", tab8);
            document.getElementById("add-invoice").setAttribute("tabindex", tab9);
            count++

        }
    }

    function invoice_paidamount() {
        var t = $("#grandTotal").val(),
            a = $("#paidAmount").val(),
            e = t - a;
        $("#dueAmmount").val(e)
    }
</script>