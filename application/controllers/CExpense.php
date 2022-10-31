<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CExpense extends CI_Controller {

    private $user_id = '';

    function __construct() {
        parent::__construct();
        $this->user_id = $this->session->userdata('user_id');
        $this->load->model('Expense_model');
        $this->load->model('Web_settings');
    }

    //Manage company page load
    public function index() {
//        $CI = & get_instance();
//        $CI->auth->check_admin_auth();
//        $CI->load->library('lcompany');
//
//        $content = $CI->lcompany->company_list();
//        $sub_menu = array(
//            array('label' => display('manage_company'), 'url' => 'Ccompany', 'class' => 'active')
//        );
//        $this->template->full_admin_html_view($content, $sub_menu);
    }

//    ============= its for menu_setup ======== 
    public function expense_item($carry = null) {
        $this->permission->check_label('expense_item')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('expense_item');

//        $config["base_url"] = base_url('CExpense/expense_item/');
//        $config["total_rows"] = $this->db->count_all('expense_item_tbl');
//        $config["per_page"] = 15;
//        $config["uri_segment"] = 4;
//        $config["last_link"] = "Last";
//        $config["first_link"] = "First";
//        $config['next_link'] = 'Next';
//        $config['prev_link'] = 'Prev';
//        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination">';
//        $config['full_tag_close'] = '</ul></nav></div>';
//        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
//        $config['num_tag_close'] = '</span></li>';
//        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
//        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
//        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
//        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
//        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
//        $config['prev_tagl_close'] = '</span></li>';
//        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
//        $config['first_tagl_close'] = '</span></li>';
//        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
//        $config['last_tagl_close'] = '</span></li>';
//        #Paggination end#
//
//
//        $this->pagination->initialize($config);
//        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
//        $limit = $config["per_page"];
//        $data['expense_itemlist'] = $this->Expense_model->expense_itemlist($limit, $page);
//        $data['links'] = $this->pagination->create_links();
//        $data['pagenum'] = $page;

        $content = $this->parser->parse('expense/expense_item', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

//    ============ its for  expense_item_save ===========
    public function expense_item_save() {
        $expense_item = $this->input->post('expense_item');

//        $checkExpenseItem = $this->Expense_model->checkExpenseItem($expense_item);
//        if ($checkExpenseItem) {
//            $this->session->set_flashdata('error', "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>its allready exists!</div>");
//            redirect('CExpense/expense_item/1');
//        } else {
            $itemData = array(
                'item_id' => time(),
                'item_name' => $expense_item,
                'created_by' => $this->user_id,
                'status' => 1,
            );
            $this->db->insert('expense_item_tbl', $itemData);
//        }
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Expense Item save successfully!</div>");
        redirect('CExpense/expense_item/1');
    }

    //    ======== its for custom expenseitem_list_custom =============
    public function expenseitem_list_custom() {
        $list = $this->Expense_model->get_allexpenseitem();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rowdata) {
            $no++;
//            $status = array('1' => 'Yes', '0' => 'No');
            $row = array();
            $update = '';
            $delete = '';
            if ($this->permission->check_label('expense_item')->update()->access()) {
                $update = '<input name="url" type="hidden" id="url_' . $rowdata->id . '" value="" /><a onclick="expenseitem_edit(' . $rowdata->item_id . ')" style="cursor:pointer;color:#fff;" class="btn btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a> ';
            }
            if ($this->permission->check_label('expense_item')->update()->access()) {
                $delete = '<a href="' . base_url() . 'CExpense/expenseitem_delete/' . $rowdata->item_id . '" onclick="return confirm(\'' . display('are_you_sure') . '\') " class="btn btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>';
            }
            $row[] = $no;
            $row[] = $rowdata->item_name;
//            $row[] = $rowdata->groupprice;
//            $row[] = $status[$rowdata->isactive];
            $row[] = $update . $delete;
            $data[] = $row;
        }
        //print_r($data);
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Expense_model->count_allmservice(),
            "recordsFiltered" => $this->Expense_model->count_filtermservice(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

//    ========== its for menu_edit ============
    public function expenseitem_edit() {
        $data['title'] = display('expense_item');
        $item_id = $this->input->post('item_id');
        $data['expenseitem_edit'] = $this->Expense_model->expenseitem_edit($item_id);

        $this->load->view('expense/expenseitem_edit', $data);
    }

//    ========= its for menusetup_update ==============
    public function expense_item_update() {
        $item_id = $this->input->post('item_id');
        $expense_item = $this->input->post('expense_item');
        $itemData = array(
            'item_name' => $expense_item,
            'created_by' => $this->user_id,
            'status' => 1,
        );
        $this->db->where('item_id', $item_id)->update('expense_item_tbl', $itemData);

        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Expense Item updated successfully!</div>");
        redirect('CExpense/expense_item/1');
    }

//    =========== its for add_expense =============
    public function add_expense($carry = null) {
        $this->permission->check_label('add_expense')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('add_expense');
        $data['get_expenseitem'] = $this->Expense_model->get_expenseitem();


        $content = $this->parser->parse('expense/add_expense', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

//    ============= its for create_expense ========
    public function create_expense() {
        $date = $this->input->post('date');
        $expense_type = $this->input->post('expense_type');
        $amount = $this->input->post('amount');
        $expense_data = array(
            'expense_id' => "E" . time(),
            'item_id' => $expense_type,
            'date' => $date,
            'amount' => $amount,
            'created_by' => $this->user_id
        );
//        dd($expense_data);
        $this->db->insert('expense_tbl', $expense_data);
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Expense info save successfully!</div>");
        redirect('CExpense/add_expense/1');
    }

//    ============ its for manage_expense ==============
    public function manage_expense($carry = null) {
        $this->permission->check_label('manage_expense')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('manage_expense');
        $data['get_expenseitem'] = $this->Expense_model->get_expenseitem();


        $content = $this->parser->parse('expense/manage_expense', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

//    =================== its for expenselist_custom =============
    public function expenselist_custom() {
        $CI = & get_instance();
        $CI->load->library('occational');
        $web_settings = $this->Web_settings->retrieve_setting_editdata();
        $currency = $web_settings[0]['currency'];
        $position = $web_settings[0]['currency_position'];

        $list = $this->Expense_model->get_allexpense();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rowdata) {
            $no++;
//            $status = array('1' => 'Yes', '0' => 'No');
            $row = array();
            $update = '';
            $delete = '';
//            if ($this->permission->method('empmgt', 'update')->access()):
            $update = '<input name="url" type="hidden" id="url_' . $rowdata->expense_id . '" value="" /><a onclick="expense_edit(' . $rowdata->expense_id . ')" style="cursor:pointer;color:#fff;" class="btn btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a> ';
//            endif;
//            if ($this->permission->method('empmgt', 'create')->access()):
            $delete = '<a href="' . base_url() . 'maintenance/maintenance/delete_maintservice/' . $rowdata->expense_id . '" onclick="return confirm(\'' . display('are_you_sure') . '\') " class="btn btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>';
//            endif;
            $row[] = $no;
            $row[] = $CI->occational->dateConvertMyformat($rowdata->date);
            $row[] = $rowdata->item_name;
            $row[] = (($position == 0) ? "$currency $rowdata->amount" : "$rowdata->amount $currency");
//            $row[] = $status[$rowdata->isactive];
            $row[] = $update . $delete;
            $data[] = $row;
        }
        //print_r($data);
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Expense_model->count_allexpense(),
            "recordsFiltered" => $this->Expense_model->count_filterexpense(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

//================= its for expense_statement ============
    public function expense_statement() {
        $this->permission->check_label('expense_statement')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('manage_expense');
        $data['get_expenseitem'] = $this->Expense_model->get_expenseitem();

        $content = $this->parser->parse('expense/expense_statement', $data, true);
//        $this->template->full_admin_html_view($content);
        $this->template->partial_admin_html_view($content);
    }

//    ============== its for statement result =================
    public function statement_result() {
        $this->load->model('Web_settings');
        $item_id = $this->input->post('item_id');
        $from_date = $this->input->post('from_date');
        $end_date = $this->input->post('end_date');
        $data['statement_result'] = $this->Expense_model->statement_result($item_id, $from_date, $end_date);
//        dd($data['statement_result']);
        $data['currency_details'] = $this->Web_settings->retrieve_setting_editdata();

        $this->load->view('expense/statement_result', $data);
    }

//    ============ its for expenseitem_delete ============
    public function expenseitem_delete($item_id) {
        $check_item = $this->db->select('*')->from('expense_tbl')->where('item_id', $item_id)->get()->row();
        if ($check_item) {
            $this->session->set_flashdata('error', "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>It has child option!</div>");
            redirect('CExpense/expense_item/1');
        } else {
            $this->db->where('item_id', $item_id)->delete('expense_item_tbl');
            $this->session->set_flashdata('success', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Deleted successfully!</div>');
            redirect('CExpense/expense_item/1');
        }
    }

}
