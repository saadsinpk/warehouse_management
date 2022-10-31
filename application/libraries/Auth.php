<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth {

    //Login....
    public function login($username, $password) {
        $CI = & get_instance();
        $CI->load->model('Users');
        $result = $CI->Users->check_valid_user($username, $password);
        
        $websettings_data = $CI->Web_settings->retrieve_setting_editdata();
//dd($result);
        $checkPermission = $CI->Users->userPermission2($result[0]['user_id']);

//            dd($checkPermission);
        if ($checkPermission != NULL) {
            $permission = array();
            $permission1 = array();
            if (!empty($checkPermission)) {
                foreach ($checkPermission as $value) {
                    $permission[$value->module] = array(
                        'create' => $value->create,
                        'read' => $value->read,
                        'update' => $value->update,
                        'delete' => $value->delete
                    );

                    $permission1[$value->menu_title] = array(
                        'create' => $value->create,
                        'read' => $value->read,
                        'update' => $value->update,
                        'delete' => $value->delete
                    );
                }
            }
        }

        if ($result) {
            $key = md5(time());
            $key = str_replace("1", "z", $key);
            $key = str_replace("2", "J", $key);
            $key = str_replace("3", "y", $key);
            $key = str_replace("4", "R", $key);
            $key = str_replace("5", "Kd", $key);
            $key = str_replace("6", "jX", $key);
            $key = str_replace("7", "dH", $key);
            $key = str_replace("8", "p", $key);
            $key = str_replace("9", "Uf", $key);
            $key = str_replace("0", "eXnyiKFj", $key);
            $sid_web = substr($key, rand(0, 3), rand(28, 32));

            // codeigniter session stored data			
            $user_data = array(
                'isLogIn' => true,
                'isAdmin' => (($result[0]['user_type'] == 1) ? true : false),
                'sid_web' => $sid_web,
                'user_id' => $result[0]['user_id'],
                'user_type' => $result[0]['user_type'],
                'user_name' => $result[0]['first_name'] . " " . $result[0]['last_name'],
                'user_email' => $result[0]['username'],
                'user_role' => $result[0]['role_id'],
                'store_id' => (($result[0]['user_type'] == 1) ? 0 : $result[0]['store_id']),
                'date_format' =>  $websettings_data[0]['date_format'],
                'permission' => json_encode(@$permission),
                'label_permission' => json_encode(@$permission1),
                'logged_in' => TRUE,
                'session_id' => session_id(),
            );
//            dd($user_data);
            $CI->session->set_userdata($user_data);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    //Check if is logged....
    public function is_logged() {
        $CI = & get_instance();
        if ($CI->session->userdata('sid_web')) {
            return true;
        }
        return false;
    }

    //Logout....
    public function logout() {
        $CI = & get_instance();
        $user_data = array(
            'sid_web' => '',
            'user_id' => '',
            'user_type' => '',
            'user_name' => ''
        );
        $CI->session->sess_destroy($user_data);
        return true;
    }

    //Check for logged in user is Admin or not.

    public function is_admin() {
        $CI = & get_instance();
        if ($CI->session->userdata('user_type') == 1 || $CI->session->userdata('user_type') == 2) {
            return true;
        }
        return false;
    }

    function check_admin_auth($url = '') {
        if ($url == '') {
            $url = base_url() . 'Admin_dashboard/login';
        }
        $CI = & get_instance();
        if ((!$this->is_logged()) || (!$this->is_admin())) {
            $this->logout();
            $error = "You are not authorized for this part";
            $CI->session->set_userdata(array('error_message' => $error));
            redirect($url, 'refresh');
            exit;
        }
    }

    //This function is used to Generate Key
    public function generator($lenth) {
        $number = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "N", "M", "O", "P", "Q", "R", "S", "U", "V", "T", "W", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

        for ($i = 0; $i < $lenth; $i++) {
            $rand_value = rand(0, 34);
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

?>