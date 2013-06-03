<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SampleUserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function InsertUsername($Username) {
        $data = array('name' => $Username);
        $this->db->insert('user', $data);
    }

    function CheckUsername($Username) {
        $query = "SELECT * FROM user WHERE name = '$Username'";
        $result = $this->db->query($query);
        $abc = $result->result_array();
        
        if($abc == null){
            return false;
        }
        return true;
    }

}