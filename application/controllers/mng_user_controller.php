<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class mng_user_controller extends CI_Controller {

    public $user_model;
    public function __construct() {
        parent::__construct();
    }
        
    function index() {
        $this->load->model('user_model');
        $DataResult = array();
        $DataResult['User'] = $this->user_model->LoadAllUser();
        //var_dump($DataResult['User']);
        $this->load->view('mng_user/index', $DataResult);
    }
    
    
    
    function edit() {
        $id = $_POST['id'];
        $this->load->model('user_model');
        $DataResult['User'] = $this->user_model->getUserByID($id);
        $this->load->view('mng_user/edit', $DataResult);
    }
    
    function saveChangeEdit() {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $this->load->model('user_model');
        $this->user_model->UpdateUserById($id, $name);
        $this->load->view('mng_user/editSuccess');
    }
}
