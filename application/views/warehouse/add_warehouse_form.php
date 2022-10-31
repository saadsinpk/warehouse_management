<!-- Add warehouse Start -->
<h2>test</h2>
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1>Warehouse</h1>
            <small>Add New Warehouse</small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li class="active">Warehouse</a></li>
                <!-- <li class="active">New Warehouse</li> -->
            </ol>
        </div>
    </section>

    <section class="content">

        <!-- Alert Message -->
        <?php
        $message = $_SESSION['flash_message']['message'];
        if (isset($message)) {
            ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $message ?>                    
            </div>
            <?php
            unset($_SESSION['flash_message']['message']);
        }
        $error_message = $_SESSION['error_message']['message'];
        if (isset($error_message)) {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error_message ?>                    
            </div>
            <?php
            unset($_SESSION['error_message']['message']);
        }
        ?>

        <!-- Add warehouse -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('warehouse')->read()->access()) { ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('CWarehouse/manage_warehouse'); ?>')" class="btn custom_btn custom_fontcolor">Manage Warehouse</a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>Add New Warehouse</h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('CWarehouse/warehouse_save', array('class' => 'form-vertical', 'id' => 'warehouse_save', 'name' => 'warehouse_save')) ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="warehouse" class="col-sm-3 col-form-label">Warehouse Name <i class="text-danger"></i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="warehouse" type="text" id="warehouse" placeholder="Warehouse Name"  tabindex="1"  onkeyup="special_character_remove(this.value, 'warehouse')">
                                    </div>
                                </div>
                            </div>
                        </div>
                      

                      
                      
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-6">
                                <input type="submit" id="add-warehouse" class="btn custom_btn custom_fontcolor btn-large" name="add-warehouse" value="<?php echo display('save') ?>"  tabindex='10'/>
                               </div>
                                <!-- <input type="submit" value="<?php echo display('save_and_add_another') ?>" name="add-warehouse-another" class="btn btn-large btn-success" id="add-warehouse-another" tabindex='11'> -->
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add warehouse End -->