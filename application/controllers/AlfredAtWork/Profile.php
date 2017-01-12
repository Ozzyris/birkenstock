<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/Profile_Model');
		$this->load->model('AlfredAtWork/dashboardModel');
  	}

	public function index(){
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'profile';
		$page_anchor['first_name'] = $this->dashboardModel->showNameData()->first_name;
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$data['profile_datas'] = $this->Profile_Model->showData();
		$this->load->view('AlfredAtWork/profile.php', $data);
	}
		
	public function name_content(){
		if($this->Profile_Model->name_content( $_POST['first_name'],  $_POST['last_name'] )){
			$data = array("status" => 'success', 'message' => 'Name Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}
		
	public function email_content(){
		if($this->Profile_Model->email_content( $_POST['email'] )){
			$data = array("status" => 'success', 'message' => 'Email Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}
	
}