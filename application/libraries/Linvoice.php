<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Linvoice {

    //Retrieve  Invoice List
    public function invoice_list($links, $perpage, $page, $pagenum) {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');

        $invoices_list = $CI->Invoices->invoice_list($perpage, $page);
        if (!empty($invoices_list)) {
            foreach ($invoices_list as $k => $v) {
//                $invoices_list[$k]['final_date'] = $CI->occational->dateConvert($invoices_list[$k]['date']);
                $invoices_list[$k]['final_date'] = $CI->occational->dateConvertMyformat($invoices_list[$k]['date']);
                if($invoices_list[$k]['invoice_status']==0){
                    if($_SESSION['user_role']==14){
                        $data_location_email=$invoices_list[$k]['location_email'];
                        $locName=str_replace(" ","_",$invoices_list[$k]['location_name']);
                        $data_location_name=$locName;
                        $cls="work";
                        $data_invoice_id=$invoices_list[$k]['id'];
                    }else{
                        $cls="";
                        $data_invoice_id='';
                        $data_location_email='';
                        $data_location_name='';
                    }
                    $invoices_list[$k]['invoice_status']='<button data-id="'.$data_invoice_id.'" data-location-email="'.$data_location_email.'" data-location-name="'.$data_location_name.'" class="btn btn-danger '.$cls.'">Not Approved</button>';
                }else{
                    $invoices_list[$k]['invoice_status']='<button class="btn btn-success">Approved</button>';
                }
                if($invoices_list[$k]['invoice_status_for_edit']==0){
                    $return_found_early=$CI->Invoices->invoice_count_early($invoices_list[$k]['invoice_id']);
                    $return_found_late=$CI->Invoices->invoice_count($invoices_list[$k]['invoice_id']); 
                    if(
                        ($_SESSION['user_role']==15) 
                    || 
                        (
                            ($return_found_early['order_return']>0 || $return_found_early['order_product_return']>0) && ($_SESSION['user_role']==14)
                        ) 
                    ||
                        (
                            ($return_found_late['order_return']>0) || ($return_found_late['order_product_return']==$return_found_late['invoice_details'])
                        )
                    ){
                        $invoices_list[$k]['return_popup']='&nbsp;<input name="url" type="hidden" id="url_' . $rowdata->id . '" value="" /><a onclick="invoice_return('.$invoices_list[$k]['invoice_id'].')" style="cursor:pointer;color:#fff;" class="btn btn-primary btn-sm mr-1 btn-xs" data-toggle="tooltip" data-placement="left" title="Return"><i class="fa fa-undo" aria-hidden="true"></i></a>';
                    }
                    else{
                         $invoices_list[$k]['return_popup']="";
                    }
                }else{
                     $invoices_list[$k]['return_popup']="";
                }
                if($invoices_list[$k]['invoice_status_for_edit']==0){
                    $invoices_list[$k]['invoice_status_for_edit']='<a href="'.base_url().'Cinvoice/invoice_update_form/'.$invoices_list[$k]['invoice_id'].'" class="btn btn-info btn-xs" title="'.display("update").'" data-toggle="tooltip" data-placement="left"><i class="fa fa-pencil" aria-hidden="true"></i></a>';
                }else{
                    $invoices_list[$k]['invoice_status_for_edit']="";
                }
            }
            $i = 0;
            foreach ($invoices_list as $k => $v) {
                $i++;
                $invoices_list[$k]['sl'] = $i+$pagenum;
            }
        }
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $data = array(
            'title' => 'Invoices List',
            'invoices_list' => $invoices_list,
            'links' => $links,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );
        $invoiceList = $CI->parser->parse('invoice/invoice', $data, true);
        return $invoiceList;
    }

    //Pos invoice add form
    public function pos_invoice_add_form() {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $customer_details = $CI->Invoices->pos_customer_setup();

        $data = array(
            'title' => 'Add invoice',
            'customer_name' => $customer_details[0]['customer_name'],
            'customer_id' => $customer_details[0]['customer_id'],
            'location_list' => $CI->Invoices->locationListInvoice()
        );
        $invoiceForm = $CI->parser->parse('invoice/add_pos_invoice_form', $data, true);
        return $invoiceForm;
    }

    //Retrieve  Invoice List
    public function search_inovoice_item($customer_id) {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $CI->load->library('occational');
        $invoices_list = $CI->Invoices->search_inovoice_item($customer_id);
        if (!empty($invoices_list)) {
            foreach ($invoices_list as $k => $v) {
                $invoices_list[$k]['final_date'] = $CI->occational->dateConvert($invoices_list[$k]['date']);
            }
            $i = 0;
            foreach ($invoices_list as $k => $v) {
                $i++;
                $invoices_list[$k]['sl'] = $i;
            }
        }
        $data = array(
            'title' => 'Invoices Search Item',
            'invoices_list' => $invoices_list
        );
        $invoiceList = $CI->parser->parse('invoice/invoice', $data, true);
        return $invoiceList;
    }

    //Sub Category Add
    public function invoice_add_form() {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $CI->load->model('Customers');
        $get_walking_customers = $CI->Customers->get_walking_customers();
//        echo $get_customers[0]->customer_name; die();
        
        $data = array(
            'title' => 'Add invoice',
//            'get_customers' => $get_walking_customers,
            'customer_name' => $get_walking_customers[0]->customer_name,
            'customer_id' => $get_walking_customers[0]->customer_id,
            'location_list' => $CI->Invoices->locationListInvoice()
        );
        $invoiceForm = $CI->parser->parse('invoice/add_invoice_form', $data, true);
        return $invoiceForm;
    }

    public function insert_invoice($data) {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $CI->Invoices->invoice_entry($data);
        return true;
    }

    //invoice Edit Data
    public function invoice_edit_data($invoice_id) {
        $CI = & get_instance();
        $CI->load->model('Invoices');
//        $get_customers = $CI->Customers->get_walking_customers();
        $invoice_detail = $CI->Invoices->retrieve_invoice_editdata($invoice_id);
//        echo '<pre>';        print_r($invoice_detail);die();
        foreach ($invoice_detail as $k => $v) {
            if($invoice_detail[$k]['cartoon']>0){
                $invoice_detail[$k]['per_cartoon'] = ($invoice_detail[$k]['quantity'] / $invoice_detail[$k]['cartoon']);
            }
        }
        $i = 0;
        foreach ($invoice_detail as $k => $v) {
            $i++;
            $invoice_detail[$k]['sl'] = $i;
        }

        $editInvoice=$CI->Invoices->pos_invoice_setup($invoice_detail[0]['product_id']);
        $data = array(
            'invoice_id' => $invoice_detail[0]['invoice_id'],
            'customer_id' => $invoice_detail[0]['customer_id'],
            'store_id' => $invoice_detail[0]['store_id'],
            'customer_name' => $invoice_detail[0]['customer_name'],
            'date' => $invoice_detail[0]['date'],
            'total_amount' => $invoice_detail[0]['total_amount'],
            'paid_amount' => $invoice_detail[0]['paid_amount'],
            'due_amount' => $invoice_detail[0]['due_amount'],
            'tax' => $invoice_detail[0]['tax'],
            'total_tax' => $invoice_detail[0]['total_tax'],
            'total_discount' => $invoice_detail[0]['total_discount'],
            'invoice_all_data' => $invoice_detail,
            'location_list' => $CI->Invoices->locationListInvoice(),
            'available_carton'=> $editInvoice->total_product
        );
        $chapterList = $CI->parser->parse('invoice/edit_invoice_form', $data, true);
        return $chapterList;
    }

    //invoice html Data jami
    public function invoice_html_data($invoice_id) {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $invoice_detail = $CI->Invoices->retrieve_invoice_html_data($invoice_id);

        $subTotal_quantity = 0;
        $subTotal_cartoon = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;
        if (!empty($invoice_detail)) {
            foreach ($invoice_detail as $k => $v) {
//                $invoice_detail[$k]['final_date'] = $CI->occational->dateConvert($invoice_detail[$k]['date']);
                $invoice_detail[$k]['final_date'] = $CI->occational->dateConvertMyformat($invoice_detail[$k]['date']);
                if($invoice_detail[$k]['cartoon']>0){
                    $invoice_detail[$k]['per_cartoon'] = $invoice_detail[$k]['quantity'] / $invoice_detail[$k]['cartoon'];
                }
                $subTotal_quantity = $subTotal_quantity + $invoice_detail[$k]['quantity'];

                $subTotal_ammount = $subTotal_ammount + $invoice_detail[$k]['total_price'];

                $subTotal_cartoon = $subTotal_cartoon + $invoice_detail[$k]['cartoon'];
                if($invoice_detail[$k]['invoice_status_html']==0){
                    $invoice_detail[$k]['invoice_status_html']='<button class="btn btn-warning">Processing</button>';
                }else{
                    $invoice_detail[$k]['invoice_status_html']='<button class="btn btn-success">Dispatch</button>';
                }
            }

            $i = 0;
            foreach ($invoice_detail as $k => $v) {
                $i++;
                $invoice_detail[$k]['sl'] = $i;
            }
        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Invoices->retrieve_company();
        $data = array(
            'ttile' => "Invoice View",
            'invoice_id' => $invoice_detail[0]['invoice_id'],
            'invoice_no' => $invoice_detail[0]['invoice'],
            'customer_name' => $invoice_detail[0]['customer_name'],
            'customer_address' => $invoice_detail[0]['customer_address'],
            'customer_mobile' => $invoice_detail[0]['customer_mobile'],
            'customer_email' => $invoice_detail[0]['customer_email'],
            'final_date' => $invoice_detail[0]['final_date'],
            'total_amount' => number_format($invoice_detail[0]['total_amount'], 2, '.', ','),
            'subTotal_cartoon' => $subTotal_cartoon,
            'subTotal_quantity' => $subTotal_quantity,
            'total_discount' => number_format($invoice_detail[0]['total_discount'], 2, '.', ','),
            'subTotal_ammount' => number_format($subTotal_ammount, 2, '.', ','),
            'tax' => number_format($invoice_detail[0]['tax'], 2, '.', ','),
            'paid_amount' => number_format($invoice_detail[0]['paid_amount'], 2, '.', ','),
            'due_amount' => number_format($invoice_detail[0]['due_amount'], 2, '.', ','),
            'invoice_all_data' => $invoice_detail,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'location_name' => $invoice_detail[0]['location_name']
        );

        $chapterList = $CI->parser->parse('invoice/invoice_html', $data, true);
        return $chapterList;
    }

    //POS invoice html Data
    public function pos_invoice_html_data($invoice_id, $flag = null) {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $invoice_detail = $CI->Invoices->retrieve_invoice_html_data($invoice_id);
//        dd($invoice_detail);

        $subTotal_quantity = 0;
        $subTotal_cartoon = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;
        if (!empty($invoice_detail)) {
            foreach ($invoice_detail as $k => $v) {
                $invoice_detail[$k]['final_date'] = $CI->occational->dateConvert($invoice_detail[$k]['date']);
                if($invoice_detail[$k]['cartoon']>0){
                    $invoice_detail[$k]['per_cartoon'] = $invoice_detail[$k]['quantity'] / $invoice_detail[$k]['cartoon'];
                }
                $subTotal_quantity = $subTotal_quantity + $invoice_detail[$k]['quantity'];

                $subTotal_ammount = $subTotal_ammount + $invoice_detail[$k]['total_price'];

                $subTotal_cartoon = $subTotal_cartoon + $invoice_detail[$k]['cartoon'];

                if($invoice_detail[$k]['invoice_status_html']==0){
                    $invoice_detail[$k]['invoice_status_html']='<button class="btn btn-warning">Processing</button>';
                }else{
                    $invoice_detail[$k]['invoice_status_html']='<button class="btn btn-success">Dispatch</button>';
                }
            }

            $i = 0;
            foreach ($invoice_detail as $k => $v) {
                $i++;
                $invoice_detail[$k]['sl'] = $i;
            }
        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Invoices->retrieve_company();
        $data = array(
            'ttile' => "Invoice View",
            'invoice_id' => $invoice_detail[0]['invoice_id'],
            'invoice_no' => $invoice_detail[0]['invoice'],
            'customer_name' => $invoice_detail[0]['customer_name'],
            'customer_address' => $invoice_detail[0]['customer_address'],
            'customer_mobile' => $invoice_detail[0]['customer_mobile'],
            'customer_email' => $invoice_detail[0]['customer_email'],
            'final_date' => $invoice_detail[0]['final_date'],
            'total_amount' => number_format($invoice_detail[0]['total_amount'], 2, '.', ','),
            'subTotal_cartoon' => $subTotal_cartoon,
            'subTotal_quantity' => $subTotal_quantity,
            'total_discount' => number_format($invoice_detail[0]['total_discount'], 2, '.', ','),
            'subTotal_ammount' => number_format($subTotal_ammount, 2, '.', ','),
            'tax' => number_format($invoice_detail[0]['tax'], 2, '.', ','),
            'paid_amount' => number_format($invoice_detail[0]['paid_amount'], 2, '.', ','),
            'due_amount' => number_format($invoice_detail[0]['due_amount'], 2, '.', ','),
            'invoice_all_data' => $invoice_detail,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'location_name' => $invoice_detail[0]['location_name']
        );

        $chapterList = $CI->parser->parse('invoice/pos_invoice_html', $data, true);
        return $chapterList;
    }
    public function pos_invoice_html_printView($invoice_id, $flag = null) {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $invoice_detail = $CI->Invoices->retrieve_invoice_html_data($invoice_id);
//        dd($invoice_detail);

        $subTotal_quantity = 0;
        $subTotal_cartoon = 0;
        $subTotal_discount = 0;
        $subTotal_ammount = 0;
        if (!empty($invoice_detail)) {
            foreach ($invoice_detail as $k => $v) {
                $invoice_detail[$k]['final_date'] = $CI->occational->dateConvert($invoice_detail[$k]['date']);
                if($invoice_detail[$k]['cartoon']>0){
                    $invoice_detail[$k]['per_cartoon'] = $invoice_detail[$k]['quantity'] / $invoice_detail[$k]['cartoon'];
                }

                $subTotal_quantity = $subTotal_quantity + $invoice_detail[$k]['quantity'];

                $subTotal_ammount = $subTotal_ammount + $invoice_detail[$k]['total_price'];

                $subTotal_cartoon = $subTotal_cartoon + $invoice_detail[$k]['cartoon'];
            }

            $i = 0;
            foreach ($invoice_detail as $k => $v) {
                $i++;
                $invoice_detail[$k]['sl'] = $i;
            }
        }

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $company_info = $CI->Invoices->retrieve_company();
        $data = array(
            'ttile' => "Invoice View",
            'invoice_id' => $invoice_detail[0]['invoice_id'],
            'invoice_no' => $invoice_detail[0]['invoice'],
            'customer_name' => $invoice_detail[0]['customer_name'],
            'customer_address' => $invoice_detail[0]['customer_address'],
            'customer_mobile' => $invoice_detail[0]['customer_mobile'],
            'customer_email' => $invoice_detail[0]['customer_email'],
            'final_date' => $invoice_detail[0]['final_date'],
            'total_amount' => number_format($invoice_detail[0]['total_amount'], 2, '.', ','),
            'subTotal_cartoon' => $subTotal_cartoon,
            'subTotal_quantity' => $subTotal_quantity,
            'total_discount' => number_format($invoice_detail[0]['total_discount'], 2, '.', ','),
            'subTotal_ammount' => number_format($subTotal_ammount, 2, '.', ','),
            'tax' => number_format($invoice_detail[0]['tax'], 2, '.', ','),
            'paid_amount' => number_format($invoice_detail[0]['paid_amount'], 2, '.', ','),
            'due_amount' => number_format($invoice_detail[0]['due_amount'], 2, '.', ','),
            'invoice_all_data' => $invoice_detail,
            'company_info' => $company_info,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        $chapterList = $CI->parser->parse('invoice/pos_invoice_html', $data, true);
        return $chapterList;
    }

    //Retrieve invoice data by receipt id
    public function receipt_html_data($receipt_id) {
        $CI = & get_instance();
        $CI->load->model('Invoices');
        $CI->load->model('Web_settings');
        $CI->load->library('occational');
        $invoice_detail = $CI->Invoices->retrieve_receipt_html_data($receipt_id);

        $currency_details = $CI->Web_settings->retrieve_setting_editdata();
        $weblogo = $CI->Invoices->retript_web_logo();
        $company_info = $CI->Invoices->retrieve_company();
        $data = array(
            'ttile' => "Invoice View",
            'receipt_no' => $invoice_detail[0]['receipt_no'],
            'customer_name' => $invoice_detail[0]['customer_name'],
            'date' => $invoice_detail[0]['date'],
            'amount' => $invoice_detail[0]['amount'],
            'total_amount' => $invoice_detail[0]['total_amount'],
            'check_no' => $invoice_detail[0]['cheque_no'],
            'description' => $invoice_detail[0]['description'],
            'company_info' => $company_info,
            'logo' => $weblogo[0]['logo'],
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );

        $chapterList = $CI->parser->parse('invoice/receipt_html', $data, true);
        return $chapterList;
    }

}

?>