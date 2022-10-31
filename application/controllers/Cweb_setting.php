<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cweb_setting extends CI_Controller {

    public $menu;

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('lweb_setting');
        $this->load->library('session');
        $this->load->model('Web_settings');
        $this->auth->check_admin_auth();
        $this->template->current_menu = 'web_setting';

        if ($this->session->userdata('user_type') == '2') {
            $this->session->set_userdata(array('error_message' => display('you_are_not_access_this_part')));
            redirect('Admin_dashboard');
        }
    }

    //Default loading for Category system.
    public function index($carry = null) {
        $this->permission->check_label('setting')->create()->redirect();
//        echo $carry; echo 'XX';       exit();
        //Calling Customer add form which will be loaded by help of "lcustomer,located in library folder"
        $content = $this->lweb_setting->setting_add_form();
        //Here ,0 means array position 0 will be active class
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    // customer Update
    public function update_setting() {
        $this->load->model('Web_settings');
        if ($_FILES['logo']['name']) {
            //Chapter chapter add start
            $config['upload_path'] = './my-assets/image/logo/';
            $config['allowed_types'] = 'png|jpg|jpeg|gif|bmp|tiff';
            $config['max_size'] = "*";
            $config['max_width'] = "*";
            $config['max_height'] = "*";
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('logo')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata(array('error_message' => display('logo_not_uploaded')));
                redirect(base_url('Cweb_setting/index/1'));
            } else {
                $image = $this->upload->data();
                $logo = "my-assets/image/logo/" . $image['file_name'];
            }
        }
        if ($_FILES['mini_logo']['name']) {
            //Chapter chapter add start
            $config['upload_path'] = './my-assets/image/logo/';
            $config['allowed_types'] = 'png|jpg|jpeg|gif|bmp|tiff';
            $config['max_size'] = "*";
            $config['max_width'] = "*";
            $config['max_height'] = "*";
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('mini_logo')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata(array('error_message' => display('logo_not_uploaded')));
                redirect(base_url('Cweb_setting/index/1'));
            } else {
                $image = $this->upload->data();
                $mini_logo = "my-assets/image/logo/" . $image['file_name'];
            }
        }

        if ($_FILES['favicon']['name']) {
            //Chapter chapter add start
            $config['upload_path'] = './my-assets/image/logo/';
            $config['allowed_types'] = 'png|jpg|jpeg|gif|bmp|tiff';
            $config['max_size'] = "*";
            $config['max_width'] = "*";
            $config['max_height'] = "*";
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('favicon')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata(array('error_message' => 'Favicon Did Not Uploaded'));
                redirect(base_url('Cweb_setting/index/1'));
            } else {
                $image = $this->upload->data();
                $favicon = "my-assets/image/logo/" . $image['file_name'];
            }
        }

        if ($_FILES['invoice_logo']['name']) {
            //Chapter chapter add start
            $config['upload_path'] = './my-assets/image/logo/';
            $config['allowed_types'] = 'png|jpg|jpeg|gif|bmp|tiff';
            $config['max_size'] = "*";
            $config['max_width'] = "*";
            $config['max_height'] = "*";
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('invoice_logo')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata(array('error_message' => 'Invoice Logo did Not upload'));
                redirect(base_url('Cweb_setting/index/1'));
            } else {
                $image = $this->upload->data();
                $invoice_logo = "my-assets/image/logo/" . $image['file_name'];
            }
        }

        $old_logo = $this->input->post('old_logo');
        $old_minilogo = $this->input->post('old_minilogo');
        $old_invoice_logo = $this->input->post('old_invoice_logo');
        $old_favicon = $this->input->post('old_favicon');

        $data = array(
            'logo' => (!empty($logo) ? $logo : $old_logo),
            'mini_logo' => (!empty($mini_logo) ? $mini_logo : $old_minilogo),
            'invoice_logo' => (!empty($invoice_logo) ? $invoice_logo : $old_invoice_logo),
            'favicon' => (!empty($favicon) ? $favicon : $old_favicon),
            'currency' => $this->input->post('currency'),
            'currency_position' => $this->input->post('currency_position'),
            'date_format' => $this->input->post('date_format'),
            'footer_text' => $this->input->post('footer_text'),
            'language' => $this->input->post('language'),
            'rtr' => $this->input->post('rtr'),
            'captcha' => $this->input->post('captcha'),
            'site_key' => $this->input->post('site_key'),
            'secret_key' => $this->input->post('secret_key'),
            'header_bgcolor' => $this->input->post('header_bgcolor'),
            'logo_bgcolor' => $this->input->post('logo_bgcolor'),
            'sidebar_bgcolor' => $this->input->post('sidebar_bgcolor'),
            'treeview_bgcolor' => $this->input->post('treeview_bgcolor'),
            'link_hover' => $this->input->post('link_hover'),
            'font_color' => $this->input->post('font_color'),
        );
//        echo '<pre>';        print_r($data);        die();
        $this->Web_settings->update_setting($data);

        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Cweb_setting/index/1'));
        exit;
    }

//    ========== its for sms_configuration =============
    public function sms_configuration($carry = null){
        $this->permission->check_label('sms_configuration')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('sms_configuration');
        $gateway_id = 1;
        $data['sms_gateway'] = $this->Web_settings->sms_gateway($gateway_id);
        
        $content = $this->parser->parse('web_setting/sms_configuration', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }
//    ============== its for sms_config_update =========
    public function sms_config_update(){
         $provider_name = $this->input->post('provider_name');
        $user_name = $this->input->post('user_name');
        $password = $this->input->post('password');
        $phone = $this->input->post('phone');
        $sender_name = $this->input->post('sender_name');
        $isinvoice = $this->input->post('isinvoice');
        $isreceive = $this->input->post('isreceive');

        $sms_data = array(
            'provider_name' => $provider_name,
            'user' => $user_name,
            'password' => $password,
            'phone' => $phone,
            'authentication' => $sender_name,
            'is_invoice' => $isinvoice,
            'is_receive' => $isreceive,
        );
//        dd($sms_data);
        $this->db->where('gateway_id', 1)->update('sms_gateway', $sms_data);
        $this->session->set_userdata(array('message' => display('update_successfully')));
        redirect(base_url('Cweb_setting/sms_configuration/1'));
    }
    
    
//    ========== its for mail_configuration =============
    public function mail_configuration($carry = null){
        $this->permission->check_label('mail_configuration')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('sms_configuration');
        $data['mail_setting'] = $this->db->select('*')->from('mail_config_tbl')->where('id', 1)->get()->result();
        
        $content = $this->parser->parse('web_setting/mail_configuration', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }
    
//    ============ its for mail_config_update ============
    public function mail_config_update() {
        $protocol = $this->input->post('protocol');
        $smtp_host = $this->input->post('smtp_host');
        $smtp_port = $this->input->post('smtp_port');
        $smtp_user = $this->input->post('smtp_user');
        $smtp_pass = $this->input->post('smtp_pass');
        $mailtype = $this->input->post('mailtype');
        $isinvoice = $this->input->post('isinvoice');
        $isreceive = $this->input->post('isreceive');

        $mail_data = array(
            'protocol' => $protocol,
            'smtp_host' => $smtp_host,
            'smtp_port' => $smtp_port,
            'smtp_user' => $smtp_user,
            'smtp_pass' => $smtp_pass,
            'mailtype' => $mailtype,
            'is_invoice' => $isinvoice,
            'is_receive' => $isreceive,
        );
//        dd($paypal_data);
        $this->db->where('id', 1)->update('mail_config_tbl', $mail_data);
        $this->session->set_userdata(array('message' => display('update_successfully')));
        redirect(base_url('Cweb_setting/mail_configuration/1'));
    }
}
