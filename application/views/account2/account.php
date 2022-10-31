<!-- Manage Product Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('manage_account') ?></h1>
            <small><?php echo display('manage_account') ?></small>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('') ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="<?php echo base_url('Account_Controller') ?>">Account</a></li>
                <li class="active"><?php echo display('manage_account') ?></li>
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

        <div class="row">
            <div class="col-sm-12">
                <div class="column m-b-10 float_right">
                    <?php if ($this->permission->check_label('create_account')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Account_Controller') ?>')" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i><?php echo display('create_account') ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('payment')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpayment') ?>')" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('payment') ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('receipt')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpayment/receipt_transaction') ?>')" class="btn custom_btn custom_fontcolor m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('receipt') ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('manage_transaction')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpayment/manage_payment') ?>')" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_transaction') ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('closing')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpayment/closing') ?>')" class="btn btn-danger m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('closing') ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>


        <!-- Manage Product report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_account') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('account_name') ?></th>
                                        <th><?php echo display('date') ?></th>
                                        <th class="text-center w-130px"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($account_list) {
                                        ?>
                                        <?php $sl = 1; ?>
                                        <?php foreach ($account_list as $row) { ?>
                                            <tr>
                                                <td><?php echo $sl; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url() . 'Account_Controller/date_summary/' . $row['parent_id']; ?>"> 
                                                        <?php echo $row['account_name']; ?>
                                                    </a> 							
                                                </td>
                                                <td><?php echo $row['created_at'] ?></td>
                                                <td>
                                        <center>
                                            <a href="<?php echo base_url() . 'Account_Controller/account_update_form/' . $row["account_id"]; ?>" class="btn custom_btn custom_fontcolor btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <a href="javascript:void(0)" class="deleteAccount btn btn-danger btn-sm" onclick="deleteaccount(<?php echo $row['account_id']; ?>)" name="<?php echo $row['account_id']; ?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>


                                        </center>
                                        </td>
                                        </tr>
                                        <?php $sl++; ?>
                                    <?php } ?>
                                    <?php
                                }
                                ?>
                                </tbody>
                                   <?php if(empty($account_list)){ ?>
                                <tfoot>
                                    <tr>
                                        <th class="text-center text-danger" colspan="9"><?php echo display('data_not_found'); ?></th>
                                    </tr>
                                </tfoot>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?php echo base_url() ?>assets/js/accounts.js" type="text/javascript"></script>
<!-- Manage Product End -->

