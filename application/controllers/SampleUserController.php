<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SampleUserController extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    function index() {
        $this->load->view('SampleUser/SignUp');
    }
    function CheckSignUp() {
        $DataResult = array();
        $DataResult['Username'] = $_POST['Username'];
        $this->load->model('SampleUserModel');
        $this->SampleUserModel->InsertUsername($DataResult['Username']);
        $this->load->view('SampleUser/SignUpSuccess', $DataResult);
    }
    
    function logon() {
        $this->load->view('SampleUser/Logon');
    }
    
    function CheckLogon() {
        $DataResult = array();
        $DataResult['Username'] = $_POST['Username'];
        $this->load->model('SampleUserModel');
        $result = $this->SampleUserModel->CheckUsername($DataResult['Username']);
       
        if ($result === true)
            $this->load->view('SampleUser/LogonSuccess', $DataResult);
        else
            $this->load->view('SampleUser/LogonUnSuccess', $DataResult);
    }
}
