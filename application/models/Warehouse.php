<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Warehouse extends CI_Model {

    private $table = 'warehouse_tbl';

    function __construct() {
        parent::__construct();
    }
    
    public function save_warehouse($data){
        $this->db->insert($this->table,$data);
        return $this->db->affected_rows();    
    }

    public function save_product_location($data){
        
        $this->db->insert('product_location_tbl',$data);
        return $this->db->affected_rows();    
    }

    public function get_all_warehouses(){
        $this->db->select('*');
        $this->db->from('warehouse_tbl');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get()->result();
        return $query;
    }
    public function locationList() {
        $this->db->select('*');
        $this->db->from('locations_tbl');
        $this->db->order_by('location_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
    }
    public function productList() {
        $this->db->select('*');
        $this->db->from('product_information');
        // $this->db->WHERE('product_id NOT IN(SELECT product_id FROM product_location_tbl)');
        $this->db->order_by('product_id', 'desc');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
        return false;
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


        $this->db->from('warehouse_tbl');
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


    public function count_filtermservice() {
        $this->get_mservicedata_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_allmservice() {
        $this->db->from('warehouse_tbl');
        return $this->db->count_all_results();
    }

    public function warehouseitem_edit($item_id) {
        $query = $this->db->select('*')
                        ->from('warehouse_tbl')
                        ->where('id', $item_id)
                        ->get()->row();
        return $query;
    }

}
