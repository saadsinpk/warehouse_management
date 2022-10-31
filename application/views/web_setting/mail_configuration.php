<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-toggle.css">
<script src="<?php echo base_url() ?>assets/js/bootstrap-toggle.min.js" type="text/javascript"></script>
<!-- Add new customer start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('sms_configuration') ?></h1>
            <small><?php echo display('sms_configuration') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('web_settings') ?></a></li>
                <li class="active"><?php echo display('sms_configuration') ?></li>
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

        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('sms_configuration') ?> </h4>
                        </div>
                    </div>
                    <?php //dd($mail_setting); ?>
                    <div class="panel-body">
                        <form action="<?php echo base_url('Cweb_setting/mail_config_update'); ?>" class="form-vertical" id="insert_customer" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <div class="form-group row">
                                <label for="protocol" class="col-sm-3 col-form-label text-right"><?php echo display('protocol'); ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="protocol" id="protocol" type="text" value="<?php echo $mail_setting[0]->protocol; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="smtp_host" class="col-sm-3 col-form-label  text-right"><?php echo display('smtp_host'); ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="smtp_host" id="smtp_host" type="text" value="<?php echo $mail_setting[0]->smtp_host; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="smtp_port" class="col-sm-3 col-form-label  text-right"><?php echo display('smtp_port'); ?><i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="smtp_port" id="smtp_port" type="text" value="<?php echo $mail_setting[0]->smtp_port; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="smtp_user" class="col-sm-3 col-form-label text-right"><?php echo display('sender_mail'); ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="smtp_user" id="smtp_user" type="email" value="<?php echo $mail_setting[0]->smtp_user; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="smtp_pass" class="col-sm-3 col-form-label  text-right"><?php echo display('password'); ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="smtp_pass" id="smtp_pass" type="password" value="<?php echo $mail_setting[0]->smtp_pass; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mailtype" class="col-sm-3 col-form-label  text-right"><?php echo display('mail_type'); ?> <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="mailtype" id="mailtype" data-placeholder="<?php echo display('select_one'); ?>">
                                        <option value=""><?php echo display('select_one'); ?></option>
                                        <option value="html" <?php
                                        if ($mail_setting[0]->mailtype == 'html') {
                                            echo 'selected';
                                        }
                                        ?>><?php echo display('html'); ?></option>
                                        <option value="text" <?php
                                        if ($mail_setting[0]->mailtype == 'text') {
                                            echo 'selected';
                                        }
                                        ?>><?php echo display('text'); ?></option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="invoice" class="col-sm-3 col-form-label text-right"><?php echo display('invoice'); ?> <i class="text-danger"></i></label>
                                <div class="switch col-sm-6">
                                    <input type="radio" name="isinvoice" id="isinvoice1" value="1"  <?php if ($mail_setting[0]->is_invoice == '1') echo 'checked="checked"'; ?>  <?php
                                    if (empty($mail_setting[0]->is_invoice == '1')) {
                                        echo 'checked="checked"';
                                    } else {
                                        echo ' ';
                                    }
                                    ?>/>
                                    <label for="isinvoice1" id="yes">
                                        <strong><?php echo 'Yes'; ?></strong></label>
                                    <input type="radio" name="isinvoice" id="isinvoice0" value="0" <?php if ($mail_setting[0]->is_invoice == '0') echo 'checked="checked"'; ?>/>
                                    <label for="isinvoice0" id="no">
                                        <strong><?php echo 'No'; ?></strong></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="customer_receive" class="col-sm-3 col-form-label text-right"><?php echo display('customer_receive'); ?> <i class="text-danger"></i></label>
                                <div class="switch col-sm-6">
                                    <input type="radio" name="isreceive" id="isreceive1" value="1"  <?php if ($mail_setting[0]->is_receive == '1') echo 'checked="checked"'; ?>  <?php
                                           if (empty($mail_setting[0]->is_receive == '1')) {
                                               echo 'checked="checked"';
                                           } else {
                                               echo ' ';
                                           }
                                    ?>/>
                                    <label for="isreceive1" id="yes">
                                        <strong><?php echo 'Yes'; ?></strong></label>
                                    <input type="radio" name="isreceive" id="isreceive0" value="0" <?php if ($mail_setting[0]->is_receive == '0') echo 'checked="checked"'; ?>/>
                                    <label for="isreceive0" id="no">
                                        <strong><?php echo 'No'; ?></strong></label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-6 text-right">
                                    <input type="submit" class="btn btn-success btn-large" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add new customer end -->



