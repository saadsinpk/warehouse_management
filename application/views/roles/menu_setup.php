<!--<style type="text/css">
    .modal-header h4{
        float: left;
    }
</style>-->
<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('menu_setup') ?></h1>
            <small><?php echo display('role_permission') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('web_settings') ?></a></li>
                <li class="active"><?php echo display('menu_setup') ?></li>
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
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('menu_entry') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open_multipart('CRole/menusetup_save', 'class="form-inner"') ?>
                        <div class="form-group row">
                            <label for="menu_name" class="col-sm-3 col-form-label text-right"><?php echo display('menu_name') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input name="menu_name" type="text" class="form-control" id="menu_name" placeholder="<?php echo display('menu_name') ?>" required="" tabindex="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="menu_url" class="col-sm-3 col-form-label text-right"><?php echo display('menu_url') ?></label>
                            <div class="col-sm-6">
                                <input name="menu_url" type="text" class="form-control" id="menu_url" placeholder="<?php echo display('menu_url') ?>"  tabindex="2">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="module" class="col-sm-3 col-form-label text-right"><?php echo display('module') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input name="module" type="text" class="form-control typeahead" id="module" placeholder="<?php echo display('module') ?>" required tabindex="3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="order" class="col-sm-3 col-form-label text-right"><?php echo display('order') ?></label>
                            <div class="col-sm-6">
                                <select  class="form-control select2" name="order" id="order" data-placeholder="<?php echo display('select_one'); ?>" tabindex="4">
                                    <option value=""><?php echo display('select_one'); ?></option>
                                    <?php
                                    for ($i = 1; $i < 51; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="parent_menu" class="col-sm-3 col-form-label text-right"><?php echo display('parent_menu') ?></label>
                            <div class="col-sm-6">
                                <select class="form-control select2" name="parent_menu" id="parent_menu" data-placeholder="-- select one --" tabindex="5">
                                    <option value=""><?php echo display('select_one'); ?></option>
                                    <?php
                                    foreach ($parent_menu as $parent) {
                                        echo "<option value='$parent->id'>" . ucwords(str_replace('_', ' ', $parent->menu_title)) . "</option>'";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="icon" class="col-sm-3 col-form-label text-right"><?php echo display('icon'); ?></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon Class" tabindex="6">
                            </div>
                            <div class="col-sm-1">
                                <a href="javascript:void()" onclick="window.open('<?php echo base_url('CRole/icon_load'); ?>', '_blank', 'width=1000,height=600,scrollbars=yes,menubar=no,status=yes,resizable=yes,screenx=100,screeny=10'); return false;" class="btn btn-primary btn-sm"><?php echo display('library'); ?> </a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-offset-1 col-sm-2"></div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn custom_btn custom_fontcolor btn-sm" name="add-class"  tabindex="7"><?php echo display('save') ?></button>
                            </div>
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
                            <h4><?php echo display('menu_list') ?> </h4>
                        </div>
                    </div>
                    <div class="col-sm-12 text-right m-b-15">
                        <div class="form-group row m-b-0">
                            <label for="keyword" class="col-sm-2 col-form-label col-sm-offset-8 text-right"></label>
                            <div class="col-sm-2 m-t-10">
                                <input type="text" class="form-control" name="keyword" id="keyword" onkeyup="menukeyup_search()" placeholder="Search..." tabindex="">
                            </div>
                        </div>          
                    </div>
                    <div class="panel-body">
                        <div id="results_menu">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="10%"><?php echo display('sl'); ?></th>
                                        <th width="20%"><?php echo display('menu_name'); ?></th>
                                        <th  width="20%"><?php echo display('menu_url'); ?></th>
                                        <th width="10%"><?php echo display('module'); ?></th>
                                        <th width="15%"><?php echo display('parent_menu'); ?></th>
                                        <th width="5%"><?php echo display('order'); ?></th>
                                        <th  width="15%" class="text-center">
                                            <?php echo display('action'); ?>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($menusetuplist)) {
                                        $sl = 0 + $pagenum;
                                        foreach ($menusetuplist as $key => $value) {
                                            $parent_menu = $this->db->select('*')->where('id', $value->parent_menu)->get('menusetup_tbl')->row();
                                            $sl++;
                                            ?>
                                            <tr>
                                                <td><?php echo $sl; ?></td>
                                                <td><?php echo ucwords(str_replace("_", " ", $value->menu_title)); ?></td>
                                                <td><?php echo $value->page_url; ?></td>
                                                <td><?php echo $value->module ?></td>
                                                <td><?php echo @$parent_menu->menu_title; ?></td>
                                                <td><?php echo $value->ordering; ?></td>
                                                <td class="text-center">
                                                    <?php
                                                    $status = $value->status;
                                                    if ($status == 1) {
                                                        if ($this->permission->check_label('add_menu')->read()->access()) {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>CRole/menu_inactive/<?php echo $value->id; ?>" data-toggle='tooltip' data-placement='top' data-original-title='Inactive' onclick="return confirm('Are you sure inactive it ?')" title="Inactive" class="btn btn-sm btn-warning"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                            <?php
                                                        }
                                                    }
                                                    if ($status == 0) {
                                                        if ($this->permission->check_label('add_menu')->read()->access()) {
                                                            ?>
                                                            <a href="<?php echo base_url(); ?>CRole/menu_active/<?php echo $value->id; ?>" data-toggle='tooltip' data-placement='top' data-original-title='Active' onclick="return confirm('Are you sure active it ?')" title="Active" class="btn btn-sm btn-success"><i class="fa fa-check-circle"></i></a>
                                                            <?php
                                                        }
                                                    }
                                                    if ($this->permission->check_label('add_menu')->update()->access()) {
                                                        ?>
                                                        <a href="<?php echo base_url('CRole/menu_edit/' . $value->id); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                        <?php
                                                    }
                                                    if ($this->permission->check_label('add_menu')->delete()->access()) {
                                                        ?>
                                                        <a href="<?php echo base_url(); ?>CRole/menusetup_delete/<?php echo $value->id; ?>" onclick="return confirm('Do you want to delete it?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                                <?php if (empty($menusetuplist)) { ?>
                                    <tfoot>
                                        <tr>
                                            <th colspan="7" class="text-danger text-center"><?php echo display('data_not_found'); ?></th>
                                        </tr>
                                    </tfoot>
                                <?php } ?>
                            </table> 
                            <?php echo $links; ?>
                        </div>
                        <div class="modal" id="menu_modal_info">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"><?php echo display('menu_edit'); ?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body" id="menu_info">

                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><?php echo display('close'); ?></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit end -->
<script src="<?php echo base_url('assets/bootstrap3-typeahead.min.js'); ?>"></script>
<script src="<?php echo base_url() ?>assets/js/roles.js" type="text/javascript"></script>
<script type="text/javascript">
                                                $('#module').typeahead({
                                                    highlight: true,
                                                    minLength: 1,
                                                    source: function (query, result) {
                                                        $.ajax({
                                                            url: "<?php echo base_url('CRole/moduleAutocomplete/'); ?>",
                                                            data: 'query=' + query,
                                                            dataType: "json",
                                                            type: "POST",
                                                            success: function (data) {
                                                                result($.map(data, function (item) {
//                        var items = item.split('|');
//                        $("#module_id").val(items[1]);
//                        return items[0];
                                                                    return item;
                                                                }));
                                                            }
                                                        });
                                                    }
                                                });
</script>
<script type="text/javascript">
    $("#menu_name").focus();
//    function menu_edit(id) {
//        $.ajax({
//            url: "<?php echo base_url('CRole/menu_edit'); ?>",
//            type: "post",
//            data: {menu_id: id},
//            success: function (r) {
//                if (r != 0) {
//                    $("#menu_info").html(r);
////                    $("#menu_modal_info").modal('show');
//                } else {
//                    $("#menu_info").html("Record not found!");
//                }
//            }
//        });
//    }
    function menukeyup_search() {
        var keyword = $("#keyword").val();
        $.ajax({
            url: "<?php echo base_url('CRole/menu_search'); ?>",
            type: 'post',
            data: {keyword: keyword},
            success: function (r) {
                $("#results_menu").html(r);
            }
        });
    }
</script>