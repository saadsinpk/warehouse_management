<!-- Customer js php -->
<script src="<?php echo base_url() ?>my-assets/js/admin_js/json/customer.js.php" ></script>
<!-- Manage credit customer -->
<div class="content-wrapper removeContentwraper" id="bodycontent">
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-note2"></i>
        </div>
        <div class="header-title">
            <h1><?php echo display('credit_customer') ?></h1>
            <small><?php echo display('manage_your_credit_customer') ?></small>
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('customer') ?></a></li>
                <li class="active"><?php echo display('credit_customer') ?></li>
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

        <!-- Manage credit customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-b-10 float_right">
                    <?php if ($this->permission->check_label('add_customer')->create()->access()) { ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Ccustomer/'); ?>')" class="btn custom_btn custom_fontcolor"><?php echo display('add_customer'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('manage_customer')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Ccustomer/manage_customer'); ?>')" class="btn btn-success"><?php echo display('manage_customer'); ?></a>
                        <?php
                    }
                    if ($this->permission->check_label('paid_customer')->read()->access()) {
                        ?>
                        <a href="javascript:void(0)" onclick="pageopen('<?php echo base_url('Ccustomer/paid_customer'); ?>')" class="btn btn-warning"><?php echo display('paid_customer'); ?></a>
                    <?php } ?>
                    <button class="btn btn-info default" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Filter
                    </button>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-default collapse" id="collapseExample">
                    <div class="panel-body"> 
                        <form action="<?php echo base_url('Ccustomer/credit_customer_search_item') ?>" class="form-inline" method="post" accept-charset="utf-8">
                            <label class="select m-r-15"><?php echo display('customer_name') ?>:</label>
                            <select class="form-control w-25percent" name="customer_id">
                                <?php
                                foreach ($customers_list as $customers) {
                                    $sql = "SELECT (SELECT SUM(amount) FROM customer_ledger WHERE d_c ='d' AND customer_id = '" . $customers['customer_id'] . "') as  debit, 
                                                (SELECT SUM(amount) FROM customer_ledger WHERE d_c ='c' AND customer_id = '" . $customers['customer_id'] . "') as  credit";
                                    $query = $this->db->query($sql)->result();
                                    $balance = $query[0]->debit - $query[0]->credit;
                                    if ($balance > 0) {
                                        ?>
                                        <option value="<?php echo $customers['customer_id']; ?>"><?php echo $customers['customer_name']; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>

                            <button type="submit" class="btn custom_btn custom_fontcolor"><?php echo display('search') ?></button>

                        </form>		            
                    </div>
                </div>
            </div>
        </div>

        <!-- Manage Customer -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4><?php echo display('credit_customer') ?></h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <!--<th><?php echo display('sl') ?></th>-->
                                        <th><?php echo display('customer_name') ?></th>
                                        <th><?php echo display('address') ?></th>
                                        <th><?php echo display('mobile') ?></th>
                                        <th style="text-align:right !Important"><?php echo display('balance') ?></th>
                                        <th style="text-align:center !Important"><?php echo display('action') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if ($customers_list) {
                                        foreach ($customers_list as $customer) {
                                            $sql = "SELECT (SELECT SUM(amount) FROM customer_ledger WHERE d_c ='d' AND customer_id = '" . $customer['customer_id'] . "') as  debit, 
                                                (SELECT SUM(amount) FROM customer_ledger WHERE d_c ='c' AND customer_id = '" . $customer['customer_id'] . "') as  credit";
                                            $query = $this->db->query($sql)->result();
                                            $balance = $query[0]->debit - $query[0]->credit;
                                            if ($balance > 0) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <a href="<?php echo base_url() . 'Ccustomer/customerledger/' . $customer['customer_id'] ?>"><?php echo $customer['customer_name']; ?></a>				
                                                    </td>
                                                    <td><?php echo $customer['customer_address']; ?></td>
                                                    <td><?php echo $customer['customer_mobile']; ?></td>
                                                    <td style="text-align:right !Important">
                                                        <?php
                                                        echo (($position == 0) ? "$currency " . number_format($balance, 2, '.', ',') : number_format($balance, 2, '.', ',') . " $currency");
                                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php
                                                        echo form_open();
                                                        if ($this->permission->check_label('manage_customer')->update()->access()) {
                                                            ?>
                                                            <a href="<?php echo base_url() . 'Ccustomer/customer_update_form/' . $customer['customer_id']; ?>" class="btn custom_btn custom_fontcolor btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <?php
                                                        }
                                                        if ($this->permission->check_label('manage_customer')->delete()->access()) {
                                                            ?>
                                                            <a href="javascript:void(0)" class="deleteCustomer btn btn-danger btn-sm" name="<?php echo $customer['customer_id']; ?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                            <?php
                                                        }
                                                        echo form_close()
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <!--                                        {customers_list}
                                                                                <tr>
                                                                                    <td>{sl}</td>
                                                                                    <td>
                                                                                        <a href="<?php echo base_url() . 'Ccustomer/customerledger/{customer_id}'; ?>">{customer_name}</a>				
                                                                                    </td>
                                                                                    <td>{customer_address}</td>
                                                                                    <td>{customer_mobile}</td>
                                                                                    <td style="text-align:right !Important"> <?php echo (($position == 0) ? "$currency {customer_balance}" : "{customer_balance} $currency") ?></td>
                                                                                    <td>
                                                                            <center>
                                        <?php echo form_open() ?>
                                                                                <a href="<?php echo base_url() . 'Ccustomer/customer_update_form/{customer_id}'; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="<?php echo display('update') ?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        
                                                                                <a href="" class="deleteCustomer btn btn-danger btn-sm" name="{customer_id}" data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo display('delete') ?> "><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        
                                        <?php echo form_close() ?>
                                                                            </center>
                                                                            </td>
                                                                            </tr>
                                                                            {/customers_list}-->
                                        <?php
                                    }
                                    ?>
                                </tbody>
<!--                                <tfoot>
                                    <tr>
                                        <td style="text-align:right !Important" colspan="4"><b> <?php echo display('grand_total') ?></b></td>
                                        <td style="text-align:right !Important">
                                            <b><?php echo (($position == 0) ? "$currency {subtotal}" : "{subtotal} $currency") ?></b>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>-->
                                <?php if (empty($customers_list)) { ?>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center text-danger" colspan="9"><?php echo display('data_not_found'); ?></th>
                                        </tr>
                                    </tfoot>
                                <?php } ?>
                            </table>
                            <div class="text-right"><?php echo $links ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Manage Customer End -->

<script src="<?php echo base_url() ?>assets/js/customer.js" type="text/javascript"></script>
<!-- Delete Customer ajax code -->
<!--<script type="text/javascript">
                        //Delete Customer 
                        $(".deleteCustomer").click(function ()
                        {
                            var customer_id = $(this).attr('name');
                            var csrf_test_name = $("[name=csrf_test_name]").val();
                            var x = confirm("Are You Sure,Want to Delete ?");
                            if (x == true) {
                                $.ajax
                                        ({
                                            type: "POST",
                                            url: '<?php // echo base_url('Ccustomer/customer_delete')  ?>',
                                            data: {customer_id: customer_id, csrf_test_name: csrf_test_name},
                                            cache: false,
                                            success: function (datas)
                                            {
                                                pageopen('<?php // echo base_url('Ccustomer/credit_customer');  ?>');
                                            }
                                        });
                            }
                        });
</script>-->