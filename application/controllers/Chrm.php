<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Chrm extends CI_Controller {

    public $menu;

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('session');
        $this->load->model('Web_settings');
        $this->load->model('Hrm_model');
        $this->auth->check_admin_auth();
    }

    //Designation form
    public function add_designation() {
        $data['title'] = display('add_designation');
        $content = $this->parser->parse('hr/employee_type', $data, true);
        $this->template->full_admin_html_view($content);
    }

    // create designation
    public function create_designation() {
        $this->form_validation->set_rules('designation', display('designation'), 'required|max_length[100]');
        $this->form_validation->set_rules('details', display('details'), 'max_length[250]');
        #-------------------------------#
        if ($this->form_validation->run()) {
            $postData = [
                'id' => $this->input->post('id', true),
                'designation' => $this->input->post('designation', true),
                'details' => $this->input->post('details', true),
            ];
            if (empty($this->input->post('id', true))) {
                if ($this->Hrm_model->create_designation($postData)) {
                    $this->session->set_flashdata('message', display('save_successfully'));
                } else {
                    $this->session->set_flashdata('error_message', display('please_try_again'));
                }
            } else {
                if ($this->Hrm_model->update_designation($postData)) {
                    $this->session->set_flashdata('message', display('successfully_updated'));
                } else {
                    $this->session->set_flashdata('error_message', display('please_try_again'));
                }
            }
            redirect("Chrm/manage_designation/1");
        }
        redirect("Chrm/add_designation");
    }

    //Manage designation
    public function manage_designation($carry = null) {
        $this->permission->check_label('designation')->create()->redirect();
        $this->load->model('Hrm_model');
        $data['title'] = display('manage_designation');
        $data['designation_list'] = $this->Hrm_model->designation_list();
        $content = $this->parser->parse('hr/designation_list', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //designation Update Form
    public function designation_update_form($id) {
        $this->load->model('Hrm_model');
        $designation_data = $this->Hrm_model->designation_editdata($id);
        $data = array(
            'title' => display('designation_update_form'),
            'id' => $designation_data->id,
            'designation' => $designation_data->designation,
            'details' => $designation_data->details,
        );

        $content = $this->parser->parse('hr/designation_edit', $data, true);
        $this->template->full_admin_html_view($content);
    }

    // designation delete
    public function designation_delete() {
        $this->load->model('Hrm_model');
        $id = $_POST['id'];
        $this->Hrm_model->delete_designation($id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
        return true;
    }

    // ================== Employee part =============================
    public function add_employee($carry = null) {
        $this->permission->check_label('add_employee')->create()->redirect();
        $this->auth->check_admin_auth();
        $this->load->model('Hrm_model');
        $data['title'] = display('add_employee');
        $data['desig'] = $this->Hrm_model->designation_dropdown();
        $content = $this->parser->parse('hr/employee_form', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    // create employee
    public function create_employee() {
        $this->load->model('Hrm_model');
        $tran_id = time();
        $depid = date('Ymdis');
        $employee_id = $this->auth->generator(12);
//        echo $tran_id . "<br>";        echo $depid . "<br>";        dd($employee_id);
        if ($_FILES['image']['name']) {
            $config['upload_path'] = 'my-assets/image/employee/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|GIF|JPG|PNG';
            $config['max_size'] = "*";
            $config['max_width'] = "*";
            $config['max_height'] = "*";
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata(array('error_message' => $this->upload->display_errors()));
                redirect(base_url('Chrm/add_employee/1'));
            } else {
                $image = $this->upload->data();
                $image_url = "my-assets/image/employee/" . $image['file_name'];
            }
        }
        $postData = [
            'employee_id' => $employee_id,
            'first_name' => $this->input->post('first_name', true),
            'last_name' => $this->input->post('last_name', true),
            'designation' => $this->input->post('designation', true),
            'phone' => $this->input->post('phone', true),
            'image' => (!empty($image_url) ? $image_url : ''),
            'rate_type' => '', //$this->input->post('rate_type',true),
            'email' => $this->input->post('email', true),
            'hrate' => $this->input->post('hrate', true),
            'address_line_1' => $this->input->post('address_line_1', true),
            'address_line_2' => $this->input->post('address_line_2', true),
            'blood_group' => $this->input->post('blood_group', true),
            'country' => $this->input->post('country', true),
            'city' => $this->input->post('city', true),
            'zip' => $this->input->post('zip', true),
        ];

        if ($this->Hrm_model->create_employee($postData)) {

            $employee_ledger = array(
                'transaction_id' => $tran_id,
                'employee_id' => $employee_id,
                'chalan_no' => $depid,
                'deposit_no' => NULL,
                'amount' => 0, //(!empty($this->input->post('previous_balance')) ? $this->input->post('previous_balance') : 0),
                'description' => 'Previous Balance',
                'payment_type' => '',
                'cheque_no' => '',
                'date' => date('Y-m-d'),
                'status' => 1,
                'd_c' => 'c'
            );
            $this->db->insert('employee_ledger', $employee_ledger);

            $this->session->set_flashdata('message', display('save_successfully'));
        } else {
            $this->session->set_flashdata('error_message', display('please_try_again'));
        }
        redirect("Chrm/manage_employee/1");
    }

    // Manage employee
    public function manage_employee($carry = null) {
        $this->permission->check_label('manage_employee')->create()->redirect();
        $this->load->model('Hrm_model');
        $data['title'] = display('manage_employee');
        $data['employee_list'] = $this->Hrm_model->employee_list();
        $content = $this->parser->parse('hr/employee_list', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    // Employee Update form
    public function employee_update_form($employee_id) {
        $this->load->model('Hrm_model');
        $data['title'] = display('employee_update');
        $data['employee_data'] = $this->Hrm_model->employee_editdata($employee_id);
        $data['desig'] = $this->Hrm_model->designation_dropdown();
        $content = $this->parser->parse('hr/employee_updateform', $data, true);
        $this->template->full_admin_html_view($content);
    }

    // Update employee
    public function update_employee() {
        $this->load->model('Hrm_model');

        if ($_FILES['image']['name']) {
            $config['upload_path'] = 'my-assets/image/employee/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPEG|GIF|JPG|PNG';
            $config['max_size'] = "*";
            $config['max_width'] = "*";
            $config['max_height'] = "*";
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_userdata(array('error_message' => $this->upload->display_errors()));
                redirect(base_url('Chrm/add_employee'));
            } else {
                $image = $this->upload->data();
                $image_url = "my-assets/image/employee/" . $image['file_name'];
            }
        }
//        $headname = $this->input->post('id', true) . '-' . $this->input->post('old_first_name', true) . '' . $this->input->post('old_last_name', true);
        $postData = [
            'employee_id' => $this->input->post('employee_id', true),
            'first_name' => $this->input->post('first_name', true),
            'last_name' => $this->input->post('last_name', true),
            'designation' => $this->input->post('designation', true),
            'phone' => $this->input->post('phone', true),
            'image' => (!empty($image_url) ? $image_url : $this->input->post('old_image', true)),
            'rate_type' => $this->input->post('rate_type', true),
            'email' => $this->input->post('email', true),
            'hrate' => $this->input->post('hrate', true),
            'address_line_1' => $this->input->post('address_line_1', true),
            'address_line_2' => $this->input->post('address_line_2', true),
            'blood_group' => $this->input->post('blood_group', true),
            'country' => $this->input->post('country', true),
            'city' => $this->input->post('city', true),
            'zip' => $this->input->post('zip', true),
        ];

        if ($this->Hrm_model->update_employee($postData)) {
            $this->session->set_flashdata('message', display('successfully_updated'));
        } else {
            $this->session->set_flashdata('error_message', display('please_try_again'));
        }
        redirect("Chrm/manage_employee/1");
    }

    // delete employee
    public function employee_delete() {
        $this->load->model('Hrm_model');
        $id = $_POST['id'];
        $this->Hrm_model->delete_employee($id);
        $this->session->set_userdata(array('message' => display('successfully_delete')));
        return true;
    }

    public function employee_details($id) {
        $this->load->model('Hrm_model');
        $employee_details = $this->Hrm_model->employee_details($id);
        //d($employee_details);
        $data = array(
            'title' => display('employee_update'),
            'employee_id' => $employee_details->employee_id,
            'first_name' => $employee_details->first_name,
            'last_name' => $employee_details->last_name,
            'designation' => $employee_details->designation,
            'phone' => $employee_details->phone,
            'rate_type' => $employee_details->rate_type,
            'hrate' => $employee_details->hrate,
            'email' => $employee_details->email,
            'blood_group' => $employee_details->blood_group,
            'address_line_1' => $employee_details->address_line_1,
            'address_line_2' => $employee_details->address_line_2,
            'image' => $employee_details->image,
            'country' => $employee_details->country,
            'city' => $employee_details->city,
            'zip' => $employee_details->zip,
        );
        //dd($data);

        $content = $this->parser->parse('hr/resumepdf', $data, true);
        $this->template->full_admin_html_view($content);
    }

//    ============== its for single_employee_ledger ============
    public function single_employee_ledger($employee_id) {
        $data['title'] = display('employee_ledger');
        $data['single_employee'] = $this->Hrm_model->single_employee($employee_id);
        $data['employee_ledgerinfo'] = $this->Hrm_model->employee_ledgerinfo($employee_id);
        $data['currency_details'] = $this->Web_settings->retrieve_setting_editdata();

        $content = $this->parser->parse('hr/employee_ledger', $data, true);
        $this->template->full_admin_html_view($content);
    }

}
