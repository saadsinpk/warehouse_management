<!-- Add new customer start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('update_setting') ?></h1>
            <small><?php echo display('update_your_web_setting') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('web_settings') ?></a></li>
                <li class="active"><?php echo display('update_setting') ?></li>
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

        <!-- New customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('update_setting') ?> </h4>
                        </div>
                    </div>
                    <?php echo form_open_multipart('Cweb_setting/update_setting', array('class' => 'form-vertical', 'id' => 'insert_customer')) ?>
                    <div class="panel-body">
                        <div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"><?php echo display('logo') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="logo" id="logo" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="<?php echo base_url(); ?>{logo}" class="img img-responsive" height="100" width="100">
                                <input name ="old_logo" type="hidden" value="{logo}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mini_logo" class="col-sm-3 col-form-label"><?php echo display('mini_logo') ?> <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="mini_logo" id="logo" type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mini_logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="<?php echo base_url(); ?>{mini_logo}" class="img img-responsive" height="100" width="100">
                                <input name ="old_minilogo" type="hidden" value="{mini_logo}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_logo" class="col-sm-3 col-form-label"><?php echo display('invoice_logo') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="invoice_logo" id="invoice_logo" type="file">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_logo" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="<?php echo base_url(); ?>{invoice_logo}" class="img img-responsive" height="100" width="100">
                                <input name ="old_invoice_logo" type="hidden" value="{invoice_logo}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="favicon" class="col-sm-3 col-form-label"><?php echo display('favicon') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="favicon" id="favicon" type="file" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="favicon" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-6">
                                <img src="<?php echo base_url(); ?>{favicon}" class="img img-responsive" height="100" width="100">
                                <input name ="old_favicon" type="hidden" value="{favicon}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency" class="col-sm-3 col-form-label"><?php echo display('currency') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="currency" id="currency">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="$" <?php
                                    if ($currency == '$') {
                                        echo "selected";
                                    }
                                    ?>>$ USD</option>
                                    <option value="₱" <?php
                                    if ($currency == '₱') {
                                        echo "selected";
                                    }
                                    ?>>₱ Peso </option> 
                                    <option value="AU$" <?php
                                    if ($currency == 'AU$') {
                                        echo "selected";
                                    }
                                    ?>>$ AUD</option>
                                    <option value="ƒ" <?php
                                    if ($currency == 'ƒ') {
                                        echo "selected";
                                    }
                                    ?>>ƒ AWD</option>
                                    <option value="R$" <?php
                                    if ($currency == 'R$') {
                                        echo "selected";
                                    }
                                    ?>>R$ BRL</option>
                                    <option value="¥" <?php
                                    if ($currency == '¥') {
                                        echo "selected";
                                    }
                                    ?>>¥ CNY</option>
                                    <option value="₡" <?php
                                    if ($currency == '₡') {
                                        echo "selected";
                                    }
                                    ?>>₡ CRC</option>
                                    <option value="kn" <?php
                                    if ($currency == 'kn') {
                                        echo "selected";
                                    }
                                    ?>>kn HRK</option>
                                    <option value="£" <?php
                                    if ($currency == '£') {
                                        echo "selected";
                                    }
                                    ?>>£ EGP</option>
                                    <option value="€" <?php
                                    if ($currency == '€') {
                                        echo "selected";
                                    }
                                    ?>>€ EUR</option>
                                    <option value="Rs" <?php
                                    if ($currency == 'Rs') {
                                        echo "selected";
                                    }
                                    ?>>Rs INR</option>
                                    <option value="R" <?php
                                    if ($currency == 'R') {
                                        echo "selected";
                                    }
                                    ?>>R ZAR</option>
                                    <option value="₩" <?php
                                    if ($currency == '₩') {
                                        echo "selected";
                                    }
                                    ?>>₩ KRW</option>
                                    <!--<option value="৳" <?php
                                    if ($currency == '৳') {
                                        echo "selected";
                                    }
                                    ?>>৳ BDT</option>-->
                                    <option value="TK" <?php
                                    if ($currency == 'TK') {
                                        echo "selected";
                                    }
                                    ?>>৳ BDT</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency_position" class="col-sm-3 col-form-label"><?php echo display('currency_position') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="currency_position" id="currency_position">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="0" <?php
                                    if ($currency_position == 0) {
                                        echo "selected";
                                    }
                                    ?>><?php echo display('left') ?></option>
                                    <option value="1" <?php
                                    if ($currency_position == 1) {
                                        echo "selected";
                                    }
                                    ?>><?php echo display('right') ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_format" class="col-sm-3 col-form-label"><?php echo display('date_format') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control select2" name ="date_format" id="date_format">
                                    <option value="">-- select one --</option>
                                    <option value="1" <?php
                                    if ($date_format == 1) {
                                        echo 'selected';
                                    }
                                    ?>>dd-mm-yyyy</option>
                                    <option value="2" <?php
                                    if ($date_format == 2) {
                                        echo 'selected';
                                    }
                                    ?>>mm-dd-yyyy</option>
                                    <option value="3" <?php
                                    if ($date_format == 3) {
                                        echo 'selected';
                                    }
                                    ?>>yyyy-mm-dd</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="footer_text" class="col-sm-3 col-form-label"><?php echo display('footer_text') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="footer_text" id="footer_text" type="text" placeholder="Foter Text" value="{footer_text}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="language" class="col-sm-3 col-form-label"><?php echo display('language') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <?php
                                echo form_dropdown('language', $language, '', 'class="form-control" id="language"');
                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lrt" class="col-sm-3 col-form-label"><?php echo display('ltr_or_rtr') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="rtr" id="lrt">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="0" <?php
                                    if ($rtr == 0) {
                                        echo "selected";
                                    }
                                    ?>><?php echo display('ltr') ?></option>
                                    <option value="1" <?php
                                    if ($rtr == 1) {
                                        echo "selected";
                                    }
                                    ?>><?php echo display('rtr') ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="captcha" class="col-sm-3 col-form-label"><?php echo display('captcha') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="captcha" id="captcha">
                                    <option value=""><?php echo display('select_one') ?></option>
                                    <option value="0" <?php
                                    if ($captcha == 0) {
                                        echo "selected";
                                    }
                                    ?>><?php echo display('active') ?></option>
                                    <option value="1" <?php
                                    if ($captcha == 1) {
                                        echo "selected";
                                    }
                                    ?>><?php echo display('inactive') ?></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="site_key" class="col-sm-3 col-form-label"><?php echo display('site_key') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="site_key" id="site_key" type="text" placeholder="<?php echo display('site_key') ?> " value="{site_key}">
                            </div>
                        </div>    

                        <div class="form-group row">
                            <label for="secret_key" class="col-sm-3 col-form-label"><?php echo display('secret_key') ?> <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="secret_key" id="secret_key" type="text" placeholder="<?php echo display('secret_key') ?>" value="{secret_key}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="header_bgcolor" class="col-sm-3 col-form-label"><?php echo display('header_bgcolor') ?> </label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="header_bgcolor" id="header_bgcolor" type="color" value="{header_bgcolor}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="logo_bgcolor" class="col-sm-3 col-form-label"><?php echo display('logo_bgcolor') ?> </label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="logo_bgcolor" id="logo_bgcolor" type="color" value="{logo_bgcolor}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sidebar_bgcolor" class="col-sm-3 col-form-label"><?php echo display('sidebar_bgcolor') ?> </label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="sidebar_bgcolor" id="sidebar_bgcolor" type="color"  value="{sidebar_bgcolor}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="treeview_bgcolor" class="col-sm-3 col-form-label"><?php echo display('treeview_bgcolor') ?> </label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="treeview_bgcolor" id="treeview_bgcolor" type="color" value="{treeview_bgcolor}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="link_hover" class="col-sm-3 col-form-label"><?php echo display('link_hover') ?> </label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="link_hover" id="link_hover" type="color" value="{link_hover}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="font_color" class="col-sm-3 col-form-label"><?php echo display('font_color') ?> </label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="font_color" id="font_color" type="color" value="{font_color}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-customer" class="btn custom_btn custom_fontcolor btn-large" name="add-customer" value="<?php echo display('save_changes') ?>" />
<!--                                <input type="button" onclick="return confirm('It is disabled only at demo mode!')" id="add-customer" class="btn btn-success btn-large" name="add-customer" value="<?php echo display('save_changes') ?>" />-->
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Add new customer end -->



