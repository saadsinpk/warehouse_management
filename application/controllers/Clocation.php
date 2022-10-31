<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clocation extends CI_Controller {

    public $location_id;

    function __construct() {
        parent::__construct();
        $this->load->model('Location','loc');
        $this->template->current_menu = 'location';
    }

    //Index page load
    public function index($carry = null) {
        $this->permission->check_label('location')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('location');
                
         $content = $this->parser->parse('location/add_location_form', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            
            $this->template->partial_admin_html_view($content);
        }
    }


    public function location_save() {
        $this->permission->check_label('location')->create()->redirect();
        $location = $this->input->post('location');
        
        $locationData = array(
        'location_id' => time(),
        'location_name' => $location,
        'created_by' => $this->session->user_id,
        'status' => 1,
        );

        $flash_message = $this->loc->save_location($locationData) ? 
        //$this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Location saved successfully!</div>");
        ['class'=>'success','message'=>'Location saved successfully.'] :
        ['class'=>'danger','message'=>'Error saving location.'];
        
        $this->session->set_flashdata('flash_message',$flash_message);
        redirect('Clocation/index/1');
    }
    public function locationlist_custom(){
        $this->permission->check_label('location')->read()->redirect();

        $list = $this->loc->get_all_locations();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rowdata) {
            $no++;
    //            $status = array('1' => 'Yes', '0' => 'No');
            $row = array();
            $update = '';
            $delete = '';
            $viewProducts='';
            if ($this->permission->check_label('location')->update()->access()) {
                $update = '<input name="url" type="hidden" id="url_' . $rowdata->id . '" value="" /><a onclick="locationitem_edit(' . $rowdata->id . ')" style="cursor:pointer;color:#fff;" class="btn btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a> ';
            }
            if ($this->permission->check_label('location')->delete()->access()) {
                $delete = '<a href="' . base_url() . 'Clocation/locationitem_delete/' . $rowdata->id . '" onclick="return confirm(\'' . display('are_you_sure') . '\') " class="btn btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>';
            }
            $isProducts=$this->loc->get_loc_products($rowdata->location_id);
            if($isProducts){
            $viewProducts='&nbsp;<input name="url" type="hidden" id="url_' . $rowdata->id . '" value="" /><a onclick="see_products(' . $rowdata->location_id . ')" style="cursor:pointer;color:#fff;" class="btn btn-warning btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="View Products List"><i class="ti-eye"></i></a> ';
            }

            $row[] = $no;
            $row[] = $rowdata->location_name;
    //            $row[] = $rowdata->groupprice;
    //            $row[] = $status[$rowdata->isactive];
            $row[] = $update . $delete .$viewProducts;
            $row[] = $rowdata->created_date;
            $data[] = $row;
        }
        //print_r($data);
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->loc->count_allmservice(),
            "recordsFiltered" => $this->loc->count_filtermservice(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function manage_location($carry = null) {
        $this->permission->check_label('location')->read()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('manage_location');
        $data['get_locationitem'] = $this->loc->get_all_locations();


        $content = $this->parser->parse('location/manage_location', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }
 
    public function locationitem_edit() {
        $this->permission->check_label('location')->update()->redirect();
        $data['title'] = display('location_item');
        $id = $this->input->post('id');
        $data['locationitem_edit'] = $this->loc->locationitem_edit($id);

        $this->load->view('location/locationitem_edit', $data);
    }
    public function see_products(){
        $this->permission->check_label('location')->update()->redirect();
        $data['title'] = display('location_item');
        $id = $this->input->post('id');
        $data['products'] = $this->loc->get_loc_products($id);
        $this->load->view('location/see_products', $data);
    }

    public function locationitem_delete($id) {
        $this->permission->check_label('location')->delete()->redirect();
        $this->db->where('id', $id)->delete('locations_tbl');
        $this->session->set_flashdata('success', '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>Deleted successfully!</div>');
        redirect('Clocation/manage_location/1');
    }

//    ========= its for menusetup_update ==============
    public function location_name_update() {
        $this->permission->check_label('location')->update()->redirect();
        $id = $this->input->post('id');

        $location_name = $this->input->post('location_name');
        $itemData = array(
            'location_name' => $location_name,
        );
        $this->db->where('id', $id)->update('locations_tbl', $itemData);

        $this->session->set_flashdata('success', "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>location Item updated successfully!</div>");
        redirect('Clocation/manage_location/1');
    }

}