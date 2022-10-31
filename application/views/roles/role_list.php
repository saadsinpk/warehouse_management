<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('role_list') ?></h1>
            <small><?php echo display('role_permission') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('role_permission') ?></a></li>
                <li class="active"><?php echo display('role_list') ?></li>
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
                    <?php if ($this->permission->check_label('add_role')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CRole/role_permission/'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_role'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('role_permission') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><?php echo display('sl'); ?> </th>
                                    <th><?php echo display('role_name'); ?> </th>
                                    <th><?php echo display('description'); ?> </th>
                                    <th class="text-center"><?php echo display('action'); ?> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($role_list)) {
                                    $sl = 0;
                                    foreach ($role_list as $key => $value) {
                                        $sl++;
                                        ?>
                                        <tr>
                                            <td><?php echo $sl; ?></td>
                                            <td><?php echo $value->role_name; ?></td>
                                            <td><?php echo $value->description; ?></td>
                                            <td class="text-center">
                                                <?php if ($this->permission->check_label('role_list')->read()->access()) { ?>
                                                    <a href="<?php echo base_url(); ?>CRole/role_edit/<?php echo $value->id; ?>" data-toggle="tooltip" data-placement="top" data-original-title="Edit" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                                    <?php
                                                }
                                                if ($this->permission->check_label('role_list')->read()->access()) {
                                                    ?>
                                                    <a href="<?php echo base_url(); ?>CRole/role_delete/<?php echo $value->id; ?>" title="" onclick="return confirm('Do you want to delete it?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                if (empty($role_list)) {
                                    ?>
                                <tfoot>
                                    <tr>
                                        <th class="text-danger text-center" colspan="6"><?php echo display('record_not_found'); ?> </th>
                                    </tr>
                                </tfoot>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit user end -->

