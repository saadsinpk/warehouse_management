<!-- Manage Product Start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('manage_product') ?></h1>
            <small><?php echo display('manage_your_product') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('product') ?></a></li>
                <li class="active"><?php echo display('manage_product') ?></li>
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
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('add_product')->read()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cproduct/'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_product'); ?></a>
                    <?php } ?>
                    <button class="btn btn-info default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Filter
                    </button>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default collapse" id="collapseExample">
                    <div class="panel-body"> 
                        <form action="<?php echo base_url('Cproduct/product_by_search') ?>" class="form-inline" method="post" accept-charset="utf-8">
                            <label class="select m-r-15"><?php echo display('product_name') ?>:</label>
                            <select class="form-control" name="product_id">
                                {all_product_list}
                                <option value="{product_id}">{product_name}-({product_model})</option>
                                {/all_product_list}
                            </select>

                            <button type="submit" class="btn custom_btn custom_fontcolor"><?php echo display('search') ?></button>

                        </form>		            
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Product report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('manage_product') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?php echo display('sl') ?></th>
                                        <th><?php echo display('product') ?></th>
                                        <th><?php echo display('model') ?></th>
                                        <th><?php echo display('cartoon_quantity') ?></th>
                                        <th><?php echo display('supplier_name') ?></th>
                                        <th><?php echo display('image') ?>s</th>
                                        <th class="text-center"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($products_list) {
                                        ?>
                                        {products_list}
                                        <tr>
                                            <td>{sl}</td>
                                            <td>
                                                <a href="<?php echo base_url() . 'Cproduct/product_details/{product_id}'; ?>">
                                                    {product_name}
                                                </a>			
                                            </td>
                                            <td><a href="<?php echo base_url() . 'Cproduct/product_details/{product_id}'; ?>">{product_model} </a></td>
                                            <td>{cartoon_quantity}</td>
                                            <td>{supplier_name}</td>
                                            <td class="text-center">
                                                <img src="{image}" class="img img-responsive" height="50" width="50">
                                            </td>
                                            <td>
                                    <center>
                                        <?php
                                        echo form_open();
                                        if ($this->permission->check_label('manage_product')->read()->access()) {
                                            ?>
                                            <a href="<?php echo base_url() . 'Cqrcode/qrgenerator/{product_id}'; ?>" class="btn custom_btn custom_fontcolor btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('qr_code') ?>"><i class="fa fa-qrcode" aria-hidden="true"></i></a>
                                            <?php
                                        }
                                        if ($this->permission->check_label('manage_product')->read()->access()) {
                                            ?>
                                            <a href="<?php echo base_url() . 'Cbarcode/barcode_print/{product_id}'; ?>" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('barcode') ?>"><i class="fa fa-barcode" aria-hidden="true"></i></a>
                                            <?php
                                        }
                                        if ($this->permission->check_label('manage_product')->update()->access()) {
                                            ?>
                                            <a href="<?php echo base_url() . 'Cproduct/product_update_form/{product_id}'; ?>" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <?php
                                        }
                                        if ($this->permission->check_label('manage_product')->delete()->access()) {
                                            ?>
                                            <a href="javascript:void(0)" class="deleteProduct btn btn-danger btn-xs" name="{product_id}" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        <?php } ?>
                                        <?php echo form_close() ?>
                                    </center>
                                    </td>
                                    </tr>
                                    {/products_list}
                                    <?php
                                }
                                ?>
                                </tbody>
                                <?php if (empty($products_list)) { ?>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center text-danger" colspan="9"><?php echo display('data_not_found'); ?></th>
                                        </tr>
                                    </tfoot>
                                <?php } ?>
                            </table>
                            <div class="text-right"><?php
                                if ($links) {
                                    echo $links;
                                }
                                ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Manage Product End -->

<script src="<?php echo base_url() ?>assets/js/product.js" type="text/javascript"></script>
<!-- Delete Product ajax code -->
<script type="text/javascript">
//                        $(".deleteProduct").click(function ()
//                        {
//                            var product_id = $(this).attr('name');
//                            var csrf_test_name = $("[name=csrf_test_name]").val();
//                            var x = confirm("Are You Sure,Want to Delete ?");
//                            if (x == true) {
//                                $.ajax
//                                        ({
//                                            type: "POST",
//                                            url: '<?php // echo base_url('Cproduct/product_delete') ?>',
//                                            data: {product_id: product_id, csrf_test_name: csrf_test_name},
//                                            cache: false,
//                                            success: function (datas)
//                                            {
//                                                pageopen('<?php // echo base_url('Cproduct/manage_product'); ?>');
//                                            }
//                                        });
//                            }
//
//                        });
</script>