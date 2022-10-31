
<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('add_role') ?></h1>
            <small><?php echo display('roel_permission') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('role_permission') ?></a></li>
                <li class="active"><?php echo display('add_role') ?></li>
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
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('role_list')->read()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CRole/role_list/'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('role_list'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_role') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo base_url('CRole/role_save'); ?>" id="moduleFrm" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="px-3">
                                <div class="form-group row">
                                    <label for="role_name" class="col-sm-3 text-right"><?php echo display('role_name'); ?> <i class="text-danger"> *</i></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="role_name" id="role_name" placeholder="<?php echo display('role_name'); ?>" onkeyup="special_character_remove(this.value, 'role_name')" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="role_description" class="col-sm-3 text-right"><?php echo display('description'); ?></label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="role_description" id="role_description" placeholder="Role Description"></textarea>
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
                                    // echo "<pre>";
                                    // print_r($menu_item);
                                    // echo "</pre>";
                                    ?>

                                    <input type="hidden" name="module[]" value="<?php echo $module->module; ?>">
                                    <table class="table table-bordered table-hover">
                                        <h4><?php echo ucwords(str_replace("_", " ", $module->module)); ?></h4>
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="10%"><?php echo display('sl'); ?></th>
                                                <th class="" width="30%"><?php echo display('menu_name'); ?></th>
                                                <th class="text-center" width="15%"><?php echo display('can_create'); ?> &nbsp; &nbsp;
                                                    <label for="<?php echo $module->module; ?>_can_create_all" class="float-right">
                                                        <span class="select_cls"><strong><?php echo display('all'); ?></strong></span>
                                                        <input type="checkbox" id="<?php echo $module->module; ?>_can_create_all" class="can_create_all" value="<?php echo $module->module; ?>">
                                                    </label>
                                                </th>
                                                <th class="text-center" width="15%"><?php echo display('can_read'); ?> &nbsp; &nbsp;
                                                    <label for="<?php echo $module->module; ?>_can_read_all" class="float-right">
                                                        <span class="select_cls"><strong><?php echo display('all'); ?></strong></span>
                                                        <input type="checkbox" id="<?php echo $module->module; ?>_can_read_all" class="can_read_all" value="<?php echo $module->module; ?>">
                                                    </label>
                                                </th>
                                                <th class="text-center" width="15%"><?php echo display('can_edit'); ?> &nbsp; &nbsp;
                                                    <label for="<?php echo $module->module; ?>_can_edit_all" class="float-right">
                                                        <span class="select_cls"><strong><?php echo display('all'); ?></strong></span>
                                                        <input type="checkbox" id="<?php echo $module->module; ?>_can_edit_all" class="can_edit_all" value="<?php echo $module->module; ?>">
                                                    </label>
                                                </th>
                                                <th class="text-center" width="15%"><?php echo display('can_delete'); ?> &nbsp; &nbsp;
                                                    <label for="<?php echo $module->module; ?>_can_delete_all" class="float-right">
                                                        <span class="select_cls"><strong><?php echo display('all'); ?></strong></span>
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
                                                    ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $sl + 1; ?></td>
                                                        <td class="text-<?php echo ($menu->parent_menu ? 'right' : '') ?>"><?php echo ucwords(str_replace("_", " ", $menu->menu_title)); ?></td>
                                                        <td>
                                                            <div class="checkbox checkbox-success text-center">
                                                                <input type="checkbox" name="create[<?php echo $m ?>][<?php echo $sl ?>][]" value="1" id="create[<?php echo $m ?>]<?php echo $sl ?>" class="sameChecked <?php echo $menu->module; ?>_can_create">
                                                                <label for="create[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="checkbox checkbox-success text-center">
                                                                <input type="checkbox" name="read[<?php echo $m ?>][<?php echo $sl ?>][]" value="1" id="read[<?php echo $m ?>]<?php echo $sl ?>" class="sameChecked <?php echo $menu->module; ?>_can_read">
                                                                <label for="read[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                                            </div>
                                                        </td> 
                                                        <td>
                                                            <div class="checkbox checkbox-success text-center">
                                                                <input type="checkbox" name="edit[<?php echo $m ?>][<?php echo $sl ?>][]" value="1" id="edit[<?php echo $m ?>]<?php echo $sl ?>" class="sameChecked <?php echo $menu->module; ?>_can_edit">
                                                                <label for="edit[<?php echo $m ?>]<?php echo $sl ?>"></label>
                                                            </div>
                                                        </td> 
                                                        <td>
                                                            <div class="checkbox checkbox-success text-center">
                                                                <input type="checkbox" name="delete[<?php echo $m ?>][<?php echo $sl ?>][]" value="1" id="delete[<?php echo $m ?>]<?php echo $sl ?>" class="sameChecked <?php echo $menu->module; ?>_can_delete">
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
                                        <button type="submit" class="btn btn-info btn-sm module_btn"><?php echo display('save'); ?></button>
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