<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->template->current_menu = 'home';
        $this->load->model('Web_settings');
    }

    public function index() {
        $CI = & get_instance();
        $CI->load->library('lreport');
        $CI->load->library('occational');
        if (!$this->auth->is_logged()) {
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', TRUE, 302);
        }
        $this->auth->check_admin_auth();

        $CI->load->model('Customers');
        $CI->load->model('Products');
        $CI->load->model('Suppliers');
        $CI->load->model('Invoices');
        $CI->load->model('Purchases');
        $CI->load->model('Reports');
        $CI->load->model('Accounts');
        $CI->load->model('Web_settings');
        $CI->load->model('Payment');

        $total_customer = $CI->Customers->count_customer();
        $total_product = $CI->Products->count_product();
        $total_suppliers = $CI->Suppliers->count_supplier();
        $total_sales = $CI->Invoices->count_invoice();
        $total_purchase = $CI->Purchases->count_purchase();
//        echo $total_sales/100; die();
        $this->Accounts->accounts_summary(1);
        $total_expese = $this->Accounts->sub_total;

        $monthly_sales_report = $CI->Reports->monthly_sales_report();

        $sales_report = $CI->Reports->todays_total_sales_report();
        $todays_ttl_purchase = $CI->Reports->todays_ttl_purchase();
        $lastmonth_sales_purchase = $CI->Reports->lastmonth_sales_purchase();
//        dd($lastmonth_sales_purchase); 

        $total_profit = ($sales_report[0]['total_sale'] - $sales_report[0]['total_supplier_rate']);
        $currency_details = $CI->Web_settings->retrieve_setting_editdata();



        $level_id = $this->session->userdata('user_id');
        $months = '';
        $salesamount = '';
        $salesorder = '';
        $year = date('Y');
        $numbery = date('y');
        $prevyear = $numbery - 1;
        $prevyearformat = $year - 1;
        $syear = '';
        $syearformat = '';
        for ($k = 1; $k < 13; $k++) {
            $month = date('m', strtotime("+$k month"));
            $gety = date('y', strtotime("+$k month"));
            if ($gety == $numbery) {
                $syear = $prevyear;
                $syearformat = $prevyearformat;
            } else {
                $syear = $numbery;
                $syearformat = $year;
            }
//            echo $month; echo '<br>'; echo $syearformat;
            $monthly = $this->monthlysaleamount($syearformat, $month, $level_id);
            $monthlysaleorders = $this->monthlysaleorder($syearformat, $month, $level_id);
            $salesamount .= $monthly . ', ';
            $salesorder .= $monthlysaleorders . ', ';
            $months .= "'" . date('M-' . $syear, strtotime("+$k month")) . "',";
        }
//        $data['monthly_sales_amount'] = trim($salesamount, ',');
//        $data['monthly_sales_month'] = trim($months, ',');
//        $data['monthlysaleorders'] = trim($salesorder, ',');


        $data = array(
            'title' => 'Dashboard',
            'total_customer' => $total_customer,
            'total_product' => $total_product,
            'total_suppliers' => $total_suppliers,
            'total_sales' => $total_sales,
            'total_purchase' => $total_purchase,
            'purchase_amount' => number_format($todays_ttl_purchase->todays_total_purhcase, 2, '.', ','), //number_format($sales_report[0]['total_supplier_rate'], 2, '.', ','),
            'sales_amount' => number_format($sales_report[0]['total_sale'], 2, '.', ','),
//            'purchaseamount_int' => $todays_ttl_purchase->todays_total_purhcase,
//            'salesamount_int' => $sales_report[0]['total_sale'],
            'lastmonth_ttlsales' => $lastmonth_sales_purchase->lastmonth_ttlsales,
            'lastmonth_ttlpurchase' => $lastmonth_sales_purchase->lastmonth_ttlpurchase,
            'total_expese' => $total_expese,
            'total_profit' => number_format($total_profit, 2, '.', ','),
            'monthly_sales_report' => $monthly_sales_report,
            'currency' => $currency_details[0]['currency'],
            'position' => $currency_details[0]['currency_position'],
            'monthly_sales_amount' => trim($salesamount, ','),
            'monthly_sales_month' => trim($months, ','),
            'monthlysaleorders' => trim($salesorder, ','),
        );
//        dd($data);

        $content = $CI->parser->parse('include/admin_home', $data, true);
        $this->template->full_admin_html_view($content);
    }

    public function monthlysaleamount($year, $month, $level_id) {
        $groupby = "GROUP BY YEAR(date), MONTH(date)";
        $amount = '';
        $wherequery = "YEAR(date)='$year' AND month(date)='$month' GROUP BY YEAR(date), MONTH(date)";
        $this->db->select('round(SUM(total_amount),2) as amount');
        $this->db->from('invoice');
        $this->db->where($wherequery, NULL, FALSE);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();
            foreach ($result as $row) {
                $amount .= $row->amount . ", ";
            }
            return trim($amount, ', ');
        }
        return 0;
    }

    public function monthlysaleorder($year, $month, $level_id) {
        $groupby = "GROUP BY YEAR(date), MONTH(date)";
        $order_number = '';
        $wherequery = "YEAR(date)='$year' AND month(date)='$month' GROUP BY YEAR(date), MONTH(date)";
        $this->db->select('COUNT(invoice_id) as order_count');
        $this->db->from('invoice');
        $this->db->where($wherequery, NULL, FALSE);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();
            foreach ($result as $row) {
                $order_number .= $row->order_count . ", ";
            }
            return trim($order_number, ', ');
        }
        return 0;
    }

    //Today All Report
    public function all_report() {
        $this->permission->check_label('todays_report')->create()->redirect();
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }

        $CI = & get_instance();
        $CI->load->library('lreport');
        if (!$this->auth->is_logged()) {
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', TRUE, 302);
        }
        $this->auth->check_admin_auth();

        $user_type = $this->session->userdata('user_type');

        if ($user_type == 1) {
            $content = $CI->lreport->retrieve_all_reports();
//            $this->template->full_admin_html_view($content);
            $this->template->partial_admin_html_view($content);
        } elseif ($user_type == 2) {
            $CI->load->library('linvoice');
            $content = $CI->linvoice->invoice_add_form();
//            $this->template->full_admin_html_view($content);
            $this->template->partial_admin_html_view($content);
        }
    }

    #==============Todays_sales_report============#

    public function todays_sales_report() {
        $this->permission->check_label('sales_report')->create()->redirect();
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = & get_instance();
        $CI->load->library('lreport');
        $this->auth->check_admin_auth();
        $content = $CI->lreport->todays_sales_report();
//        $this->template->full_admin_html_view($content);
        $this->template->partial_admin_html_view($content);
    }

    #================todays_purchase_report========#

    public function todays_purchase_report() {
        $this->permission->check_label('purchase_report')->create()->redirect();
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = & get_instance();
        $CI->load->library('lreport');
        $this->auth->check_admin_auth();
        $content = $CI->lreport->todays_purchase_report();
//        $this->template->full_admin_html_view($content);
        $this->template->partial_admin_html_view($content);
    }

    #=============Total profit report===================#

    public function total_profit_report($all = null) {
        $this->permission->check_label('profit_report')->create()->redirect();
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = & get_instance();
        $CI->load->library('lreport');
        $CI->load->model('Reports');
        $this->auth->check_admin_auth();

        #        #pagination starts
        if ($all == 1) {
            $perpage = 1000;
        } else {
            $perpage = 10;
        }

        $config["base_url"] = base_url('Admin_dashboard/total_profit_report/2');
        $config["total_rows"] = $this->Reports->total_profit_report_count();
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
        $content = $this->lreport->total_profit_report($links, $config["per_page"], $page);
        if ($all == 2 || $all == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    #============Date wise sales report==============#

    public function retrieve_dateWise_SalesReports() {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');
        $content = $CI->lreport->retrieve_dateWise_SalesReports($from_date, $to_date);
        $this->template->full_admin_html_view($content);
    }

    #==============Date wise purchase report=============#

    public function retrieve_dateWise_PurchaseReports() {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $start_date = $this->input->post('from_date');
        $end_date = $this->input->post('to_date');
        $content = $CI->lreport->retrieve_dateWise_PurchaseReports($start_date, $end_date);
        $this->template->full_admin_html_view($content);
    }

    #==============Product sales report date wise===========#

    public function product_sales_reports_date_wise($all = null) {
        $this->permission->check_label('sales_report_product_wise')->create()->redirect();
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $CI->load->model('Reports');

        #        #pagination starts        #
        if ($all == 1) {
            $perpage = 1000;
        } else {
            $perpage = 15;
        }
        //dd($perpage);
        $config["base_url"] = base_url('Admin_dashboard/product_sales_reports_date_wise/2');
        $config["total_rows"] = $this->Reports->retrieve_product_sales_report_count();
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
        $content = $this->lreport->get_products_report_sales_view($links, $config["per_page"], $page);
        if ($all == 1 || $all == 2) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    #==============Date wise purchase report=============#

    public function retrieve_dateWise_profit_report($all = null) {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $CI->load->model('Reports');
        $start_date = $this->input->post('from_date');
        $end_date = $this->input->post('to_date');

        #        #pagination starts        #
        if ($all == 1 || $all == 2) {
            $perpage = 1000;
        } else {
            $perpage = 20;
        }
        $config["base_url"] = base_url('Admin_dashboard/retrieve_dateWise_profit_report/');
        $config["total_rows"] = $this->Reports->retrieve_dateWise_profit_report_count($start_date, $end_date);
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
        $content = $this->lreport->retrieve_dateWise_profit_report($start_date, $end_date, $links, $config["per_page"], $page);
        if ($all == 1 || $all == 2) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
//        $this->template->full_admin_html_view($content);
    }

    #==============Product sales search reports============#

    public function product_sales_search_reports($all = null) {
        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lreport');
        $CI->load->model('Reports');
        $from_date = $this->input->post('from_date');
        $to_date = $this->input->post('to_date');

        if ($all == 1 || $all == 2) {
            $perpage = 1000;
        } else {
            $perpage = 15;
        }

        #        #pagination starts        #
        $config["base_url"] = base_url('Admin_dashboard/product_sales_search_reports/2');
        $config["total_rows"] = $this->Reports->retrieve_product_search_sales_report_count($from_date, $to_date);
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
        $content = $this->lreport->get_products_search_report($from_date, $to_date, $links, $config["per_page"], $page);

        if ($all == 1 || $all == 2) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    #============User login=========#

    public function login() {
        if ($this->auth->is_logged()) {
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard', TRUE, 302);
        }
        $data['title'] = "Admin Login Area";
//        $content = $this->parser->parse('user/admin_login_form', $data, true);
//        $this->template->full_admin_html_view($content);
        $this->load->view('user/login_form', $data);
    }

    #==============Valid user check=======#

    public function do_login() {
        $error = '';
        $setting_detail = $this->Web_settings->retrieve_setting_editdata();
        if ($setting_detail[0]['captcha'] == 0 && $setting_detail[0]['secret_key'] != null && $setting_detail[0]['site_key'] != null) {

            $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
            $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_userdata(array('error_message' => display('please_enter_valid_captcha')));
                $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', TRUE, 302);
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($username == '' || $password == '' || $this->auth->login($username, $password) === FALSE) {
                    $error = display('wrong_username_or_password');
                }
                if ($error != '') {
                    $this->session->set_userdata(array('error_message' => $error));
                    $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', TRUE, 302);
                } else {
                    $this->output->set_header("Location: " . base_url(), TRUE, 302);
                }
            }
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if ($username == '' || $password == '' || $this->auth->login($username, $password) === FALSE) {
                $error = display('wrong_username_or_password');
            }
            if ($error != '') {
                $this->session->set_userdata(array('error_message' => $error));
                $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', TRUE, 302);
            } else {
                $this->output->set_header("Location: " . base_url(), TRUE, 302);
            }
        }
    }

    //Valid captcha check
    function validate_captcha() {
        $setting_detail = $this->Web_settings->retrieve_setting_editdata();
        $captcha = $this->input->post('g-recaptcha-response');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $setting_detail[0]['secret_key'] . ".&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        if ($response . 'success' == false) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    #===============Logout=======#

    public function logout() {
        if ($this->auth->logout())
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/login', TRUE, 302);
    }

    #=============Edit Profile======#

    public function edit_profile() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('luser');
        $content = $CI->luser->edit_profile_form();
        $this->template->full_admin_html_view($content);
    }

    #=============Update Profile========#

    public function update_profile() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Users');
        $this->Users->profile_update();
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Admin_dashboard/edit_profile'));
    }

    #=============Change Password=========# 

    public function change_password_form() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $content = $CI->parser->parse('user/change_password', array('title' => "Change Password"), true);
        $this->template->full_admin_html_view($content);
    }

    #============Change Password===========#

    public function change_password() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Users');

        $error = '';
        $email = $this->input->post('email');
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('password');
        $repassword = $this->input->post('repassword');
        if ($email == '' || $old_password == '' || $new_password == '') {
            $error = display('blank_field_does_not_accept');
        } else if ($email != $this->session->userdata('user_email')) {
            $error = display('you_put_wrong_email_address');
        } else if (strlen($new_password) < 6) {
            $error = display('new_password_at_least_six_character');
        } else if ($new_password != $repassword) {
            $error = display('password_and_repassword_does_not_match');
        } else if ($CI->Users->change_password($email, $old_password, $new_password) === FALSE) {
            $error = display('you_are_not_authorised_person');
        }
        if ($error != '') {
            $this->session->set_userdata(array('error_message' => $error));
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/change_password_form', TRUE, 302);
        } else {
            $this->session->set_userdata(array('message' => display('successfully_changed_password')));
            $this->output->set_header("Location: " . base_url() . 'Admin_dashboard/change_password_form', TRUE, 302);
        }
    }

    //password recovery 
    public function password_recovery() {
        $this->load->model('Settings');
        $data['get_mail_config'] = $this->Settings->get_mail_config();
        $email = $this->input->post('email');
        $checkEmail = $this->db->select('*')->from('user_login')->where('username', $email)->get()->row();
        if (!empty($checkEmail)) {
            $user_id = @$checkEmail->user_id;
            $random_key = ("RK" . date('y') . strtoupper($this->randstrGen(2, 4)));
            $random_array = array(
                'password' => md5("gef" . $random_key),
            );
            $this->db->where('user_id', $user_id)->update('user_login', $random_array);
            $send_email = $this->sendLink($user_id, $email, $data, $random_key);
            echo $send_email;
        }
    }

    //    ========= its for randomly key generate ==========
    function randstrGen($mode = null, $len = null) {
        $result = "";
        if ($mode == 1):
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        elseif ($mode == 2):
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        elseif ($mode == 3):
            $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
        elseif ($mode == 4):
            $chars = "0123456789";
        endif;
        $charArray = str_split($chars);
        for ($i = 0; $i < $len; $i++) {
            $randItem = array_rand($charArray);
            $result .= "" . $charArray[$randItem];
        }
        return $result;
    }

    //    ========== its for sendLink ===============
    public function sendLink($log_id, $email, $data, $random_key) {
        $data['baseurl'] = base_url();
        $config = Array(
            'protocol' => $data['get_mail_config'][0]->protocol,
            'smtp_host' => $data['get_mail_config'][0]->smtp_host,
            'smtp_port' => $data['get_mail_config'][0]->smtp_port,
            'smtp_user' => $data['get_mail_config'][0]->smtp_user,
            'smtp_pass' => $data['get_mail_config'][0]->smtp_pass,
            'mailtype' => $data['get_mail_config'][0]->mailtype,
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        $data['random_key'] = $random_key;
//        echo $data['random_key'];die();
//        echo '<pre>';        print_r($data['author_info']);die();

        $mesg = $this->load->view('user/sendPasswordLink', $data, TRUE);
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->set_header('Content-type', 'text/html');

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from($data['get_mail_config'][0]->smtp_user, "Support Center");
        $this->email->to($email);
        $this->email->subject("Welcome to Wholesaler");

// $this->email->message("Dear $name ,\nYour order submitted successfully!"."\n\n"
// . "\n\nThanks\nMetallica Gifts");
// $this->email->message($mesg. "\n\n http://metallicagifts.com/mcg/verify/" . $verificationText . "\n" . "\n\nThanks\nMetallica Gifts");
        $this->email->message($mesg);
        $this->email->send();
        return 1;
    }

}
