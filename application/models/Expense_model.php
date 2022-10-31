<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Expense_model extends CI_Model {

    //    =============== expense list =============
    public function expense_itemlist($offset, $limit) {
        $query = $this->db->select('*')
                        ->from('expense_item_tbl')
                        ->where('status', 1)
                        ->order_by('id', 'desc')
                        ->limit($offset, $limit)
                        ->get()->result();
        return $query;
    }

//    ==================its for get expense item =========
    public function get_expenseitem() {
        $this->db->select('*');
        $this->db->from('expense_item_tbl');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get()->result();
        return $query;
    }

    //    =============== expense edit =============
    public function expenseitem_edit($item_id) {
        $query = $this->db->select('*')
                        ->from('expense_item_tbl')
                        ->where('item_id', $item_id)
                        ->get()->row();
        return $query;
    }

    public function checkExpenseItem($expense_item) {
        $query = $this->db->select('*')->from('menusetup_tbl')
                        ->where('menu_title', $menu_name)
                        ->where('module', $module)
                        ->get()->result();
        return $query;
    }

    private function get_mservicedata_query() {
        $column_order = array(null, 'item_name'); //set column field database for datatable orderable
        $column_search = array('item_name'); //set column field database for datatable searchable 
        $order = array('id' => 'desc');
        //add custom filter here
        if ($this->input->post('item')) {
            $this->db->like('item_name', $this->input->post('item'));
        }
//        if ($this->input->post('ser_namesr')) {
//            $this->db->like('servicename', $this->input->post('ser_namesr'));
//        }


        $this->db->from('expense_item_tbl');
        $i = 0;
        foreach ($column_search as $item) { // loop column 
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($order)) {
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_allexpenseitem() {
        $this->get_mservicedata_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtermservice() {
        $this->get_mservicedata_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_allmservice() {
        $this->db->from('expense_item_tbl');
        return $this->db->count_all_results();
    }

//    ========= its for get_allexpense ==========
    public function get_allexpense() {
        $this->get_allexpense_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    private function get_allexpense_query() {
        $column_order = array(null, 'item_name'); //set column field database for datatable orderable
        $column_search = array('item_name'); //set column field database for datatable searchable 
        $order = array('a.id' => 'desc');
        //add custom filter here
//        if ($this->input->post('item')) {
//            $this->db->like('item_name', $this->input->post('item'));
//        }
//        if ($this->input->post('ser_namesr')) {
//            $this->db->like('servicename', $this->input->post('ser_namesr'));
//        }


        $this->db->from('expense_tbl a');
        $this->db->join('expense_item_tbl b', 'b.item_id = a.item_id');
        $i = 0;
        foreach ($column_search as $item) { // loop column 
            if ($_POST['search']['value']) { // if datatable send POST for search
                if ($i === 0) { // first loop
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if (count($column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) { // here order processing
            $this->db->order_by($column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($order)) {
            $order = $order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function count_filterexpense() {
        $this->get_allexpense_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_allexpense() {
        $this->db->from('expense_tbl');
        return $this->db->count_all_results();
    }

//    ========== its for statement_result ===========
    public function statement_result($item_id = null, $from_date = null, $end_date = null) {
        $date_range = "a.date BETWEEN '$from_date' AND '$end_date'";
        $this->db->select('*');
        $this->db->from('expense_tbl a');
        $this->db->join('expense_item_tbl b', 'b.item_id = a.item_id');
        if ($item_id && $from_date && $end_date) {
            $this->db->where('a.item_id', $item_id);
            $this->db->where($date_range);
        }
        if ($from_date && $end_date) {
            $this->db->where($date_range);
        }
        if ($item_id) {
            $this->db->where('a.item_id', $item_id);
        }
        $this->db->order_by('a.id', 'desc');
        $query = $this->db->get();
        return $query->result();
    }

}
