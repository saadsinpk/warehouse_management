<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cinvoice extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Invoices');
        $this->load->model('Web_settings');
        $this->template->current_menu = 'memo';
    }

    public function index($carry = null) {
        $this->permission->check_label('new_invoice')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');

        $content = $CI->linvoice->invoice_add_form();
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //Search Inovoice Item
    public function search_inovoice_item() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('linvoice');

        $customer_id = $this->input->post('customer_id');
        $content = $CI->linvoice->search_inovoice_item($customer_id);
        $this->template->full_admin_html_view($content);
    }

    //Product Add Form
    public function manage_invoice($carry = null) {
        $this->permission->check_label('manage_invoice')->create()->redirect();
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $CI->load->model('Invoices');

        #        #pagination starts        #
        $config["base_url"] = base_url('Cinvoice/manage_invoice/1');
        $config["total_rows"] = $this->Invoices->invoice_list_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 4;
        $config["num_links"] = 5;
        /* This Application Must Be Used With BootStrap 3 * */
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tag_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        /* ends of bootstrap */
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $links = $this->pagination->create_links();
        $pagenum = $page;
        #        #pagination ends        #  
        $content = $this->linvoice->invoice_list($links, $config["per_page"], $page, $pagenum);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //POS invoice page load
    public function pos_invoice($carry = null) {
        $this->permission->check_label('pos_invoice')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $content = $CI->linvoice->pos_invoice_add_form();
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //Insert pos invoice
    public function insert_pos_invoice() {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $product_id = $this->input->post('product_id');

        $product_details = $CI->Invoices->pos_invoice_setup($product_id);

        $tr = " ";
        if (!empty($product_details)) {
//            $product_id = $this->generator(5);
            $product_id = $this->input->post('product_id');
            $tr .= "<tr id=\"row_" . $product_id . "\">
						<td class=\"\" style=\"width:220px\">
							
							<input type=\"text\" name=\"product_name\" onkeypress=\"invoice_productList(1);\" class=\"form-control productSelection \" value='" . $product_details->product_name . "- (" . $product_details->product_model . ")" . "' placeholder='" . display('product_name') . "' required=\"\" id=\"product_name\" >


							<input type=\"hidden\" class=\"form-control autocomplete_hidden_value product_id_" . $product_id . "\" name=\"product_id[]\" id=\"SchoolHiddenId_" . $product_id . "\" value = \"$product_details->product_id\" />
							
						</td>
						<td>
                            <input type=\"text\" name=\"available_quantity[]\" id=\"\" class=\"form-control text-right available_quantity_".$product_details->product_id."\" value='" . $product_details->total_product . "' readonly=\"\"/>
                        </td>

                       	<td>
                            <input type=\"number\" id=\"total_qntt_" . $product_id . "\" name=\"cartoon[]\" onkeyup=\"quantity_calculate('" . $product_id . "');\" onchange=\"quantity_calculate('" . $product_id . "');\" class=\"quantity_" . $product_id . " form-control text-right\" value=\"1\" min=\"1\" required/>
                        </td>
                        <td>
                            <input type=\"text\" name=\"\" value='" . $product_details->cartoon_quantity . "' class=\"ctnqntt_" . $product_id . " form-control text-right\" readonly=\"\" />
                        </td>
                        <td>
                            <input type=\"text\" name=\"product_quantity[]\" value='" . $product_details->cartoon_quantity . "' class=\"total_qntt_" . $product_id . " form-control text-right\" readonly=\"\" />
                        </td>


						<td style=\"width:85px\">
							<input type=\"text\" name=\"product_rate[]\" onkeyup=\"quantity_calculate('" . $product_id . "');\" onchange=\"quantity_calculate('" . $product_id . "');\" value='" . $product_details->price . "' id=\"price_item_" . $product_id . "\" class=\"price_item1 form-control text-right\" required/>
						</td>

						<td class=\"\">
							<input type=\"number\" name=\"discount[]\" onkeyup=\"quantity_calculate('" . $product_id . "');\" onchange=\"quantity_calculate('" . $product_id . "');\" id=\"discount_" . $product_id . "\" class=\"form-control text-right\" value =\"0.00\" min=\"0\"/>
						</td>

						<td class=\"text-right\" style=\"width:100px\">
							<input class=\"total_price form-control text-right\" type=\"text\" name=\"total_price[]\" id=\"total_price_" . $product_id . "\" value='" . $product_details->price . "' tabindex=\"-1\" readonly=\"readonly\"/>
						</td>

						<td>
							<input type=\"hidden\" id=\"total_tax_" . $product_id . "\" class=\"total_tax_1\" value='" . $product_details->tax . "'/>
                            <input type=\"hidden\" id=\"all_tax_" . $product_id . "\" class=\" total_tax\" value='" . ($product_details->tax * $product_details->cartoon_quantity) . "'/>

							<input type=\"hidden\" id=\"total_discount_" . $product_id . "\" class=\"total_tax_1\" />
							<input type=\"hidden\" id=\"all_discount_" . $product_id . "\" class=\"total_discount\"/>
							<input type=\"hidden\" id=\"all_discount_" . $product_id . "\" class=\"total_discount\"/>


							<button style=\"text-align: right;\" class=\"btn btn-danger\" type=\"button\" value='" . display('delete') . "' onclick=\"deleteRow(this)\">" . display('delete') . "</button>
						</td>
					</tr>";
            echo $tr;
        } else {
            return false;
        }
    }

    //Insert Product and uload
    public function insert_invoice() {
        //echo "wait";die();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $invoice_id = $CI->Invoices->invoice_entry();
     
        $this->session->set_userdata(array('message' => display('successfully_added')));
//        $this->invoice_inserted_data($invoice_id);
        redirect('Cinvoice/invoice_inserted_data/' . $invoice_id);
    }

    //invoice Update Form
    public function invoice_update_form($invoice_id) {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $content = $CI->linvoice->invoice_edit_data($invoice_id);
        $this->template->full_admin_html_view($content);
    }

    // invoice Update
    public function invoice_update() {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $invoice_id = $CI->Invoices->update_invoice();
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        $this->invoice_inserted_data($invoice_id);
    }

    //Retrive right now inserted data to cretae html
    public function invoice_inserted_data($invoice_id) {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $content = $CI->linvoice->invoice_html_data($invoice_id);
        $this->template->full_admin_html_view($content);
    }

    //Retrive invoice by receipt id
    public function receipt_inserted_data($receipt_id) {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');

        $content = $CI->linvoice->receipt_html_data($receipt_id);
        $this->template->full_admin_html_view($content);
    }

    //Retrive right now inserted data to cretae html
    public function pos_invoice_inserted_data($invoice_id, $flag = null) {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');
        $content = $CI->linvoice->pos_invoice_html_data($invoice_id, $flag);
        $this->template->full_admin_html_view($content);
    }

    //Retrive right now inserted data to cretae html
    public function pos_invoice_inserted_printview($invoice_id, $flag = null) {
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->library('linvoice');

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

                $invoice_detail[$k]['per_cartoon'] = $invoice_detail[$k]['quantity'] / $invoice_detail[$k]['cartoon'];

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
            'company_name' => $company_info[0]['company_name'],
            'address' => $company_info[0]['address'],
            'mobile' => $company_info[0]['mobile'],
            'email' => $company_info[0]['email'],
            'website' => $company_info[0]['website'],
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
        );
//        dd($data);
        $CI->load->view('invoice/pos_invoice_html_printView', $data);


//        $content = $CI->linvoice->pos_invoice_html_printView($invoice_id, $flag);
//        $this->template->full_admin_html_view($content);
    }

    // retrieve_product_data
    public function retrieve_product_data() {

        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $product_id = $this->input->post('product_id');
        //$product_info = $CI->Invoices->retrieve_product_data($product_id);
        //$product_stock_check = $this->product_stock_check($product_id);

        $product_info = $CI->Invoices->get_total_product($product_id);

        echo json_encode($product_info);
    }

    // retrieve_store_products
    public function retrieve_store_products() {

        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $store_id = $this->input->get('store_id');
        $text = $this->input->get('term');
        $store_product_info = $CI->Invoices->get_store_products($store_id,$text);
        $store_data=array();
        foreach($store_product_info as $key=> $store_product){
            $store_data[]=array(
                "label"=>$store_product['product_name'],
                "value"=>$store_product['product_id']
            );
        }
        // echo "<pre>";
        // print_r(json_encode($store_data));
        // echo "</pre>";
        echo json_encode($store_data);
    }

    // product_delete
    public function invoice_delete() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $invoice_id = $_POST['invoice_id'];

        // $tran_id = $this->db->select('transaction_id')->from('customer_ledger')->where('invoice_no', $invoice_id)->get()->result();

        $result = $CI->Invoices->delete_invoice($invoice_id);

        if ($result) {
            $this->session->set_userdata(array('message' => display('successfully_delete')));
            return true;
        }
    }

    public function invoice_approve() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $invoiceid = $_POST['invoiceid'];
        $locationEmail=$_POST['locationEmail'];
        $locationName=$_POST['locationName'];
        $locationName=str_replace("_"," ",$_POST['locationName']);
        

        $result = $CI->Invoices->approve_invoice($invoiceid,$locationEmail,$locationName);

        // echo "<pre>";
        // print_r($_result);
        // echo "</pre>";
        if ($result) {
            $this->session->set_userdata(array('message' =>'Successfully Approved'));
            return true;
        }
    }

    //AJAX INVOICE STOCKs
    public function product_stock_check($product_id) {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        //$product_id =  $this->input->post('product_id');

        $purchase_stocks = $CI->Invoices->get_total_purchase_item($product_id);
        $total_purchase = 0;
        if (!empty($purchase_stocks)) {
            foreach ($purchase_stocks as $k => $v) {
                $total_purchase = ($total_purchase + $purchase_stocks[$k]['quantity']);
            }
        }
        $sales_stocks = $CI->Invoices->get_total_sales_item($product_id);
        $total_sales = 0;
        if (!empty($sales_stocks)) {
            foreach ($sales_stocks as $k => $v) {
                $total_sales = ($total_sales + $sales_stocks[$k]['quantity']);
            }
        }

        $final_total = ($total_purchase - $total_sales);
        return $final_total;
    }

    //This function is used to Generate Key
    public function generator($lenth) {
        $number = array("1", "2", "3", "4", "5", "6", "7", "8", "9");

        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 8);
            $rand_number = $number["$rand_value"];

            if (empty($con)) {
                $con = $rand_number;
            } else {
                $con = "$con" . "$rand_number";
            }
        }
        return $con;
    }

//    ============= its for invoice_download ============
    public function invoice_download($invoice_id) {
        $data['title'] = display('invoice');
        $data['company_info'] = $this->Invoices->retrieve_company();
        $data['invoiceinfo'] = $this->Invoices->invoiceinfo($invoice_id);
        $data['invoice_detail'] = $this->Invoices->retrieve_invoice_html_data($invoice_id);
//            dd($data['company_info']);
        $this->load->library('pdfgenerator');
        $dompdf = new DOMPDF();
        $page = $this->load->view('invoice/invoice_download', $data, true);
//       dd($page);
        $file_name = time();
        $dompdf->load_html($page);
        $dompdf->render();
        $output = $dompdf->output();

        file_put_contents("assets/data/pdf/invoice/$file_name.pdf", $output);
        $filename = $file_name . '.pdf';
        $file_path = base_url() . 'assets/data/pdf/invoice/' . $filename;

        $this->load->helper('download');
        force_download('./assets/data/pdf/invoice/' . $filename, NULL);
//        redirect("Cinvoice/invoice_inserted_data/".$invoice_id);
    }

    public function invoice_return() {

        $id = $this->input->post('id');
        $data['invoiceid'] = $id;
        $data['invoice_count']=$this->Invoices->invoice_count($id);
        $data['invoice_count_early']=$this->Invoices->invoice_count_early($id);
        $data['product_list']=$this->Invoices->productList($id);
        $data['return_list']=$this->Invoices->returnList($id);

        $this->load->view('invoice/invoice_return', $data);
    }


    public function invoice_return_update() {

        $CI = & get_instance();
        $CI->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $result = $CI->Invoices->invoice_return_update();
        $this->session->set_userdata(array('message' => 'Goods are returned successfully'));
        redirect('Cinvoice/index/1');

        // echo "<pre>";
        // print_r($result);
        // echo "</pre>";

        // exit;
    }

    public function accept_return() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Invoices');
        $returnId = $_POST['returnId'];
        

        $result = $CI->Invoices->accept_return($returnId);
        if ($result) {
            $this->session->set_userdata(array('message' =>'Successfully Accepted'));
            return true;
            // redirect("Cinvoice/index/1");
        }
    }

}
