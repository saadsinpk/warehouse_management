<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Llocation {

    public function location_add_form() {
        $CI = & get_instance();
        $productForm = $CI->parser->parse('location/add_location_form', $data, true);
        return $productForm;
    }
}

?>