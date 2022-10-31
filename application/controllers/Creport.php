<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Creport extends CI_Controller {

    function __construct() {
        parent::__construct();
        $CI = & get_instance();
        $CI->load->model('Web_settings');
        $this->template->current_menu = 'report';
    }

    public function index($carry = null) {
        $this->permission->check_label('stock_report')->create()->redirect();
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $today = date('Y-m-d');

        $product_id = $this->input->post('product_id') ? $this->input->post('product_id') : "";
        $date = $this->input->post('stock_date') ? $this->input->post('stock_date') : $today;
        $limit = 15;
        $start_record = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $date = ($this->uri->segment(3)) ? $this->uri->segment(3) : $date;
        //,$date,$limit,$page
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
//        $link = $this->pagination($limit, "Creport/index/1/$date");
        $link = $this->pagination($limit, "Creport/index/1/");
        $content = $CI->lreport->stock_report_single_item($product_id, $date, $limit, $start_record, $link);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    public function out_of_stock() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');

        $content = $CI->lreport->out_of_stock();

        $this->template->full_admin_html_view($content);
    }

    //Stock report supplir report
    public function stock_report_supplier_wise($all = null) {
        $this->permission->check_label('stock_report_supplier_wise')->create()->redirect();
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $CI->load->model('Reports');
        $today = date('Y-m-d');

        $product_id = $this->input->post('product_id') ? $this->input->post('product_id') : "";
        $supplier_id = $this->input->post('supplier_id') ? $this->input->post('supplier_id') : "";
        $date = $this->input->post('stock_date') ? $this->input->post('stock_date') : $today;

        #        #pagination starts
        if ($all == 1) {
            $perpage = 1000;
        } else {
            $perpage = 20;
        }
        //dd($perpage);
        $config["base_url"] = base_url('Creport/stock_report_supplier_wise/2/');
        $config["total_rows"] = $this->Reports->product_counter_by_supplier($supplier_id);
        $config["per_page"] = $perpage;
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
        #
        #pagination ends
        #  
        $content = $this->lreport->stock_report_supplier_wise($product_id, $supplier_id, $date, $links, $config["per_page"], $page);
        
        if ($all == 2 || $all == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //Stock report supplir report
    public function stock_report_product_wise($all = null) {
        $this->permission->check_label('stock_report_product_wise')->create()->redirect();
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $CI->load->model('Reports');
        $today = date('Y-m-d');

        $product_id = $this->input->post('product_id') ? $this->input->post('product_id') : "";
        $supplier_id = $this->input->post('supplier_id') ? $this->input->post('supplier_id') : "";

        $from_date = $this->input->post('from_date');

        $to_date = $this->input->post('to_date') ? $this->input->post('to_date') : $today;

        #
        #pagination starts
        if ($all == 1) {
            $perpage = 1000;
        } else {
            $perpage = 20;
        }
        $config["base_url"] = base_url('Creport/stock_report_product_wise/2');
        $config["total_rows"] = $this->Reports->stock_report_product_bydate_count($product_id, $supplier_id, $from_date, $to_date);
        $config["per_page"] = $perpage;
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
        #        #pagination ends        #  
        $content = $this->lreport->stock_report_product_wise($product_id, $supplier_id, $from_date, $to_date, $links, $config["per_page"], $page);
        if ($all == 2 || $all == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //Get product by supplier
    public function get_product_by_supplier() {
        $supplier_id = $this->input->post('supplier_id');

        $product_info_by_supplier = $this->db->select('*')
                ->from('product_information')
                ->where('supplier_id', $supplier_id)
                ->get()
                ->result();

        if ($product_info_by_supplier) {
            echo "<select class=\"form-control\" id=\"supplier_id\" name=\"supplier_id\">
	                <option value=\"\">" . display('select_one') . "</option>";
            foreach ($product_info_by_supplier as $product) {
                echo "<option value='" . $product->product_id . "'>" . $product->product_name . '-(' . $product->product_model . ')' . " </option>";
            }
            echo " </select>";
        }
    }

    #===============Report paggination=============#

    public function pagination($per_page, $page) {
        $CI = & get_instance();
        $CI->load->model('Reports');
        $product_id = $this->input->post('product_id');

        $config = array();
        $config["base_url"] = base_url() . $page;
        $config["total_rows"] = $this->Reports->product_counter($product_id);
        $config["per_page"] = $per_page;
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



        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $limit = $config["per_page"];
        return $links = $this->pagination->create_links();
    }

//    ============ its for stock report download ==================
    public function stock_report_download() {
        $data['title'] = display('stock_report');
        $data['company_info'] = $this->Invoices->retrieve_company();
        $data['invoiceinfo'] = $this->Invoices->invoiceinfo($invoice_id);
        $data['invoice_detail'] = $this->Invoices->retrieve_invoice_html_data($invoice_id);
//            dd($data['company_info']);
        $this->load->library('pdfgenerator');
        $dompdf = new DOMPDF();
        $page = $this->load->view('report/stock_report_download', $data, true);
//       dd($page);
        $file_name = time();
        $dompdf->load_html($page);
        $dompdf->render();
        $output = $dompdf->output();

        file_put_contents("assets/data/pdf/stock/$file_name.pdf", $output);
        $filename = $file_name . '.pdf';
        $file_path = base_url() . 'assets/data/pdf/invoice/' . $filename;

        $this->load->helper('download');
        force_download('./assets/data/pdf/stock/' . $filename, NULL);
    }

}
