<!-- Manage Category Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('hrm') ?></h1>
            <small><?php echo display('manage_designation') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('hrm') ?></a></li>
                <li class="active"><?php echo display('manage_designation') ?></li>
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
                <div class="m-b-10" style="float: right;">
                    <?php if ($this->permission->check_label('add_employee')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Chrm/add_employee'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_employee'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('manage_employee')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Chrm/manage_employee'); ?>')" class="btn btn-success"><?php echo display('manage_employee'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">         
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo $title ?> </h4>
                        </div>
                    </div>

                    <div class="panel-body">
                        <?= form_open('Chrm/create_designation') ?>
                        <div class="form-group row">
                            <div for="designation" class="col-sm-3 col-form-div text-right"><?php echo display('designation') ?> <span class="text-danger">* </span></div>
                            <div class="col-sm-9">
                                <input name="designation" class="form-control" type="text" placeholder="<?php echo display('designation') ?>" id="designation" value="<?php echo (!empty($designation_data->designation) ? $designation_data->designation : '') ?>" onkeyup="special_character_remove(this.value, 'designation')" required> 
                                <input type="hidden" name="id" value="<?php echo (!empty($designation_data->id) ? $designation_data->id : '') ?>">

                            </div>

                        </div>
                        <div class="form-group row">
                            <div for="details" class="col-sm-3 col-form-div text-right"><?php echo display('details') ?></div>
                            <div class="col-sm-9">
                                <textarea name="details" class="form-control" placeholder="<?php echo display('details') ?>" id="details"><?php echo (!empty($designation_data->details) ? $designation_data->details : '') ?></textarea> 
                            </div>
                        </div> 

                        <div class="form-group text-right">
                            <button type="reset" class="btn btn-danger w-md m-b-5"><?php echo display('reset') ?></button>
                            <button type="submit" class="btn custom_btn custom_fontcolor w-md m-b-5"><?php echo display('save') ?></button>
                        </div>
                        <?php echo form_close() ?>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_designation') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('sl') ?></th>
                                        <th class="text-center"><?php echo display('designation') ?></th>
                                        <th class="text-center"><?php echo display('details') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($designation_list) {
                                        ?>

                                        <?php
                                        $sl = 1;
                                        foreach ($designation_list as $designations) {
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $sl; ?></td>
                                                <td class="text-center"><?php echo $designations['designation']; ?></td>
                                                <td class="text-center"><?php echo $designations['details']; ?></td>
                                                <td>
                                        <center>
                                            <?php echo form_open() ?>
                                            <?php if ($this->permission->check_label('designation')->update()->access()) { ?>                              
                                                <a href="<?php echo base_url() . 'Chrm/designation_update_form/' . $designations['id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <?php if ($this->permission->check_label('designation')->delete()->access()) { ?>                                
                                                <a href="javascript:void(0)" class="btn btn-danger btn-sm" name="<?php echo $designations['id'] ?>" onclick="deleteDesignation(<?php echo $designations['id'] ?>)" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <?php echo form_close() ?>
                                        </center>
                                        </td>
                                        </tr>

                                        <?php
                                        $sl++;
                                    }
                                }
                                ?>
                                </tbody>
                                <?php if (empty($designation_list)) { ?>
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
<!-- Manage Category End -->
<script src="<?php echo base_url() ?>assets/js/hr.js" type="text/javascript"></script>

<!-- Delete Category ajax code -->



