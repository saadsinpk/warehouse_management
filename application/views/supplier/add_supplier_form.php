<!-- Add new supplier start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_supplier') ?></h1>
            <small><?php echo display('add_new_supplier') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('supplier') ?></a></li>
                <li class="active"><?php echo display('add_supplier') ?></li>
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

        <!-- New supplier -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if($this->permission->check_label('manage_supplier')->read()->access()){ ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csupplier/manage_supplier'); ?>')" class="btn btn-info"><?php echo display('manage_supplier'); ?></a>
                    <?php }
                    if($this->permission->check_label('supplier_ledger')->read()->access()){ 
                    ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csupplier/supplier_ledger_report'); ?>')" class="btn btn-success"><?php echo display('supplier_ledger'); ?></a>
                    <?php }
                    if($this->permission->check_label('supplier_payment_ledger')->read()->access()){
                    ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csupplier/supplier_payment'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('supplier_payment'); ?></a>
                    <?php } 
                    if($this->permission->check_label('supplier_sales_details')->read()->access()){ 
                    ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csupplier/supplier_sales_details_all'); ?>')" class="btn btn-warning"><?php echo display('supplier_sales_details'); ?></a>
                    <?php } ?>
                </div>
                </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_supplier'); ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Csupplier/insert_supplier', array('id' => 'insert_supplier')) ?>
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="supplier_name" class="col-sm-3 col-form-label text-right"><?php echo display('supplier_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="supplier_name" id="supplier_name" type="text" placeholder="<?php echo display('supplier_name') ?>"  required="" tabindex="1" onkeyup="special_character_remove(this.value, 'supplier_name')">
                            </div>
                        </div>
                      <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label text-right"><?php echo display('supplier_mobile') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="mobile" id="mobile" type="text" placeholder="<?php echo display('supplier_mobile') ?>" required="" min="0" tabindex="2" onkeyup="onlynumber_allow(this.value,'mobile')">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label text-right"><?php echo display('supplier_address') ?></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="<?php echo display('supplier_address') ?>" tabindex="3"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label text-right"><?php echo display('supplier_details') ?></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" rows="3" placeholder="<?php echo display('supplier_details') ?>" tabindex="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="previous_balance" class="col-sm-3 col-form-label text-right"><?php echo display('previous_balance'); ?></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="previous_balance" id="previous_balance" placeholder="Previous Balance" tabindex="5" type="number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-supplier" class="btn custom_btn custom_fontcolor btn-large" name="add-supplier" value="<?php echo display('save') ?>"  tabindex="6"/>
                                <input type="submit" value="<?php echo display('save_and_add_another') ?>" name="add-supplier-another" class="btn btn-large btn-success" id="add-supplier-another" tabindex="7">
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add new supplier end -->



