<!-- Manage Category Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('hrm') ?></h1>
            <small><?php echo display('manage_employee') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('hrm') ?></a></li>
                <li class="active"><?php echo display('manage_employee') ?></li>
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

        <!-- Manage Category -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('designation')->read()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Chrm/manage_designation'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('designation'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('add_employee')->create()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Chrm/add_employee'); ?>')" class="btn btn-success"><?php echo display('add_employee'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_employee') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample3" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('sl') ?></th>
                                        <th class="text-left"><?php echo display('name') ?></th>
                                        <th class="text-left"><?php echo display('designation') ?></th>
                                        <th class="text-left"><?php echo display('phone') ?></th>
                                        <th class="text-left"><?php echo display('email') ?></th>
                                        <th class="text-center"><?php echo display('picture') ?></th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($employee_list) {
                                        ?>

                                        <?php
                                        $sl = 1;
                                        foreach ($employee_list as $employees) {
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $sl; ?></td>
                                                <td class="text-left">
                                                    <a href="<?php echo base_url('Chrm/single_employee_ledger/' . $employees['employee_id']); ?>"  data-toggle="tooltip" data-placement="top" title="<?php echo $employees['first_name'] . ' ' . $employees['last_name']; ?>">
                                                        <?php echo $employees['first_name'] . ' ' . $employees['last_name']; ?>
                                                    </a>
                                                </td>
                                                <td class="text-left"><?php echo $employees['designation']; ?></td>
                                                <td class="text-left"><?php echo $employees['phone']; ?></td>
                                                <td class="text-left"><?php echo $employees['email']; ?></td>
                                                <td class="text-center"><img src="<?php echo base_url() . $employees['image']; ?>" height="80px" width="90px"></td>
                                                <td>
                                        <center>
                                            <?php echo form_open() ?>
                                            <?php if ($this->permission->check_label('manage_employee')->update()->access()) { ?>                          
                                                <a href="<?php echo base_url() . 'Chrm/employee_update_form/' . $employees['employee_id']; ?>" class="btn custom_btn custom_fontcolor btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <?php if ($this->permission->check_label('manage_employee')->read()->access()) { ?>                                

                                                <a href="<?php echo base_url('Chrm/employee_details/' . $employees['employee_id']); ?>" class="btn btn-info btn-sm"><i class="fa fa-user"></i></a> 
                                                <?php
                                            }
                                            if ($this->permission->check_label('manage_employee')->delete()->access()) {
                                                ?>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="deleteEmployee('<?php echo $employees['employee_id'] ?>')" name="<?php echo $employees['employee_id'] ?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <?php
                                            }
                                            echo form_close()
                                            ?>
                                        </center>
                                        </td>
                                        </tr>

                                        <?php
                                        $sl++;
                                    }
                                }
                                ?>
                                </tbody>
                                <?php if (empty($employee_list)) { ?>
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



