<!-- Bank List Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('bank_list') ?></h1>
            <small><?php echo display('bank_list') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('settings') ?></a></li>
                <li class="active"><?php echo display('bank_list') ?></li>
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

        <!-- Bank List -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('add_new_bank')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csettings/index'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_new_bank'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('bank_transection')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csettings/bank_transaction'); ?>')" class="btn btn-info"><?php echo display('bank_transection'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('bank_list') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('bank_name') ?></th>
                                        <th><?php echo display('ac_name') ?></th>
                                        <th><?php echo display('ac_number') ?></th>
                                        <th><?php echo display('branch') ?></th>
                                        <th><?php echo display('signature_pic') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($bank_list) {
                                        ?>
                                        {bank_list}
                                        <tr>
                                            <td>{sl}</td>
                                            <td><a href="<?php echo base_url("Csettings/bank_ledger/{bank_id}"); ?>" >{bank_name}</a></td>
                                            <td>{ac_name}</td>
                                            <td>{ac_number}</td>
                                            <td>{branch}</td>
                                            <td>
                                                <img src="{signature_pic}" class="img img-responsive" height="80" width="100"></td>
                                            <td class="text-center">
                                                <?php
                                                echo form_open();
                                                if ($this->permission->check_label('bank_list')->update()->access()) {
                                                    ?>
                                                    <a href="<?php echo base_url() . 'Csettings/edit_bank/{bank_id}'; ?>" class="btn custom_btn custom_fontcolor btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <?php
                                                }
                                                if ($this->permission->check_label('bank_list')->read()->access()) {
                                                    ?>
                                                    <a href="<?php echo base_url("Csettings/bank_ledger/{bank_id}"); ?>" class="btn btn-info btn-sm" ><i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>
                                                    <?php
                                                }
                                                echo form_close();
                                                ?>
                                            </td>
                                        </tr>
                                        {/bank_list}
                                        <?php
                                    }
                                    ?>
                                </tbody>
                                <?php if (empty($bank_list)) { ?>
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
<!-- Bank List End -->

