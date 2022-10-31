<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cpayment extends CI_Controller {

    public $menu;
    private $user_id;

    function __construct() {
        parent::__construct();
        $this->load->library('auth');
        $this->load->library('lpayment');
        $this->load->library('lsettings');
        $this->load->library('session');
        $this->load->library('Smsgateway');
        $this->load->model('Payment');
        $this->load->library('linvoice');
        $this->load->library('laccounts');
        $this->load->model('Settings');
        $this->load->model('Accounts');
        $this->load->model('Web_settings');
        $this->load->model('Invoices');
        $this->auth->check_admin_auth();
        $this->template->current_menu = 'Payment';
        $this->user_id = $this->session->userdata('user_id'); //dd($this->user_id);
    }

    public function index() {
        $this->permission->check_label('payment')->create()->redirect();
        $content = $this->lpayment->payement_form();
//        $this->template->full_admin_html_view($content);
        $this->template->partial_admin_html_view($content);
    }

    public function receipt_transaction() {
        $this->permission->check_label('receipt')->create()->redirect();
        $content = $this->lpayment->receipt_form();
//        $this->template->full_admin_html_view($content);
        $this->template->partial_admin_html_view($content);
    }

    /* transection method add start */

    public function transection_entry() {
        $todays_date = $todays_date = $this->input->post('date'); // date("m-d-Y");

        $payment_type = $this->input->post('payment_type');
        $cheque_no = $this->input->post('cheque_no');
        $cheque_mature_date = $this->input->post('cheque_mature_date');
        $bank_name = $this->input->post('bank_name');
        $account_table = $this->input->post('account_table');
        $amount = $this->input->post('amount');
        $description = $this->input->post('description');
        $tran_category = $this->input->post('transection_category');
        $transaction_id = $this->auth->generator(15);
        $employee_id = $this->input->post('employee_id');

        if ($tran_category == 1) {
            $relation_id = $this->input->post('supplier_id');
        } elseif ($tran_category == 2) {
            $relation_id = $this->input->post('customer_id');
        } elseif ($tran_category == 3) {
            $relation_id = $this->input->post('office');
        } elseif ($tran_category == 4) {
            $relation_id = $this->input->post('loan_id');
        } elseif ($tran_category == 5) {
            $relation_id = $this->input->post('employee_id');
        }



        $dataP = array(
            'transaction_id' => $transaction_id,
            'date_of_transection' => $this->input->post('date'),
            'transection_category' => $this->input->post('transection_category'),
            'transection_type' => $this->input->post('transectio_type'),
            'relation_id' => $relation_id,
            'amount' => $this->input->post('amount'),
            'pay_amount' => $this->input->post('pay_amount'),
            'transection_mood' => $this->input->post('payment_type'),
            'description' => $this->input->post('description'),
            'is_transaction' => 1,
        );

        $this->db->insert('transection', $dataP);

        if ($payment_type == 1) {
            $status = 1;
        } else {
            $status = 0;
        }

        $receipt_no = $this->auth->generator(10);
        //$transaction_id=$this->auth->generator(15);
        $trans_type = $this->input->post('transectio_type');

        $customer_id = $this->input->post('customer_id');
        if ($customer_id AND $trans_type == 1) {
            //Data ready for customer ledger
            $data = array(
                'transaction_id' => $transaction_id,
                'customer_id' => $customer_id,
                'invoice_no' => NULL,
                'receipt_no' => $receipt_no,
                'amount' => $this->input->post('pay_amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $todays_date,
                'status' => 1,
                'd_c' => 'd',
            );
            $this->Accounts->customer_ledger($data);
        }

        if ($customer_id AND $trans_type == 2) {
            //Data ready for customer ledger
            $datarcv = array(
                'transaction_id' => $transaction_id,
                'customer_id' => $customer_id,
                'invoice_no' => NULL,
                'receipt_no' => $receipt_no,
                'description' => "Accunts",
                'amount' => $this->input->post('amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $todays_date,
                'status' => 1,
                'd_c' => 'c',
            );
            $this->Accounts->customer_ledger($datarcv);
//            ======== its for sms and email send ===========
            $amt = $this->input->post('amount');
            if ($tran_category == 2 AND $trans_type == 2) {
                $sms_setting = $this->db->select("*")->from('sms_gateway')->where('gateway_id', 1)->get()->row();
                $mail_setting = $this->db->select('*')->from('mail_config_tbl')->where('id', 1)->get()->row();
                $customer_info = $this->db->select('*')->from('customer_information a')->where('a.customer_id', $customer_id)->get()->row();
                $name = $customer_info->customer_name;
                $email = $customer_info->customer_email;
                $mobile = $customer_info->customer_mobile;
                if ($sms_setting->is_invoice == 1) {
                    $this->smsgateway->send([
                        'apiProvider' => $sms_setting->provider_name,
                        'username' => $sms_setting->user,
                        'password' => $sms_setting->password,
                        'from' => $sms_setting->authentication,
                        'to' => $mobile,
                        'message' => "Dear $name, Your Payment is successfully done. Your Transaction ID $transaction_id and Payment Amount $amt .",
                    ]);

                    // save delivary data
                    $custom_smsdata = array(
                        'gateway' => $sms_setting->provider_name,
                        'from' => $sms_setting->authentication,
                        'to' => $mobile,
                        'message' => "Dear $name, Your Payment is successfully done. Your Transaction ID $transaction_id and Payment Amount $amt .",
                        'created_date' => date("Y-m-d h:i:s"),
                        'created_by' => $this->user_id,
                    );
                    $this->db->insert('custom_sms_tbl', $custom_smsdata);
                }
                if ($mail_setting->is_invoice == 1) {
                    $this->Invoices->mail_send($name, $mobile, $email, $transaction_id, $amt);
                }
            }
        }

        $supplier_id = $this->input->post('supplier_id');
        if ($supplier_id AND $trans_type == 1) {
            $deposit_no = $this->auth->generator(10);
            $datapay = array(
                'transaction_id' => $transaction_id,
                'supplier_id' => $supplier_id,
                'chalan_no' => NULL,
                'deposit_no' => $deposit_no,
                'amount' => $this->input->post('pay_amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $todays_date,
                'status' => $status,
                'd_c' => 'd'
            );
            $this->Accounts->supplier_ledger($datapay);
        }
        $supplier_id = $this->input->post('supplier_id');
        if ($supplier_id AND $trans_type == 2) {
            $deposit_no = $this->auth->generator(10);
            $data = array(
                'transaction_id' => $transaction_id,
                'supplier_id' => $supplier_id,
                'chalan_no' => NULL,
                'deposit_no' => $deposit_no,
                'amount' => $this->input->post('amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $todays_date,
                'status' => $status,
                'd_c' => 'c'
            );
            $this->Accounts->supplier_ledger($data);
        }

        $loan_id = $this->input->post('loan_id');
        if ($loan_id AND $trans_type == 1) {
            $data14 = array(
                'transaction_id' => $transaction_id,
                'person_id' => $relation_id,
                'credit' => $this->input->post('pay_amount'),
                'date' => $this->input->post('date'),
                'details' => $this->input->post('description'),
                'status' => 2
            );
            $result = $this->Settings->submit_payment($data14);
        }
        $loan_id = $this->input->post('loan_id');
        if ($loan_id AND $trans_type == 2) {
            $data15 = array(
                'transaction_id' => $transaction_id,
                'person_id' => $relation_id,
                'debit' => $this->input->post('amount'),
                'date' => $this->input->post('date'),
                'details' => $this->input->post('description'),
                'status' => 1
            );
            $result = $this->Settings->submit_payment($data15);
        }
        $customer_id = $this->input->post('customer_id');
        if ($customer_id AND $trans_type == 2) {
            $account_adjustment = array(
                'transection_id' => $transaction_id,
                'tracing_id' => $customer_id,
                'date' => $this->input->post('date'),
                'amount' => $this->input->post('amount'),
                'payment_type' => 1,
                'description' => 'ITP',
                'status' => 1
            );
            $this->db->insert('inflow_92mizdldrv', $account_adjustment);
        }

//        ========= its for employee ledger =============
        if ($employee_id AND $trans_type == 1) {
            $deposit_no = $this->auth->generator(10);
            $employee_debit = array(
                'transaction_id' => $transaction_id,
                'employee_id' => $employee_id,
                'chalan_no' => NULL,
                'deposit_no' => $deposit_no,
                'amount' => $this->input->post('pay_amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $todays_date,
                'status' => $status,
                'd_c' => 'd'
            );
            $this->db->insert('employee_ledger', $employee_debit);
        }
        if ($employee_id AND $trans_type == 2) {
            $deposit_no = $this->auth->generator(10);
            $employee_credit = array(
                'transaction_id' => $transaction_id,
                'employee_id' => $employee_id,
                'chalan_no' => NULL,
                'deposit_no' => $deposit_no,
                'amount' => $this->input->post('amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $todays_date,
                'status' => $status,
                'd_c' => 'c'
            );
            $this->db->insert('employee_ledger', $employee_credit);
        }

        $this->session->set_userdata(array('message' => display('successfully_saved')));
        redirect(base_url('Cpayment/manage_payment/1'));
        exit;
    }

    /* transection method add End */

    public function manage_payment($carry = null) {
        $this->permission->check_label('manage_transaction')->create()->redirect();
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->library('lpayment');
        $CI->load->model('Payment');
        $content = $CI->lpayment->payment_list();
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    public function payment_delete() {
        $CI = & get_instance();
        $this->auth->check_admin_auth();
        $CI->load->model('Payment');
        $id = $_POST['transaction_id'];
        $result = $CI->Payment->delete_payment($id);
        $as = $CI->Payment->delete_customer_ledger($id);
        $asd = $CI->Payment->delete_supplier_ledger($id);
        $df = $CI->Payment->delete_person_ledger($id);
        $dsf = $CI->Payment->delete_inflow($id);
        //$result=$CI->Payment->delete_invoice($id);
        return true;
    }

    public function payment_update_form() {
        $trans = $this->uri->segment(3);
        $content = $this->lpayment->payment_up_data($trans);
        $this->menu = array('label' => 'Edit Data', 'url' => 'Cpayment');
        $this->template->full_admin_html_view($content);
    }

    public function payment_update() {
        $trans = $this->input->post('transaction_id');

        $payment_type = $this->input->post('payment_type');
        $cheque_no = $this->input->post('cheque_no');
        $cheque_mature_date = $this->input->post('cheque_mature_date');
        $bank_name = $this->input->post('bank_name');
        $account_table = $this->input->post('account_table');
        $amount = $this->input->post('amount');
        $description = $this->input->post('description');
        $tran_category = $this->input->post('transection_category');

        if ($tran_category == 1) {
            $relation_id = $this->input->post('supplier_id');
        } elseif ($tran_category == 2) {
            $relation_id = $this->input->post('customer_id');
        } elseif ($tran_category == 3) {
            $relation_id = $this->input->post('office');
        } elseif ($tran_category == 4) {
            $relation_id = $this->input->post('loan_id');
        } elseif ($tran_category == 5) {
            $relation_id = $this->input->post('employee_id');
        }

        $trans_type = $this->input->post('transection_type');

        if (!empty($this->input->post('transection_category'))) {
            // print_r($_POST);
            $data = array(
                'transaction_id' => $trans,
                'date_of_transection' => $this->input->post('date'),
                'transection_category' => $this->input->post('transection_category'),
                'transection_type' => $this->input->post('transection_type'),
                'relation_id' => $relation_id,
                'amount' => $this->input->post('amount'),
                'pay_amount' => $this->input->post('pay_amount'),
                'transection_mood' => $this->input->post('payment_type'),
                'description' => $this->input->post('description'),
                'is_transaction' => 1,
            );
            // print_r($data);
            // exit;
            $this->Payment->update_payment($data, $trans);
        }


        if ($payment_type == 1) {
            $status = 1;
        } else {
            $status = 0;
        }

        $customer_id = $this->input->post('customer_id');
        if ($customer_id AND $trans_type == 1) {
            //Data ready for customer ledger
            $datacd = array(
                'transaction_id' => $trans,
                'customer_id' => $customer_id,
                'invoice_no' => NULL,
                'receipt_no' => '',
                'amount' => $this->input->post('pay_amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $this->input->post('date'),
            );

            $this->Payment->customer_leder_updata($datacd, $trans);
        }

        $customer_id = $this->input->post('customer_id');
        if ($customer_id AND $trans_type == 2) {
            //Data ready for customer ledger
            $datarcv = array(
                'transaction_id' => $trans,
                'customer_id' => $customer_id,
                'invoice_no' => NULL,
//                'receipt_no' => '1233',
                'amount' => $this->input->post('amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $this->input->post('date'),
            );


            $this->Payment->customer_leder_updata($datarcv, $trans);
        }


        if ($customer_id AND $trans_type == 2) {
            $account_adjustment = array(
                'transection_id' => $trans,
                'tracing_id' => $customer_id,
                'date' => $this->input->post('date'),
                'amount' => $this->input->post('amount'),
                    // 'payment_type'      =>  1,
                    // 'description'       =>  'ITP',
                    // 'status'            =>  1
            );
            $this->Payment->customer_inflow_updata($account_adjustment, $trans);
        }
        $supplier_id = $this->input->post('supplier_id');
        if ($supplier_id AND $trans_type == 1) {
            $deposit_no = $this->auth->generator(10);
            $datapay = array(
                'transaction_id' => $trans,
                'supplier_id' => $supplier_id,
                'chalan_no' => NULL,
                // 'deposit_no'    =>  $deposit_no,
                'amount' => $this->input->post('pay_amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                //'cheque_no'     =>  $cheque_no,
                'date' => $this->input->post('date'),
            );
            $this->Payment->supplier_leder_updata($datapay, $trans);
        }

        $supplier_id = $this->input->post('supplier_id');
        if ($supplier_id AND $trans_type == 2) {
            $deposit_no = $this->auth->generator(10);
            $datarec = array(
                'transaction_id' => $trans,
                'supplier_id' => $supplier_id,
                'chalan_no' => NULL,
                // 'deposit_no'    =>  $deposit_no,
                'amount' => $this->input->post('amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                //'cheque_no'     =>  $cheque_no,
                'date' => $this->input->post('date'),
            );
            $this->Payment->supplier_leder_updata($datarec, $trans);
        }

        $loan_id = $this->input->post('loan_id');
        if ($loan_id AND $trans_type == 1) {
            $loan_credit_data = array(
                'transaction_id' => $trans,
                'person_id' => $relation_id,
                'debit' => 0,
                'credit' => $this->input->post('pay_amount'),
                'date' => $this->input->post('date'),
                'details' => $this->input->post('description'),
                'status' => 2
            );
            $this->db->where('transaction_id', $trans);
            $this->db->update('person_ledger', $loan_credit_data);
        }
        $loan_id = $this->input->post('loan_id');
        if ($loan_id AND $trans_type == 2) {
            $loan_dabit_data = array(
                'transaction_id' => $trans,
                'person_id' => $relation_id,
                'debit' => $this->input->post('amount'),
                'credit' => 0,
                'date' => $this->input->post('date'),
                'details' => $this->input->post('description'),
                'status' => 1
            );
            $this->db->where('transaction_id', $trans);
            $this->db->update('person_ledger', $loan_dabit_data);
        }


//        ========= its for employee ledger =============
        if ($employee_id AND $trans_type == 1) {
//            $deposit_no = $this->auth->generator(10);
            $employee_debit = array(
                'transaction_id' => $trans,
                'employee_id' => $employee_id,
                'chalan_no' => NULL,
//                'deposit_no' => $deposit_no,
                'amount' => $this->input->post('pay_amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $todays_date,
                'status' => $status,
                'd_c' => 'd'
            );
            $this->db->where('transaction_id', $trans)->update('employee_ledger', $employee_debit);
        }
        if ($employee_id AND $trans_type == 2) {
//            $deposit_no = $this->auth->generator(10);
            $employee_credit = array(
                'transaction_id' => $trans,
                'employee_id' => $employee_id,
                'chalan_no' => NULL,
//                'deposit_no' => $deposit_no,
                'amount' => $this->input->post('amount'),
                'description' => $description,
                'payment_type' => $payment_type,
                'cheque_no' => $cheque_no,
                'date' => $todays_date,
                'status' => $status,
                'd_c' => 'c'
            );
            $this->db->where('transaction_id', $trans)->update('employee_ledger', $employee_credit);
        }


        $this->session->set_userdata(array('message' => display('successfully_updated')));
        redirect(base_url('Cpayment/manage_payment/1'));
        exit;
    }

    // trans report details
    public function trans_details() {
        $content = $this->lpayment->transection_report_details();
        $this->template->full_admin_html_view($content);
    }

    public function tran_det_id($id) {
        $content = $this->lpayment->transection_data($id);
        $this->template->full_admin_html_view($content);
    }

    #==============Closing form==========#

    public function closing($carry = null) {
        $this->permission->check_label('closing')->create()->redirect();
        $data = array('title' => "Accounts | Daily Closing");
        $data = $this->Accounts->accounts_closing_data();
        $content = $this->parser->parse('accounts/closing_form', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    #====== Cash closing report ============#

    public function closing_report() {
        $this->permission->check_label('closing_report')->create()->redirect();
        $content = $this->laccounts->daily_closing_list();
//        $this->template->full_admin_html_view($content);
        $this->template->partial_admin_html_view($content);
    }

    public function summary_single($start, $end, $account) {
        $data = array('title' => display('accounts_details_data'));

        //Getting all tables name.   
        $data['table_inflow'] = $this->Payment->table_name(2);
        $data['table_outflow'] = $this->Payment->table_name(1);

        $data['accounts'] = $this->Payment->trans_summary_details($start, $end, $account);
        //$data['total_inflow']=$this->accounts->sub_total;

        $content = $this->parser->parse('payment/summary_single', $data, true);
        $this->template->full_admin_html_view($content);
    }

    // transection report

    public function summaryy() {
        $this->permission->check_label('daily_summery')->create()->redirect();
        $content = $this->lpayment->trans_data();
//        $this->template->full_admin_html_view($content);
        $this->template->partial_admin_html_view($content);
    }

    public function getreport_details() {
        $transection_category = $_POST['transection_category'];
        $data['marks'] = $this->Payment->get_details($transection_category);
        $this->load->view("payment/modal", $data);
    }

    public function today_details() {
        $transection_category = $_POST['transection_category'];
        $data['marks'] = $this->Payment->today_details($transection_category);
        $this->load->view("payment/modal", $data);
    }

//date wise report details
    public function date_summary() {
        $this->permission->check_label('daily_cashflow')->create()->redirect();
        $content = $this->lpayment->trans_datewise_data();
//        $this->template->full_admin_html_view($content);
        $this->template->partial_admin_html_view($content);
    }

    // search date between controller 
    public function search_datewise() {
        $start = $this->input->post('from_date');
        $end = $this->input->post('to_date');

        $content = $this->lpayment->result_datewise_data($start, $end);
        $this->template->full_admin_html_view($content);
    }

    //custom report transection

    public function custom_report() {
        $content = $this->lpayment->trans_custom_report_data();
        $this->template->full_admin_html_view($content);
    }

// custom report search

    public function custom_search_datewise() {
        $start = $this->input->post('from_date');
        $end = $this->input->post('to_date');
        $account = $this->input->post('accounts');
        if ($account == "All") {
            $url = "Cpayment/custom_report";
            redirect(base_url($url));
            exit;
        }
        $content = $this->lpayment->custom_result_datewise_data($start, $end, $account);
        $this->template->full_admin_html_view($content);
    }

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

}
