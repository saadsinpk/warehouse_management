<!-- Add location Start -->
<h2>test</h2>
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('store') ?></h1>
            <small><?php echo display('add_new_store') ?></small>
            <ol class="breadcrumb">
                <li><a href="index.html"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('store') ?></a></li>
                <li class="active"><?php echo display('new_store') ?></li>
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

        <!-- Add location -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('store')->read()->access()) { ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Clocation/manage_location'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('manage_store'); ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('add_new_store') ?></h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Clocation/location_save', array('class' => 'form-vertical', 'id' => 'location_save', 'name' => 'location_save')) ?>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group row">
                                    <label for="location" class="col-sm-3 col-form-label"><?php echo display('store') ?> <i class="text-danger"></i></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" name="location" type="text" id="location" placeholder="<?php echo display('store') ?>"  tabindex="1"  onkeyup="special_character_remove(this.value, 'location')">
                                    </div>
                                </div>
                            </div>
                        </div>
                      

                      
                      
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-6">
                                <input type="submit" id="add-location" class="btn custom_btn custom_fontcolor btn-large" name="add-location" value="<?php echo display('save') ?>"  tabindex='10'/>
                               </div>
                                <!-- <input type="submit" value="<?php echo display('save_and_add_another') ?>" name="add-location-another" class="btn btn-large btn-success" id="add-location-another" tabindex='11'> -->
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add location End -->