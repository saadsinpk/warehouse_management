<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('role_edit') ?></h1>
            <small><?php echo display('role_permission') ?></small>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('role_permission') ?></a></li>
                <li class="active"><?php echo display('role_edit') ?></li>
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
      
        
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('role_edit') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url(); ?>CRole/role_update" id="moduleFrm" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="px-3">
                    <div class="form-group row">
                        <label for="role_name" class="col-sm-3 col-form-label text-right"><?php echo display('role_name'); ?> <span class="text-danger"> *</span></label>
                        <div class="col-sm-8">
                            <?php // echo $roleInfo->role_name; echo '<pre>';                                    print_r($roleInfo); ?>
                            <input type="text" class="form-control" name="role_name" id="role_name" placeholder="Role Name" value="<?php echo $roleInfo[0]['role_name']; ?>" onkeyup="special_character_remove(this.value, 'role_name')" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role_description" class="col-sm-3 col-form-label text-right"><?php echo display('Description'); ?></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="role_description" id="role_description" placeholder="Role Description"><?php echo $roleInfo[0]['description']; ?></textarea>
                        </div>
                    </div>
                    <div class="float_right">
                        <label for="select_deselect">
                            <span class="select_cls"><strong>Select / De-select</strong></span>
                            <input type="checkbox" id="select_deselect">
                        </label>
                    </div>
                    <?php
                    $m = 0;
                    foreach ($modules as $module) {
                        $menu_item = $this->db->select('*')->from('menusetup_tbl')->where('module', $module->module)->where('status', 1)
                                        ->get()->result();
                        ?>
                        <input type="hidden" name="module[]" value="<?php echo $module->module; ?>">
                        <table class="table table-bordered table-hover">
                            <h4><?php echo ucwords(str_replace("_", ' ', $module->module)); ?></h4>
                            <thead>
                                <tr>
                                    <th class="text-center" width="10%"><?php echo display('sl'); ?></th>
                                    <th class="" width="30%"><?php echo display('menu_name'); ?> </th>
                                    <th class="text-center" width="15%"><?php echo display('can_create'); ?> &nbsp; &nbsp;
                                        <label for="<?php echo $module->module; ?>_can_create_all" class="float-right">
                                            <span class="select_cls"><strong><?php echo display('all'); ?> </strong></span>
                                            <input type="checkbox" id="<?php echo $module->module; ?>_can_create_all" class="can_create_all" value="<?php echo $module->module; ?>">
                                        </label>
                                    </th>
                                    <th class="text-center" width="15%"><?php echo display('can_read'); ?> &nbsp; &nbsp;
                                        <label for="<?php echo $module->module; ?>_can_read_all" class="float-right">
                                            <span class="select_cls"><strong><?php echo display('all'); ?> </strong></span>
                                            <input type="checkbox" id="<?php echo $module->module; ?>_can_read_all" class="can_read_all" value="<?php echo $module->module; ?>">
                                        </label>
                                    </th>
                                    <th class="text-center" width="15%"><?php echo display('can_edit'); ?>  &nbsp; &nbsp;
                                        <label for="<?php echo $module->module; ?>_can_edit_all" class="float-right">
                                            <span class="select_cls"><strong><?php echo display('all'); ?> </strong></span>
                                            <input type="checkbox" id="<?php echo $module->module; ?>_can_edit_all" class="can_edit_all" value="<?php echo $module->module; ?>">
                                        </label>
                                    </th>
                                    <th class="text-center" width="15%"><?php echo display('can_delete'); ?>  &nbsp; &nbsp;
                                        <label for="<?php echo $module->module; ?>_can_delete_all" class="float-right">
                                            <span class="select_cls"><strong><?php echo display('all'); ?> </strong></span>
                                            <input type="checkbox" id="<?php echo $module->module; ?>_can_delete_all" class="can_delete_all" value="<?php echo $module->module; ?>">
                                        </label>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($menu_item)) {
                                    $sl = 0;
                                    foreach ($menu_item as $menu) {
                                        $ck_data = $this->db->select('*')
                                                        ->where('menu_id', $menu->id)
                                                        ->where('role_id', $roleInfo[0]['id'])->get('role_permission_tbl')->row();
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $sl + 1; ?></td>
                                            <td class="text-<?php echo ($menu->parent_menu ? 'right' : '') ?>"><?php echo ucwords(str_replace("_", " ", $menu->menu_title)); ?></td>
                                            <td>
                                                <div class="checkbox checkbox-success text-center">
                                                    <input type="checkbox" name="create[<?php echo $m ?>][<?php echo $sl ?>][]" value="1" <?php echo ((@$ck_data->can_create == 1) ? "checked" : null) ?> id="create[<?php echo $m ?>]<?php echo $sl ?>" class="sameChecked <?php echo $menu->module; ?>_can_create">
                                                    <label for="create[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="checkbox checkbox-success text-center">
                                                    <input type="checkbox" name="read[<?php echo $m ?>][<?php echo $sl ?>][]" value="1" <?php echo ((@$ck_data->can_access == 1) ? "checked" : null) ?> id="read[<?php echo $m ?>]<?php echo $sl ?>" class="sameChecked <?php echo $menu->module; ?>_can_read">
                                                    <label for="read[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                                </div>
                                            </td> 
                                            <td>
                                                <div class="checkbox checkbox-success text-center">
                                                    <input type="checkbox" name="edit[<?php echo $m ?>][<?php echo $sl ?>][]" value="1" <?php echo ((@$ck_data->can_edit == 1) ? "checked" : null) ?> id="edit[<?php echo $m ?>]<?php echo $sl ?>" class="sameChecked <?php echo $menu->module; ?>_can_edit">
                                                    <label for="edit[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="checkbox checkbox-success text-center">
                                                    <input type="checkbox" name="delete[<?php echo $m ?>][<?php echo $sl ?>][]" value="1" <?php echo ((@$ck_data->can_delete == 1) ? "checked" : NULL) ?> id="delete[<?php echo $m ?>]<?php echo $sl ?>"  class="sameChecked <?php echo $menu->module; ?>_can_delete">
                                                    <label for="delete[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                                </div>
                                            </td>

                                    <input type="hidden" name="menu_id[<?php echo $m ?>][<?php echo $sl ?>][]" value="<?php echo $menu->id ?>">

                                    </tr>
                                    <?php
                                    $sl++;
                                }
                                ?>
                                <?php
                                $m++;
                            }
                            ?>
                            </tbody>
                        </table>
                    <?php }
                    ?>

                    <div class="form-group row">
                        <div class="col-md-2 pt-1">
                            <input type="hidden" name="role_id" value="<?php echo $roleInfo[0]['id'] ?>">
                            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="btn custom_btn custom_fontcolor btn-sm text-white"><?php echo display('back'); ?> </a>
                            <button type="submit" class="btn btn-info btn-sm module_btn"><?php echo display('update'); ?> </button>
                        </div>
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
