<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th width="10%"><?php echo display('sl'); ?></th>
            <th width="20%"><?php echo display('menu_name'); ?></th>
            <th  width="20%"><?php echo display('menu_url'); ?></th>
            <th width="10%"><?php echo display('module'); ?></th>
            <th width="15%"><?php echo display('parent_menu'); ?></th>
            <th width="5%"><?php echo display('order'); ?></th>
            <th  width="20%" class="text-center">
                <?php echo display('action'); ?>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($menusetuplist)) {
            $sl = 0;
            foreach ($menusetuplist as $key => $value) {
                $parent_menu = $this->db->select('*')->where('id', $value->parent_menu)->get('menusetup_tbl')->row();
                $sl++;
                ?>
                <tr>
                    <td><?php echo $sl; ?></td>
                    <td><?php echo $value->menu_title; ?></td>
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
                            <a href="javascript:void(0)" onclick="menu_edit('<?php echo $value->id; ?>')" class="btn btn-info btn-sm" data-toggle="modal" data-target="#menu_modal_info"><i class="fa fa-edit"></i></a>
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