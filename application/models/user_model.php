<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function LoadAllUser() {
        $query = "SELECT * FROM user";
        $result = $this->db->query($query);
        return $result->result_array();
    }
    
    function getUserbyID($id) {
        
        $query = "SELECT * FROM user WHERE id=$id";
        $result = $this->db->query($query);
        $abc = $result->result_array();
        
        if($abc != null)
            return $abc[0];
        
        return null;
    }
    
    function UpdateUserById($id, $name){
        $query = "UPDATE user SET name='$name' WHERE id=$id";
        $result = $this->db->query($query);
        return $result;
    }
}