<!-- Account List Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('manage_loan') ?></h1>
            <small><?php echo display('manage_loan') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('personal_loan') ?></a></li>
                <li class="active"><?php echo display('manage_loan') ?></li>
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
        $CI = & get_instance();
        $CI->load->library('Occational');
        ?>

        <!-- Account List -->
        <div class="row">
            <div class="col-sm-12">                
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('add_person')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csettings/add_person'); ?>')" class="btn btn-success"><?php echo display('add_person'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('manage_person')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csettings/manage_person'); ?>')" class="btn btn-info"><?php echo display('manage_person'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('add_loan')->create()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csettings/add_loan'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_loan'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('add_payment')->create()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Csettings/add_payment'); ?>')" class="btn btn-warning"><?php echo display('add_payment'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_loan') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('name') ?></th>
                                        <th class="text-center"><?php echo display('date') ?></th>
                                        <th class='text-right'><?php echo display('debit') ?></th>
                                        <th class='text-right'><?php echo display('credit') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($person_list) {
                                        foreach ($person_list as $person) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo base_url('Csettings/person_loan_deails/' . $person['person_id']); ?>">
                                                        <?php echo $person['person_name']; ?>  
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $CI->occational->dateConvertMyformat($person['date']); ?>
                                                </td>
                                                <td class='text-right'><?php echo $person['debit']; ?></td>
                                                <td class='text-right'><?php echo $person['credit']; ?></td>
                                                <td>
                                        <center>
                                            <?php
                                            echo form_open();
                                            if ($this->permission->check_label('manage_loan')->read()->access()) {
                                                ?>
                                                <a href="<?php echo base_url('Csettings/loan_edit/' . $person['per_loan_id']); ?>" class="btn custom_btn custom_fontcolor btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <?php
                                            }
                                            echo form_close();
                                            ?>	
                                        </center>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>
                                </tbody>
                                <?php if (empty($person_list)) { ?>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center text-danger" colspan="9"><?php echo display('data_not_found'); ?></th>
                                        </tr>
                                    </tfoot>
                                <?php } ?>
                            </table>
                        </div>
                        <div class="text-right"><?php echo $links ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Account List End -->

