<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('user_assign_role') ?></h1>
            <small><?php echo display('role_permission') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('role_permission') ?></a></li>
                <li class="active"><?php echo display('user_assign_role') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="">
            <?php
            $error = $this->session->flashdata('error');
            $success = $this->session->flashdata('success');
            if ($error != '') {
                echo $error;
            }
            if ($success != '') {
                echo $success;
            }
            ?>
        </div>

        <!-- New user -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('add_role')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CRole/role_permission/'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_role'); ?></a>
                    <?php } ?>
                    <?php if ($this->permission->check_label('role_list')->read()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CRole/role_permission/'); ?>')" class="btn btn-success"><?php echo display('role_list'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('user_assign_role') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url('CRole/assign_user_role_save'); ?>" id="moduleFrm" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="col-sm-8">
                                <div class="form-group row">
                                    <label for="user_id" class="col-sm-3 text-right"><?php echo display('user_name'); ?> <i class="text-danger"> *</i></label>
                                    <div class="col-sm-9">
                                        <?php // echo '<pre>';  print_r($user_list); ?>
                                        <select class="form-control select2" name="user_id" id="user_id" data-placeholder="-- select one --" onchange="userRole(this.value)" required>
                                            <option value=""><?php echo display('select_one'); ?></option>
                                            <?php foreach ($user_list as $user) { ?>
                                                <option value="<?php echo $user->user_id; ?>">
                                                    <?php echo $user->first_name ." " . $user->last_name . " -> (" . $user->username . " )"; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role_id" class="col-sm-3 text-right"><?php echo display('role_name'); ?> <i class="text-danger"> *</i></label>
                                    <div class="col-sm-9">
                                        <select class="selectpicker form-control role_id" id="role_id" name="role_id" onchange="userRoleName(this.value)" required>
                                            <?php foreach ($role_list as $val) { ?>
                                                <option value="<?= $val->id ?>"><?= ucwords($val->role_name); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row location_list" style="display:none;">
                                    <label for="store_id" class="col-sm-3 text-right"><?php echo display('store'); ?> <i class="text-danger"> *</i></label>
                                    <div class="col-sm-9">
                                        <select class="selectpicker form-control store_id" id="store_id" name="store_id">
                                            <?php foreach ($location_list as $locations) { ?>
                                                <option value="<?= $locations->location_id ?>"><?= ucwords($locations->location_name); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-offset-4">
                                        <button type="submit" class="btn btn-success btn-sm w-md m-b-5"><?php echo display('save'); ?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 assigned_area">
                                <div id="existrole">
                                    <h4>Assigned Role</h4>         
                                    <ul class="loadrole">

                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
</div>
<!-- Edit user end -->

<script src="<?php echo base_url() ?>assets/js/roles.js" type="text/javascript"></script>