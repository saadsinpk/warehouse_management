<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CRole extends CI_Controller {

    private $user_id = '';

    function __construct() {
        parent::__construct();
        $this->user_id = $this->session->userdata('user_id');
        $this->load->model('Role');
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
    public function menu_setup($carry = null) {
        $this->permission->check_label('add_menu')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = 'Menu Setup';
        $data['parent_menu'] = $this->db->select('id, menu_title')->where('status', 1)->order_by('id', 'desc')->get('menusetup_tbl')->result();

        $config["base_url"] = base_url('CRole/menu_setup/1');
        $config["total_rows"] = $this->db->count_all('menusetup_tbl');
        $config["per_page"] = 15;
        $config["uri_segment"] = 4;
        $config["last_link"] = "Last";
        $config["first_link"] = "First";
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span></li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';
        #Paggination end#


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $limit = $config["per_page"];
        $data['menusetuplist'] = $this->Role->menu_setuplist($limit, $page);
        $data['links'] = $this->pagination->create_links();
        $data['pagenum'] = $page;
        $data['title'] = display('menu_setup');

        $content = $this->parser->parse('roles/menu_setup', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

//    ============ its for  menusetup_save ===========
    public function menusetup_save() {
        $menu_name = $this->input->post('menu_name');
        $url = $this->input->post('menu_url');
        $module = $this->input->post('module');
        $order = $this->input->post('order');
        $parent_menu = $this->input->post('parent_menu');
        $icon = $this->input->post('icon');

        $checkMenuSetup = $this->Role->checkMenuSetup($menu_name, $module);
        if ($checkMenuSetup) {
            $this->session->set_flashdata('error', "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>its allready exists!</div>");
            redirect('CRole/menu_setup');
        } else {
            $allMenu = array(
                'menu_title' => $menu_name,
                'page_url' => $url,
                'module' => $module,
                'ordering' => $order,
                'parent_menu' => $parent_menu,
                'icon' => $icon,
                'created_by' => $this->user_id,
            );
//                        echo '<pre>';            print_r($allMenu);            die();
            $this->Role->menusetup_save($allMenu);
        }
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Menu save successfully!</div>");
        redirect('CRole/menu_setup/1');
    }

//    ========== its for menu_edit ============
    public function menu_edit($menu_id) {
//        $menu_id = $this->input->post('menu_id');
        $data['parent_menu'] = $this->db->select('id, menu_title')->get('menusetup_tbl')->result();
        $data['get_menu_edit'] = $this->Role->get_menu_edit($menu_id);

//        $this->load->view('roles/menu_edit', $data);
           $content = $this->parser->parse('roles/menu_edit', $data, true);
            $this->template->full_admin_html_view($content);
    }

//    ========= its for menusetup_update ==============
    public function menusetup_update() {
        $menu_id = $this->input->post(menu_id);
        $menu_name = $this->input->post('menu_name');
        $url = $this->input->post('menu_url');
        $module = $this->input->post('module');
        $order = $this->input->post('order');
        $parent_menu = $this->input->post('parent_menu');
        $icon = $this->input->post('icon');
        $status = $this->input->post('status');

        $allMenu = array(
            'menu_title' => $menu_name,
            'page_url' => $url,
            'module' => $module,
            'ordering' => $order,
            'parent_menu' => $parent_menu,
            'icon' => $icon,
            'status' => $status,
            'created_by' => $this->user_id,
        );
        $this->db->where('id', $menu_id);
        $this->db->update('menusetup_tbl', $allMenu);
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Menu updated successfully!</div>");
        redirect('CRole/menu_setup/1');
    }

//    ============= its for menu delete =============
    public function menusetup_delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('menusetup_tbl');
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Menu deleted successfully!</div>");
        redirect($_SERVER['HTTP_REFERER']);
    }

//    ============= its for menu_search ============ 
    public function menu_search() {
        $keyword = $this->input->post('keyword');
        $data['menusetuplist'] = $this->Role->menu_search($keyword);

        $this->load->view('roles/menu_search_result', $data);
    }

//=============== its for moduleAutocomplete ============
    public function moduleAutocomplete() {
        $item[] = '';
        $query = $this->input->post('query');
        $get_results = $this->db->select('id,menu_title')->from('menusetup_tbl')->like('menu_title', $query)->group_by('menu_title')->get()->result();
//        echo $this->db->last_query();
        foreach ($get_results as $single) {
            $item[] = str_replace("_", " ", ucfirst($single->menu_title));
//            $item[] = $single->menu_title.'|'.$single->id;
        }
//        echo $this->db->last_query();
        echo json_encode($item);
    }

//      ============= its for role_permission =============== 
    public function role_permission($carry = null) {
        $this->permission->check_label('add_role')->create()->redirect();
        $data['title'] = display('role_permission');
        $data['modules'] = $this->db->select('*')->from('menusetup_tbl')->where('status', 1)->where('parent_menu', 0)
                        ->order_by('ordering')->get()->result();
//        echo $this->db->last_query();



        $content = $this->parser->parse('roles/role_permission', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //    ========= its for module_save ==========
    public function role_save() {
        $role_name = $this->input->post('role_name');
        $description = $this->input->post('role_description');
        $roleData = array(
            'role_name' => $role_name,
            'description' => $description,
            'created_by' => $this->user_id,
        );
        $this->db->insert('role_tbl', $roleData);
        $role_id = $this->db->insert_id();

        $module = $this->input->post('module');
        $menu_id = $this->input->post('menu_id');
        $create = $this->input->post('create');
        $read = $this->input->post('read');
        $edit = $this->input->post('edit');
        $delete = $this->input->post('delete');

        $new_array = array();
        for ($m = 0; $m < sizeof($module); $m++) {
            for ($i = 0; $i < sizeof($menu_id[$m]); $i++) {
                for ($j = 0; $j < sizeof($menu_id[$m][$i]); $j++) {
                    $dataStore = array(
                        'role_id' => $role_id,
                        'menu_id' => $menu_id[$m][$i][$j],
                        'can_create' => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                        'can_edit' => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                        'can_access' => (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                        'can_delete' => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                        'created_by' => $this->user_id,
                    );
                    array_push($new_array, $dataStore);
                }
            }
        }

        if ($this->Role->create($new_array)) {
            $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Data save successfully!</div>");
        } else {
            $this->session->set_flashdata('error', "<div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Please try again!</div>");
        }
        redirect('CRole/role_permission/1');
    }

    //    =========== its for role_list ==========
    public function role_list($carry = null) {
        $this->permission->check_label('role_list')->create()->redirect();
        $data['title'] = display('role_list');
        $data['role_list'] = $this->Role->role_list();


        $content = $this->parser->parse('roles/role_list', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //    =========== its for edit_role ===========
    public function role_edit($id) {
        $data['title'] = display('role_edit');
        $data['modules'] = $this->db->select('*')->from('menusetup_tbl')->where('status', 1)->where('parent_menu', 0)->order_by('ordering')->get()->result();

        $data['roleInfo'] = $this->db->select("*")
                        ->from('role_tbl')
                        ->where('id', $id)
                        ->get()->result_array();
        $data['permissionInfo'] = $this->db->select('role_permission_tbl.*, menusetup_tbl.menu_title')
                        ->from('role_permission_tbl')
                        ->join('menusetup_tbl', 'menusetup_tbl.id=role_permission_tbl.menu_id')
                        ->where('role_id', $id)
                        ->get()->result();

        $content = $this->parser->parse('roles/role_edit', $data, true);
        $this->template->full_admin_html_view($content);
    }

//    =============== its for role update ===============
    public function role_update() {
        $role_id = $this->input->post('role_id');
        $rolData = array(
            'role_name' => $this->input->post('role_name'),
            'description' => $this->input->post('role_description'),
            'created_by' => $this->user_id,
        );
        $this->db->where('id', $role_id)->update('role_tbl', $rolData);

        //======= ==========
        $module = $this->input->post('module');
        $menu_id = $this->input->post('menu_id');
        $create = $this->input->post('create');
        $read = $this->input->post('read');
        $update = $this->input->post('edit');
        $delete = $this->input->post('delete');

        $new_array = array();
        for ($m = 0; $m < sizeof($module); $m++) {
            if (array_key_exists($m, $module)) {
                for ($i = 0; $i < sizeof($menu_id[$m]); $i++) {
                    for ($j = 0; $j < sizeof($menu_id[$m][$i]); $j++) {
                        $dataStore = array(
                            'role_id' => $role_id,
                            'menu_id' => $menu_id[$m][$i][$j],
                            'can_create' => (!empty($create[$m][$i][$j]) ? $create[$m][$i][$j] : 0),
                            'can_edit' => (!empty($update[$m][$i][$j]) ? $update[$m][$i][$j] : 0),
                            'can_access' => (!empty($read[$m][$i][$j]) ? $read[$m][$i][$j] : 0),
                            'can_delete' => (!empty($delete[$m][$i][$j]) ? $delete[$m][$i][$j] : 0),
                            'created_by' => $this->user_id,
                        );
                        array_push($new_array, $dataStore);
                    }
                }
            }
        }

        if ($this->Role->create($new_array)) {
            $this->session->set_flashdata('success', "<div class='alert alert-success msg'>Data updated successfully!</div>");
        } else {
            $this->session->set_flashdata('error', "<div class='alert alert-danger msg'>Please try again</div>");
        }
        redirect('CRole/role_list/1');
    }

//    ============= its for user_role ===========
    public function user_role($carry = null) {
        $this->permission->check_label('user_assign_role')->create()->redirect();
        $data['title'] = display('assign_user_role');
//        $data['tutor_list'] = $this->Tutors->retrieve_active_tutor_list();
        $data['user_list'] = $this->Role->get_users();
        $data['role_list'] = $this->Role->role_list();
        $data['location_list']=$this->Role->location_list_role();
        
        $content = $this->parser->parse('roles/user_role', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //    ========== its for assign_user_role_save ===============
    public function assign_user_role_save() {
        $user_id = $this->input->post('user_id');
        $role_id = $this->input->post('role_id');
        
        $this->db->where('user_id', $user_id)->delete('user_access_tbl');
        // $store_id=0;
        // for ($i = 0; $i < count($role_id); $i++) {

        //     if($role_id[$i]==15){
        //         $store_id = $this->input->post('store_id');
        //     }
        //     $user_role = array(
        //         'user_id' => $user_id,
        //         'role_id' => $role_id[$i],
        //         'store_id' => $store_id,
        //         'created_by' => $this->user_id,
        //     );
        //     $this->db->insert('user_access_tbl', $user_role);
        // }

        $store_id=0;
        if($role_id==15){
            $store_id = $this->input->post('store_id');
        }
        $user_role = array(
            'user_id' => $user_id,
            'role_id' => $role_id,
            'store_id' => $store_id,
            'created_by' => $this->user_id,
        );
        $this->db->insert('user_access_tbl', $user_role);

        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>User role assign successfully!</div>");
        redirect('CRole/user_role/1');
    }

// ======== its for user role check ==========
    public function user_role_check() {
        $user_id = $this->input->post('user_id');
        $check_user_role = $this->db->select('*')->from('user_access_tbl a')
                        ->join('role_tbl b', 'b.id = a.role_id', 'left')
                        ->where('a.user_id', $user_id)->get()->result();
        if (empty($check_user_role)) {
            $notFound = array(array('role_name' => 'Not Found'));
            echo json_encode($notFound);
        } else {
            echo json_encode($check_user_role);
        }
    }

    //    ============= its for access_role =============== 
    public function access_role($carry = null) {
        $this->permission->check_label('assigned_role')->create()->redirect();
        $data['title'] = display('user_access_role');
        $data['user_access_role'] = $this->Role->user_access_role();
        $data['role_list'] = $this->Role->role_list();

        $content = $this->parser->parse('roles/access_role', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }

    //    ========= its for edit_user_access_role ================
    public function edit_user_access_role($access_id) {
        $data['title'] = display('assign_user_role_edit');
        $data['user_list'] = $this->Role->get_users();
        $data['role_list'] = $this->Role->role_list();
        $data['location_list']=$this->Role->location_list_role();
        $data['edit_user_access_role'] = $this->Role->edit_user_access_role($access_id);
        // echo "<pre>";
        // print_r($data['edit_user_access_role']);
        // echo "</pre>";
//        echo $data['edit_user_access_role'][0]->user_id; 
//        echo '<pre>';        print_r($data['edit_user_access_role']);die();
        $data['assign_role'] = $this->db->select('role_id')
                        ->where('user_id', $data['edit_user_access_role'][0]->user_id)
                        ->get('user_access_tbl')->result();

        $content = $this->parser->parse('roles/edit_user_access_role', $data, true);
        $this->template->full_admin_html_view($content);
    }

//=========== its for assign_user_role_update ===========
    public function assign_user_role_update($role_acc_id) {
        $user_id = $this->input->post('user_id');
        $role_id = $this->input->post('role_id');
        $store_id=0;
        

        $this->db->where('user_id', $user_id)->delete('user_access_tbl');
        if($role_id==15){
            $store_id = $this->input->post('store_id');
        }
        $user_role = array(
            'user_id' => $user_id,
            'role_id' => $role_id,
            'store_id' => $store_id,
            'created_by' => $this->user_id,
        );
        $this->db->insert('user_access_tbl', $user_role);
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>User role assign updated successfully!</div>");
        redirect('CRole/access_role/1');
    }

    //    ========== its for slider active =======
    public function menu_active($id) {
        $data = array(
            'status' => 1,
        );
        $this->db->where('id', $id);
        $this->db->update('menusetup_tbl', $data);
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>This menu active successfully!</div>");
        redirect('CRole/menu_setup/1');
    }

//    ========== its for slider inactive =======
    public function menu_inactive($id) {
        $data = array(
            'status' => 0,
        );
        $this->db->where('id', $id);
        $this->db->update('menusetup_tbl', $data);
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>This menu inactive successfully!</div>");
        redirect('CRole/menu_setup/1');
    }

//    ============== its for role delete ===============
    public function role_delete($id) {
        $this->db->where('id', $id)->delete('role_tbl');
        $this->db->where('role_id', $id)->delete('role_permission_tbl');
        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Role permission deleted successfully!</div>");
        redirect('CRole/role_list/1');
    }
//    ======= its for all icon load ===========
    public function icon_load(){
           $data['title'] = display('all_icon');
           
//        $content = $this->parser->parse('roles/icon_load', $data, true);
//        if ($carry == 1) {
//            $this->template->full_admin_html_view($content);
//        } else {
//            $this->template->partial_admin_html_view($content);
//        }
           
        $this->load->view('roles/icon_load', $data);
    }

}
