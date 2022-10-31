<!-- Add new expense start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('expense') ?></h1>
            <small><?php echo display('expense_statement') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('expense') ?></a></li>
                <li class="active"><?php echo display('expense_statement') ?></li>
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


        <!-- New expense -->
        <div class="row">
            <div class="col-sm-12">              
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('add_expense')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CExpense/add_expense'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_expense'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('manage_expense')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CExpense/manage_expense'); ?>')" class="btn btn-info"><?php echo display('manage_expense'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">              
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('expense_statement') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open('#', array('class' => 'form-inline', 'method' => 'get')) ?>
                        <?php
                        $today = date('Y-m-d');
                        ?>
                        <div class="form-group">
                            <label for="item_id" class="m-4"><?php echo display('expense_item') ?><i class="text-danger"></i></label>
                            <select class="form-control" name="item_id" id="item_id">
                                <option value="">Select One</option>
                                <?php foreach ($get_expenseitem as $item) { ?>
                                    <option value="<?php echo $item->item_id ?>"><?php echo $item->item_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="m-4" for="from_date"><?php echo display('start_date') ?></label>
                            <input type="text" name="from_date" class="form-control datepicker" id="from_date" placeholder="<?php echo display('start_date') ?>" value="<?php //echo (!empty($from_date) ? $from_date : $today)             ?>">
                        </div> 

                        <div class="form-group">
                            <label class="m-4" for="end_date"><?php echo display('end_date') ?></label>
                            <input type="text" name="end_date" class="form-control datepicker" id="end_date" placeholder="<?php echo display('end_date') ?>" value="<?php //echo (!empty($to_date) ? $to_date : $today)             ?>">
                        </div>  

                        <button type="button" class="btn custom_btn custom_fontcolor" onclick="statementResults()"><?php echo display('search') ?></button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="results"></div>
            </div>
        </div>

    </section>
</div>
<script src="<?php echo base_url() ?>assets/js/expense.js" type="text/javascript"></script>
<!-- Add new expense statement end -->

