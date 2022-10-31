<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Role extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function checkMenuSetup($menu_name, $module) {
        $query = $this->db->select('*')->from('menusetup_tbl')
                        ->where('menu_title', $menu_name)
                        ->where('module', $module)
                        ->get()->result();
        return $query;
    }

    public function menusetup_save($allMenu) {
        $this->db->insert('menusetup_tbl', $allMenu);
        $this->session->set_flashdata('success', "<div class='alert alert-success'>Menu save successfully!");
    }

//    =============== menu list =============
    public function menu_setuplist($offset, $limit) {
        $query = $this->db->select('*')
                        ->from('menusetup_tbl')
//                        ->where('status', 1)
                        ->order_by('id', 'desc')
                        ->limit($offset, $limit)
                        ->get()->result();
        return $query;
    }

//    ============ its for get_menu_edit ==============
    public function get_menu_edit($menu_id) {
        $this->db->select('*');
        $this->db->from('menusetup_tbl');
//        $this->db->where('status', 1);
        $this->db->where('id', $menu_id);
        $query = $this->db->get();
        return $query->result();
    }

    //    ========== its for menu_search ================
    public function menu_search($keyword) {
        $this->db->select('*');
        $this->db->from('menusetup_tbl');
        $this->db->like('menu_title', $keyword, 'both');
        $this->db->or_like('page_url', $keyword, 'both');
        $query = $this->db->get();
        return $query->result();
    }

    public function create($data = array()) {
        $this->db->where('role_id', $data[0]['role_id'])->delete('role_permission_tbl');
        return $this->db->insert_batch('role_permission_tbl', $data);
    }

//======== its for role_list =========== 
    public function role_list() {
        $query = $this->db->select('*')
                        ->from('role_tbl')
                        ->get()->result();
        return $query;
    }

     public function location_list_role() {
        $query = $this->db->select('*')
                        ->from('locations_tbl')
                        ->get()->result();
        return $query;
    }

//    =============== its for get users ==============
    public function get_users() {
        $query = $this->db->select('*')->from('users a')
                        ->join('user_login b', 'b.user_id = a.user_id')
                        ->where('b.user_type', '2')
                        ->get()->result();
        return $query;
    }

    //    ============ its for user_access_role ===============
    public function user_access_role() {
        $this->db->select('a.*, b.*, c.role_name');
        $this->db->from('user_access_tbl a');
        $this->db->join('users b', 'b.user_id = a.user_id');
        $this->db->join('role_tbl c', 'c.id = a.role_id');
        $this->db->order_by('a.role_acc_id', 'desc');
        $this->db->group_by('a.user_id');
        $query = $this->db->get();
        return $query->result();
    }

//    ============ its for  edit_user_access_role ========= 
    public function edit_user_access_role($access_id) {
        $query = $this->db->select('*')
                ->from('user_access_tbl a')
                ->where('a.role_acc_id', $access_id)
                ->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

}
