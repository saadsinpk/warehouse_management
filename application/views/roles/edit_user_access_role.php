<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('edit_information') ?></h1>
            <small><?php echo display('role_permission') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('role_permission') ?></a></li>
                <li class="active"><?php echo display('edit_information') ?></li>
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
                <div class="m-b-10" style="float: right;">
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
                            <h4><?php echo display('edit_information') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open_multipart("CRole/assign_user_role_update/" . $edit_user_access_role[0]->role_acc_id, array('class' => 'form-horizontal')) ?>
                        <div class="form-group row">
                            <label for="user_id" class="col-sm-3 col-form-label control-label text-right"><?php echo display('user_name'); ?> <span class="text-danger"> *</span></label>
                            <div class="col-sm-9">
                                <select class="form-control select2" name="user_id" id="user_id">
                                    <option value="">-- select one --</option>
                                    <?php
                                    foreach ($user_list as $user) {
                                        if ($edit_user_access_role[0]->user_id == $user->user_id) {
                                            echo '<option selected value="' . $user->user_id . '">' . $user->first_name. " ".@$user->last_name .  '</option>';
                                        } else {
                                            echo '<option value="' . $user->user_id . '">' . $user->first_name. " ".@$user->last_name . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <?php
                        foreach ($assign_role as $role) {
                            $role_id[] = $role->role_id;
                        }
                        ?>

                        <div class="form-group row">
                            <label for="role_id" class="col-sm-3 col-form-label control-label text-right"><?php echo display('role_name'); ?> <span class="text-danger"> *</span></label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control role_id" id="role_id" name="role_id" onchange="userRoleName(this.value)">
                                    <?php foreach ($role_list as $val) { ?>
                                        <option value="<?= $val->id ?>" <?php
                                        if (in_array($val->id, $role_id)) {
                                            echo 'selected';
                                        }
                                        ?>>
                                                    <?= ucwords($val->role_name); ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row location_list" <?php if($edit_user_access_role[0]->role_id!=15){?>style="display:none;"<?php }?>>
                            <label for="store_id" class="col-sm-3 text-right"><?php echo display('store'); ?> <i class="text-danger"> *</i></label>
                            <div class="col-sm-9">
                                <select class="selectpicker form-control store_id" id="store_id" name="store_id">
                                    <?php foreach ($location_list as $locations) { ?>
                                        <option <?php if($locations->location_id==$edit_user_access_role[0]->store_id){echo "selected";}?> value="<?= $locations->location_id ?>"><?= ucwords($locations->location_name); ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group text-right" style="padding-right: 20px;">
                            <!--<a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn custom_btn custom_fontcolor btn-sm text-white"><?php echo display('back'); ?></a>-->
                            <button type="submit" class="btn btn-success btn-sm w-md m-b-5"><?php echo display('update'); ?></button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<script type="text/javascript">
    function userRoleName(id) {
        if(id==15){
            $('.location_list').show();
            $('.store_id').attr("required",true);
        }else{
            $('.location_list').hide();
            $('.store_id').removeAttr("required");
        }
    }
</script>
<!-- Edit user end -->
