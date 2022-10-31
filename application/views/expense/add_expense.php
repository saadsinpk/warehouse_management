<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('expense') ?></h1>
            <small><?php echo display('add_expense') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('expense') ?></a></li>
                <li class="active"><?php echo display('add_expense') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <?php
        $message = $this->session->userdata('message');
        if (isset($message)) {
            ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('success');
        }
        $error_message = $this->session->userdata('error');
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
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10" style="float: right;">
                    <?php if ($this->permission->check_label('manage_expense')->read()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CExpense/manage_expense'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('manage_expense'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>
                                <?php echo display('add_expense') ?>   
                            </h4>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <form action="<?php echo base_url('CExpense/create_expense/'); ?>" method="post" >
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label for="date" class="col-sm-3 col-form-label text-right"><?php echo display('date') ?>
                                            <i class="text-danger">*</i>
                                        </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="date" id="date" class="form-control datepicker" value="<?php echo date('Y-m-d'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12" id="payment_from_1">
                                    <div class="form-group row">
                                        <label for="expense_type" class="col-sm-3 col-form-label text-right"><?php echo display('expense_item');
                                ?> <i class="text-danger">*</i></label>
                                        <div class="col-sm-8">
                                            <?php // dd($get_expenseitem); ?>
                                            <select name="expense_type" class="form-control" id="expense_type" required="" data-placeholder="-- select one --">
                                                <option value=""><?php echo display('select_one'); ?></option>
                                                <?php foreach ($get_expenseitem as $item) { ?>
                                                    <option value="<?php echo $item->item_id ?>"><?php echo $item->item_name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                               
                                <div class="col-sm-12" id="payment_from_1">
                                    <div class="form-group row">
                                        <label for="amount" class="col-sm-3 col-form-label text-right"><?php echo display('amount') ?><i class="text-danger">*</i></label>
                                        <div class="col-sm-8">
                                            <input type="number" name="amount" id="amount" class="form-control"  required="">
                                        </div>
                                    </div> 
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" id="add_receive" class="btn custom_btn custom_fontcolor btn-large" name="save" value="<?php echo display('save') ?>" tabindex="9"/>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url() ?>assets/js/expense.js" type="text/javascript"></script>
