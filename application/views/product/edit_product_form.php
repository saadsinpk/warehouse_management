<!-- Edit Product Start -->
<div class="content-wrapper removeContentwraper" id="bodycontent">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('product_edit') ?></h1>
            <small><?php echo display('edit_your_product') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('product') ?></a></li>
                <li class="active"><?php echo display('product_edit') ?></li>
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
        <!-- Purchase report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('product_edit') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Cproduct/product_update', array('class' => 'form-vertical', 'id' => 'product_update', 'name' => 'product_update')) ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label"><?php echo display('product_name') ?> <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="product_name" type="text" id="product_name" placeholder="<?php echo display('product_name') ?>" value="{product_name}" required>

                                        <input type="hidden" name="product_id" value="{product_id}"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="description" class="col-sm-4 col-form-label"><?php echo display('details') ?> <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="description" id="description" rows="3" >{product_details}</textarea>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="description" class="col-sm-4 col-form-label"><?php echo display('category') ?></label>
                                    <div class="col-sm-8">
                                        <?php // echo '<pre>';                                print_r($category_selected); ?>
                                        <select name="category_id" class="form-control">
                                            <?php
                                            foreach ($category_list as $category) {
                                                if ($category_selected[0]['category_id'] == $category['category_id']) {
                                                    echo "<option selected value=" . $category['category_id'] . ">" . $category['category_name'] . "</option>";
                                                } else {
                                                    echo "<option value=" . $category['category_id'] . ">" . $category['category_name'] . "</option>";
                                                }
                                            }
                                            ?>
                                            <!--                                            {category_list}
                                                                                        <option value="{category_id}">{category_name} </option>
                                                                                        {/category_list}-->
                                            <?php
//                                            if ($category_selected) {
                                            ?>
                                            <!--                                                {category_selected}
                                                                                            <option selected value="{category_id}">{category_name} </option>-->
                                            {/category_selected}
                                            <?php
//                                            } else {
                                            ?>
                                            <!--<option selected value="0"><?php // echo display('category_not_selected')  ?></option>-->
                                            <?php
//                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="description" class="col-sm-4 col-form-label"><?php echo display('image') ?></label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image" class="form-control">
                                        <img class="img img-responsive text-center p-5" src="{image}" height="80" width="80">
                                        <input type="hidden" value="{image}" name="old_image">
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="table-responsive m-t-10">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo display('cartoon_quantity') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('model') ?> <i class="text-danger">*</i></th>
                                        <th class="text-center"><?php echo display('supplier') ?> <i class="text-danger">*</i></th>
                                    </tr>
                                </thead>
                                <tbody id="form-actions">
                                    <tr class="">
                                        <td class="">
                                            <input class="form-control text-right" name="cartoon_quantity" type="number" value="{cartoon_quantity}" required="" placeholder="<?php echo display('cartoon_quantity') ?>" tabindex="3" min="0">
                                        </td>            
                                        <td class="text-right">
                                            <input type="text" tabindex="5" class="form-control" value="{product_model}" name="model" placeholder="<?php echo display('model') ?>"  required />
                                        </td>

                                        <td class="text-right">
                                            <select name="supplier_id" class="form-control">
                                                {supplier_list}
                                                <option value="{supplier_id}">{supplier_name} </option>
                                                {/supplier_list}
                                                <?php
                                                if ($supplier_selected) {
                                                    ?>
                                                    {supplier_selected}
                                                    <option selected value="{supplier_id}">{supplier_name} </option>
                                                    {/supplier_selected}
                                                    <?php
                                                } else {
                                                    ?>
                                                    <option selected value="0"><?php echo display('supplier_not_selected') ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="submit" id="add-product" class="btn custom_btn custom_fontcolor btn-large" name="add-product" value="<?php echo display('save_changes') ?>" />
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Edit Product End -->



