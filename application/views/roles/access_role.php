<!-- Add User start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('access_role') ?></h1>
            <small><?php echo display('role_permission') ?></small>
            <ol class="breadcrumb">
                <li><a href=""><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('role_permission') ?></a></li>
                <li class="active"><?php echo display('access_role') ?></li>
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
                    <?php if ($this->permission->check_label('role_list')->read()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CRole/role_permission/'); ?>')" class="btn btn-success"><?php echo display('role_list'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('access_role') ?> </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><?php echo display('sl'); ?></th>
                                    <th><?php echo display('user_name'); ?></th>
                                    <th><?php echo display('role_name'); ?></th>
                                    <th>Store</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if (!empty($user_access_role)) {
                                    $sl = 0;
                                    foreach ($user_access_role as $key => $value) {
                                        $sql = "SELECT a.role_id, a.user_id, b.role_name FROM user_access_tbl a 
                            JOIN role_tbl b ON b.id = a.role_id 
                        WHERE a.user_id = '$value->user_id'";
//                            echo $sql;
                                        $query = $this->db->query($sql)->result();
                                        $sl++;

                                        $query2="SELECT `location_name` FROM `locations_tbl` WHERE `location_id`=".$value->store_id;
                                        $query3 = $this->db->query($query2)->row();
                                        $store_name="No store found.";
                                        if($value->store_id>0){
                                             $store_name=$query3->location_name;
                                        }
                                        ?>
                                        <tr>
                                            <td><?php echo $sl; ?></td>
                                            <td><?php echo $value->first_name . " " . @$value->last_name; ?></td>
                                            <td>
                                                <ul>
                                                    <?php
                                                    foreach ($query as $role) {
                                                        echo "<li>" . $role->role_name . "</li>";
                                                    }
                                                    ?>
                                                </ul>
                                            </td>
                                            <td><?php echo $store_name; ?></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url(); ?>CRole/edit_user_access_role/<?php echo $value->role_acc_id; ?>" class="btn btn-sm custom_btn custom_fontcolor" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"> </i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                if (empty($user_access_role)) {
                                    ?>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" class="text-center text-danger"><?php echo display('record_not_found'); ?></th>
                                    </tr>
                                </tfoot>
                            <?php } ?>
                            </tbody>
                            <?php if (empty($user_access_role)) { ?>
                                <tfoot>
                                    <tr>
                                        <th colspan="6" class="text-danger text-center"><?php echo display('data_not_found'); ?></th>
                                    </tr>
                                </tfoot>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit user end -->
