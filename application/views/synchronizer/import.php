<!-- Backup and restore start -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('Backup_restore') ?></h1>
            <small><?php echo display('import') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li class="active"><?php echo display('import') ?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
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
            <div class="col-sm-12 col-md-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo (!empty($title) ? $title : null) ?></h4>
                        </div>
                    </div>
                    <!--                    <div class="panel-body">
                    <?php echo form_open_multipart('Backup_restore/importdata') ?>
                    
                                            <div class="form-group row">
                                                <label for="file" class="col-sm-2 col-form-div"><?php echo display('import') ?></label>
                                                <div class="col-sm-4">
                                                    <input type="file" name="image" class="form-control"  placeholder="<?php echo display('import') ?>" id="file" required>
                                                </div>
                                            </div>
                                            <button type="submit" class="col-sm-offset-2 btn btn-success w-md m-b-5"><?php echo display('import') ?></button>
                    <?php echo form_close() ?>
                                        </div>-->
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="file" class="col-form-div"></label>
                            <div class="col-sm-offset-5 col-sm-4">
                                <a class="btn btn-success" href="<?php echo base_url('Backup_restore/importdata'); ?>" onclick="return confirm('Do you want to restore it!')">
                                    <?php echo display('restore_now'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

