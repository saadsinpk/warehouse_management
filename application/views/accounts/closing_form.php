<!-- Closing Account start -->
<div class="content-wrapper removeContentwraper">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('closing_account') ?></h1>
            <small><?php echo display('close_your_account') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('accounts') ?></a></li>
                <li class="active"><?php echo display('closing_account') ?></li>
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
                    <?php if ($this->permission->check_label('create_account')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Account_controller') ?>')" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('create_account') ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('manage_account')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Account_Controller/manage_account') ?>')" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_account') ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('payment')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpayment') ?>')" class="btn btn-success m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('payment') ?></a>
                    <?php } 
                    if($this->permission->check_label('receipt')->read()->access()){
                    ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpayment/receipt_transaction') ?>')" class="btn custom_btn custom_fontcolor m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('receipt') ?></a>
                    <?php } 
                    if($this->permission->check_label('manage_transaction')->read()->access()){
                    ?>
                    <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Cpayment/manage_payment') ?>')" class="btn btn-danger m-b-5 m-r-2"><i class="ti-align-justify"> </i> <?php echo display('manage_transaction') ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h3><p class="cashclosing_title">
                                    <?php
                                    // echo display('company_name');
                                    echo "<br>";
                                    echo "Cash Closing";
                                    echo "<br>";
                                    echo 'Date' . ':' . date('Y-m-d');
                                    echo "(";
                                    ?>  <span id="time"></span><?php
                                    echo date(" a", time());
                                    echo ")";
                                    ?></p></h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open_multipart('Caccounts/add_daily_closing', array('class' => 'form-vertical', 'id' => 'daily_closing')) ?>
                        <div class="form-group row">
                            <label for="last_day_closing" class="col-sm-3 col-form-label"><?php echo display('last_day_closing') ?></label>
                            <div class="col-sm-6">
                                <input type="text" name="last_day_closing" class="form-control" id="last_day_closing" value="{last_day_closing}" readonly="readonly" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cash_in" class="col-sm-3 col-form-label"><?php echo display('receipt') ?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="cash_in" name="cash_in" value="{cash_in}" readonly="readonly" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cash_out" class="col-sm-3 col-form-label"><?php echo display('payment') ?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="cash_out" name="cash_out" value="{cash_out}" readonly="readonly" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cash_in_hand" class="col-sm-3 col-form-label"><?php echo display('balance') ?></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="cash_in_hand" name="cash_in_hand" value="{cash_in_hand}" readonly="readonly" required />
                            </div>
                        </div>

                        <!--  <div class="form-group row">
                             <label for="bank" class="col-sm-3 col-form-label"><?php echo display('bank') ?></label>
                             <div class="col-sm-6">
                                 <input type="text" class="form-control" id="bank" name="bank_balance" value="{bank_balance}" readonly="readonly" required />
                             </div>
                         </div>
                        -->
                        <!--                        <div class="form-group row">
                                                    <label for="adjusment" class="col-sm-3 col-form-label"><?php echo display('adjustment') ?></label>
                                                    <div class="col-sm-6">
                                                        <input type="number" class="form-control" id="adjusment" name="adjusment" placeholder="<?php echo display('adjustment') ?>" />
                                                    </div>
                                                </div>-->

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="submit" id="add-deposit" class="btn custom_btn custom_fontcolor" name="add-deposit" value="<?php echo display('day_closing') ?>" required />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6">   
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('cash_in_hand') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center"><?php echo display('note_name') ?></th>
                                    <th class="text-center"><?php echo display('pcs') ?></th>
                                    <th class="text-center"><?php echo display('ammount') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="1000"><?php echo display('1000') ?></td>
                                    <td><input type="number" class="form-control text_1" name="thousands" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_1_bal" readonly=""></td>
                                </tr> 
                                <tr>
                                    <td class="500"><?php echo display('500') ?></td>
                                    <td><input type="number" class="form-control text_2" name="fivehnd" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_2_bal" readonly=""></td>
                                </tr>   
                                <tr>
                                    <td class="100"><?php echo display('100') ?></td>
                                    <td><input type="number" class="form-control text_3" name="hundrad" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_3_bal" readonly=""></td>
                                </tr>   
                                <tr>
                                    <td class="50"><?php echo display('50') ?></td>
                                    <td><input type="number" class="form-control text_4" name="fifty" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_4_bal" readonly=""></td>
                                </tr>   
                                <tr>
                                    <td class="20"><?php echo display('20') ?></td>
                                    <td><input type="number" class="form-control text_5" name="twenty" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_5_bal" readonly=""></td>
                                </tr>   
                                <tr>
                                    <td class="10"><?php echo display('10') ?></td>
                                    <td><input type="number" class="form-control text_6" name="ten" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_6_bal" readonly=""></td>
                                </tr>   
                                <tr>
                                    <td class="5"><?php echo display('5') ?></td>
                                    <td><input type="number" class="form-control text_7" name="five" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_7_bal" readonly=""></td>
                                </tr>   
                                <tr>
                                    <td class="2"><?php echo display('2') ?></td>
                                    <td><input type="number" class="form-control text_8" name="two" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_8_bal" readonly=""></td>
                                </tr>
                                <tr>
                                    <td class="1"><?php echo display('1') ?></td>
                                    <td><input type="number" class="form-control text_9" name="one" onkeyup="calculator()"></td>
                                    <td><input type="text" class="form-control text_9_bal" readonly=""></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" align="right"><b><?php echo display('grand_total') ?></b></td>
                                    <td class=""><input type="text" class="form-control total_money" readonly="" name="grndtotal"></td>
                                </tr>
                                <?php echo form_close() ?>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- Calculator form -->

    </section>
</div>
<!-- Closing Account end -->
<script src="<?php echo base_url() ?>assets/js/accounts.js" type="text/javascript"></script>




