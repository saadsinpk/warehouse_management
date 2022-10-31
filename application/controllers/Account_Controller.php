<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Account_Controller extends CI_Controller {

    public $menu;

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('laccount2');
        $this->load->library('session');
        $this->load->model('Account_2');
        $this->auth->check_admin_auth();
        $this->template->current_menu = 'Account2';
    }

    public function index($carry = null) {
        $this->permission->check_label('create_account')->create()->redirect();
        $content = $this->laccount2->account_form();
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    public function insert_account() {
        $data = array(
            'account_name' => $this->input->post('account_name'),
            'parent_id' => $this->input->post('parent_id'),
        );
        $result = $this->Account_2->add_account($data);
        if ($result == TRUE) {
            redirect(base_url('Account_Controller/index/1'));
        }
    }

    public function manage_account($carry = null) {
        $this->permission->check_label('manage_account')->create()->redirect();
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('laccount2');
        $CI->load->model('Account_2');
        $content = $CI->laccount2->account_list();
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    public function account_delete() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Account_2');
        $id = $_POST['account_id'];
        $result = $CI->Account_2->delete_account($id);
        return true;
    }

    public function account_update_form($id) {
        $content = $this->laccount2->account_up_data($id);
        $this->menu = array('label' => 'Edit Data', 'url' => 'Account_Controller');
        $this->template->full_admin_html_view($content);
    }

    public function account_update() {
        $this->load->model('Account_2');
        $id = $this->input->post('account_id');

        $data = array(
            'account_id' => $id,
            'account_name' => $this->input->post('account_name'),
            'parent_id' => $this->input->post('parent_id'),
        );

        $this->Account_2->update_account($data, $id);
        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Account_Controller/manage_account/1'));
        exit;
    }

    public function date_summary() {
        $category_id = $this->uri->segment(3);
        $content = $this->laccount2->trans_custom_report_data($category_id);
        $this->template->full_admin_html_view($content);
    }

}
