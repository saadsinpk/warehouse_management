<style type="text/css">
    .modal-header h4{
        float: left;
    }
</style>
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
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4><?php echo display('menu_entry') ?> </h4>
                    </div>
                </div>
                <div class="panel-body">
                    <?php echo form_open_multipart('CRole/menusetup_update', 'class="form-inner"') ?>
                    <div class="form-group row">
                        <label for="menu_name" class="col-sm-3 col-form-label text-right"><?php echo display('menu_name') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input name="menu_name" type="text" class="form-control" id="menu_name" value="<?php echo $get_menu_edit[0]->menu_title; ?>" placeholder="<?php echo display('menu_name') ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="menu_url" class="col-sm-3 col-form-label text-right"><?php echo display('menu_url') ?></label>
                        <div class="col-sm-6">
                            <input name="menu_url" type="text" class="form-control" id="menu_url" value="<?php echo $get_menu_edit[0]->page_url; ?>" placeholder="<?php echo display('menu_url') ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="module" class="col-sm-3 col-form-label text-right"><?php echo display('module') ?> <i class="text-danger">*</i></label>
                        <div class="col-sm-6">
                            <input name="module" type="text" class="form-control" id="module" value="<?php echo $get_menu_edit[0]->module; ?>" placeholder="<?php echo display('module') ?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="order" class="col-sm-3 col-form-label text-right"><?php echo display('order') ?></label>
                        <div class="col-sm-6">
                            <select  class="form-control select2" name="order" id="order" data-placeholder="-- select one --" tabindex="4">
                                <option value="">-- select one --</option>
                                <?php for ($i = 1; $i < 51; $i++) { ?>
                                    <option value='<?php echo $i; ?>' <?php
                                    if ($get_menu_edit[0]->ordering == $i) {
                                        echo 'selected';
                                    }
                                    ?>><?php echo $i; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="parent_menu" class="col-sm-3 col-form-label text-right"><?php echo display('parent_menu') ?></label>
                        <div class="col-sm-6">
                            <select  class="form-control select2" name="parent_menu" id="parent_menu"  tabindex="5">
                                <option value="">-- select one --</option>
                                <?php
                                foreach ($parent_menu as $parent) {
                                    ?>
                                    <option value="<?php echo $parent->id; ?>" <?php
                                    if ($get_menu_edit[0]->parent_menu == $parent->id) {
                                        echo 'selected';
                                    }
                                    ?>>
                                                <?php echo ucwords(str_replace('_', ' ', $parent->menu_title)); ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="icon" class="col-sm-3 col-form-label text-right"><?php echo display('icon'); ?></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="icon" id="icon" value="<?php echo $get_menu_edit[0]->icon; ?>" placeholder="Icon Class" tabindex="6">
                        </div>
                        <div class="col-sm-1">
                            <a href="javascript:void()" onclick="window.open('<?php echo base_url('CRole/icon_load'); ?>', '_blank', 'width=1000,height=600,scrollbars=yes,menubar=no,status=yes,resizable=yes,screenx=100,screeny=10'); return false;" class="btn btn-primary btn-sm"><?php echo display('library'); ?> </a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="status" class="col-sm-3 col-form-label text-right"><?php echo display('status'); ?></label>
                        <div class="col-sm-6">
                            <select name="status" class="form-control select2" id="status">
                                <option value=""><?php echo display('select_one'); ?></option>
                                <option value="1" <?php
                                if ($get_menu_edit[0]->status == '1') {
                                    echo 'selected';
                                }
                                ?>><?php echo display('active'); ?></option>
                                <option value="0" <?php
                                if ($get_menu_edit[0]->status == '0') {
                                    echo 'selected';
                                }
                                ?>><?php echo display('inactive'); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-offset-1 col-sm-2"></div>
                        <div class="col-sm-4">
                            <input type="hidden" name="menu_id" value="<?php echo $get_menu_edit[0]->id; ?>">
                            <button type="submit" class="btn btn-info btn-sm" name="add-class"><?php echo display('update') ?></button>
                        </div>
                    </div> 
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>   

    <script src="<?php echo base_url('assets/bootstrap3-typeahead.min.js'); ?>"></script>
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