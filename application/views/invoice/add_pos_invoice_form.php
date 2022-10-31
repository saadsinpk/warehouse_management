<!-- Customer js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/customer.js.php" ></script>
<!-- Product invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/product_invoice.js.php" ></script>
<!-- Invoice js -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/pos_invoice.js" type="text/javascript"></script>
<!-- Add new invoice start -->
<style>
    #bank_info_hide
    {
        display:none;
    }
    #payment_from_2
    {
        display:none;
    }
</style>
<!-- Customer type change by javascript start -->
<script type="text/javascript">
    $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
    function bank_info_show(payment_type) {
        if (payment_type.value == "1") {
            document.getElementById("bank_info_hide").style.display = "none";
        } else {
            document.getElementById("bank_info_hide").style.display = "block";
        }
    }
    function active_customer(status) {
        if (status == "payment_from_2") {
            document.getElementById("payment_from_2").style.display = "none";
            document.getElementById("payment_from_1").style.display = "block";
            document.getElementById("myRadioButton_2").checked = false;
            document.getElementById("myRadioButton_1").checked = true;
        } else {
            document.getElementById("payment_from_1").style.display = "none";
            document.getElementById("payment_from_2").style.display = "block";
            document.getElementById("myRadioButton_2").checked = false;
            document.getElementById("myRadioButton_1").checked = true;
        }
    }
</script>
<!-- Customer type change by javascript end -->
<!-- Add New Invoice Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('new_pos_invoice') ?></h1>
            <small><?php echo display('add_new_pos_invoice') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('Invoice') ?></a></li>
                <li class="active"><?php echo display('new_pos_invoice') ?></li>
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

        <!-- POS Invoice report -->
        <div class="row">
            <div class="col-sm-12">                
                <div class="m-b-10" style="float: right;">
                    <?php if ($this->permission->check_label('manage_invoice')->read()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cinvoice/manage_invoice'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('manage_invoice'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('new_invoice')->read()->access()) {
                        ?>
                        <a style="display: none;" href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cinvoice/'); ?>')" class="btn btn-success"><?php echo display('new_invoice'); ?></a>
                    <?php } ?>
                </div>          
            </div>
            <div class="col-sm-12">      
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('new_pos_invoice') ?></h4>
                        </div>
                    </div>

                    <div class="panel-body">
                        <!--                        <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <label for="add_item" class="col-sm-4 col-form-label"><?php echo display('barcode') ?> <i class="text-danger">*</i></label>
                                                            <div class="col-sm-8">
                                                                <input type="text" name="product_name" class="form-control" placeholder='<?php echo display('barcode_qrcode_scan_here') ?>' id="add_item" autocomplete='off'>
                                                                <input type="hidden" id="product_value" name="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->

                        <?php echo form_open_multipart('Cinvoice/insert_invoice', array('class' => 'form-vertical', 'id' => '', 'name' => 'insert_pos_invoice')) ?>
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
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="invoice_date" class="col-sm-4 col-form-label"><?php echo display('date') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <?php
                                        date_default_timezone_set("Asia/Dhaka");
                                        $date = date('Y-m-d');
                                        ?>
                                        <input class="form-control datepicker" type="text" size="50" id="invoice_date" name="invoice_date" required value="<?php echo $date; ?>" required/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($_SESSION['user_role']!=15){
                        ?>
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
                                            <option value="<?php echo $locations['location_id']?>"><?php echo $locations['location_name']?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                        if($_SESSION['user_role']==15){
                        ?>
                        <input type="hidden" id="location_id" name="store_id" value="<?php echo $_SESSION['store_id']?>">
                        <?php
                        }
                        ?>
                        <div class="row">
                            <div class="col-sm-8" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="customer_name1" class="col-sm-3 col-form-label"><?php echo display('customer_name') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input type="text" size="100"  name="customer_name" class="customerSelection form-control" placeholder='<?php echo display('customer_name') ?>' id="customer_name1" value="{customer_name}" />

                                        <input id="SchoolHiddenId" class="customer_hidden_value" type="hidden" name="customer_id" value="{customer_id}">
                                        <?php
                                        if (empty($customer_name)) {
                                            ?>
                                            <small id="emailHelp" class="text-danger"><?php echo display('please_add_walking_customer_for_default_customer') ?></small>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div  class="col-sm-3">
                                        <input id="myRadioButton_1" type="button" onClick="active_customer('payment_from_1')" id="myRadioButton_1" class="btn custom_btn custom_fontcolor checkbox_account" name="customer_confirm" checked="checked" value="<?php echo display('new_customer') ?> ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8" id="payment_from_2">
                                <div class="form-group row">
                                    <label for="customer_name_others" class="col-sm-3 col-form-label"><?php echo display('customer_name') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-6">
                                        <input  autofill="off" type="text"  size="100" name="customer_name_others" placeholder='<?php echo display('customer_name') ?>' id="customer_name_others" class="form-control"/>
                                    </div>
                                    <div  class="col-sm-3">
                                        <input  onClick="active_customer('payment_from_2')" type="button" id="myRadioButton_2" class="btn custom_btn custom_fontcolor checkbox_account" name="customer_confirm_others" value="<?php echo display('old_customer') ?> ">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="customer_name_others_address" class="col-sm-3 col-form-label"><?php echo display('address') ?></label>
                                    <div class="col-sm-6">
                                        <input type="text"  size="100" name="customer_name_others_address" class=" form-control" placeholder='<?php echo display('address') ?>' id="customer_name_others_address" />
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="addinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('item_information') ?></th>
                                        <th class="text-center"><?php echo display('available_ctn') ?></th>
                                        <th class="text-center"><?php echo display('cartoon') ?></th>
                                        <th class="text-center"><?php echo display('item') ?></th>
                                        <th class="text-center"><?php echo display('quantity') ?></th>
                                        <th class="text-center"><?php echo display('rate') ?></th>
                                        <th class="text-center"><?php echo display('discount') ?></th>
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
                                            <input type="hidden" name="baseUrl" class="baseUrl" value="<?php echo base_url(); ?>"/>
                                            <input type="text" id="grandTotal" tabindex="-1" class="form-control text-right" name="grand_total_price" value="0.00" min="0" readonly="readonly" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="button" id="add-invoice-item" class="btn btn-info text-center" name="add-invoice-item"  onClick="addInputField('addinvoiceItem');" value="<?php echo display('add_new_item') ?>" />
                                        </td>
                                        <td style="text-align:right;" colspan="6"><b><?php echo display('paid_amount') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="paidAmount" onkeyup="invoice_paidamount();"  tabindex="1" class="form-control text-right" name="paid_amount" value="" required />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            <input type="submit" id="add-invoice" class="btn custom_btn custom_fontcolor" name="add_pos_invoice" value="<?php echo display('submit') ?>" style="margin-bottom: 10px;" />
                                            <input type="button" id="" class="btn btn-warning" name="" value="<?php echo display('full_paid') ?>" tabindex="12" onClick="full_paid();" style="margin-bottom: 10px;"/>
                                        </td>
                                        <td style="text-align:right;" colspan="6"><b><?php echo display('due') ?>:</b></td>
                                        <td class="text-right">
                                            <input type="text" id="dueAmmount" class="form-control text-right" name="due_amount" value="0.00" readonly="readonly"/>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- POS Invoice Report End -->

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
