<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CWarehouse extends CI_Controller {

    public $warehouse_id;

    function __construct() {
        parent::__construct();
        $this->load->model('Warehouse');
        $this->template->current_menu = 'warehouse';
    }

    //Index page load
    public function index($carry = null) {
        $this->permission->check_label('warehouse')->create()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('warehouse');
        

        $content = $this->parser->parse('warehouse/add_warehouse_form', $data, true);
        
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            
            $this->template->partial_admin_html_view($content);
        }
    }


    public function warehouse_save() {

        $this->permission->check_label('warehouse')->create()->redirect();
        $warehouse = $this->input->post('warehouse');
        
        $warehouseData = array(
        'warehouse_id' => time(),
        'warehouse_name' => $warehouse,
        'created_by' => $this->session->user_id,
        'status' => 1,
        );

        $flash_message = $this->Warehouse->save_warehouse($warehouseData) ? 
        
        ['class'=>'success','message'=>'Warehouse saved successfully.'] :
        ['class'=>'danger','message'=>'Error saving warehouse.'];
        $this->session->set_flashdata('flash_message',$flash_message);
        // echo "<pre>";
        // print_r($flash_message);
        // echo "</pre>";
        // exit;
        redirect('CWarehouse/index/1');
    }
    public function warehouselist_custom(){
        $this->permission->check_label('warehouse')->read()->redirect();

        $list = $this->Warehouse->get_all_warehouses();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $rowdata) {
            $no++;
    //            $status = array('1' => 'Yes', '0' => 'No');
            $row = array();
            $update = '';
            $delete = '';
            if ($this->permission->check_label('warehouse')->update()->access()) {
                $update = '<input name="url" type="hidden" id="url_' . $rowdata->id . '" value="" /><a onclick="warehouseitem_edit(' . $rowdata->id . ')" style="cursor:pointer;color:#fff;" class="btn btn-success btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Update"><i class="ti-pencil"></i></a> ';
            }
            if ($this->permission->check_label('warehouse')->delete()->access()) {
                $delete = '<a href="' . base_url() . 'CWarehouse/warehouseitem_delete/' . $rowdata->id . '" onclick="return confirm(\'' . display('are_you_sure') . '\') " class="btn btn-danger btn-sm mr-1"><i class="ti-trash"></i></a>';
            }
            $addProductDetails='&nbsp;<input name="url" type="hidden" id="url_' . $rowdata->id . '" value="" /><a onclick="warehouse_product(' . $rowdata->warehouse_id . ')" style="cursor:pointer;color:#fff;" class="btn btn-warning btn-sm mr-1" data-toggle="tooltip" data-placement="left" title="Add Product Location"><i class="ti-eye"></i></a> ';
            $row[] = $no;
            $row[] = $rowdata->warehouse_name;
    //            $row[] = $rowdata->groupprice;
    //            $row[] = $status[$rowdata->isactive]; $delete
            $row[] = $update  . $addProductDetails;
            $row[] = $rowdata->created_date;
            $data[] = $row;
        }
        //print_r($data);
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Warehouse->count_allmservice(),
            "recordsFiltered" => $this->Warehouse->count_filtermservice(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function manage_warehouse($carry = null) {
        $this->permission->check_label('warehouse')->read()->redirect();
        $CI = & get_instance();
        $CI->auth->check_admin_auth();
//        $CI->load->library('ladvertisement');
        $data['title'] = display('manage_warehouse');
        $data['get_warehouseitem'] = $this->Warehouse->get_all_warehouses();


        $content = $this->parser->parse('warehouse/manage_warehouse', $data, true);
        if ($carry == 1) {
            $this->template->full_admin_html_view($content);
        } else {
            $this->template->partial_admin_html_view($content);
        }
    }
 
    public function warehouseitem_edit() {
        $this->permission->check_label('warehouse')->update()->redirect();
        $data['title'] = display('warehouse_item');
        $id = $this->input->post('id');
        $data['warehouseitem_edit'] = $this->Warehouse->warehouseitem_edit($id);

        $this->load->view('warehouse/warehouseitem_edit', $data);
    }

    public function warehouse_product() {
        $this->permission->check_label('warehouse')->update()->redirect();
        $data['title'] = display('warehouse_item');
        $id = $this->input->post('id');
        $data['warehouseid'] = $id;
        $data['location_list']=$this->Warehouse->locationList();
        $data['product_list']=$this->Warehouse->productList();

        $this->load->view('warehouse/warehouse_product', $data);
    }

    public function warehouseitem_delete($id) {
        $this->permission->check_label('warehouse')->delete()->redirect();
        $this->db->where('id', $id)->delete('warehouse_tbl');
        $this->session->set_flashdata('success',"Warehouse item deleted succefully.");
        redirect('CWarehouse/manage_warehouse/1');
    }

//    ========= its for menusetup_update ==============
    public function warehouse_name_update() {
        $this->permission->check_label('warehouse')->update()->redirect();
        $id = $this->input->post('id');

        $warehouse_name = $this->input->post('warehouse_name');
        $itemData = array(
            'warehouse_name' => $warehouse_name,
        );
        $this->db->where('id', $id)->update('warehouse_tbl', $itemData);

        $this->session->set_flashdata('success',"Warehouse item updated succefully.");
        redirect('CWarehouse/manage_warehouse/1');
    }

    public function warehouse_product_update() {

        $this->permission->check_label('warehouse')->create()->redirect();
        $product_id = $this->input->post('product_id');
        $location_id = $this->input->post('location_id');
        $price_one = $this->input->post('price_one');
        $price_two = $this->input->post('price_two');
        $warehouseid = $this->input->post('warehouseid');
        
        $productLocationData = array(
        'warehouseid' => $warehouseid,    
        'product_id' => $product_id,
        'location_id' => $location_id,
        'price_one' => $price_one,
        'price_two' => $price_two,
        'created_by' => $this->session->user_id,
        'status' => 1,
        );

        if($price_two < $price_one){
            $this->session->set_flashdata('error_message',"Sale price must be greater than purchase price.");
        }else{

            $this->Warehouse->save_product_location($productLocationData);
            $this->session->set_flashdata('success',"Product Location Added succefully.");
        }
        redirect('CWarehouse/manage_warehouse/1');
    }


} 