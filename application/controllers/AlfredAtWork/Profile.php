<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/profileModel');
  	}

	public function index(){
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'profile';
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$data['profile_datas'] = $this->profileModel->showData();
		$this->load->view('AlfredAtWork/profile.php', $data);
	}

	public function addprofilecontent( $type ){
		echo $type;
		switch($type){
			case 'name':
				if($this->profileModel->insert_name($_POST['first_name'],  $_POST['last_name'])){
                	echo "success";
            	}
				break;
			case 'email':
				if($this->profileModel->insert_email($_POST['email'])){
                	echo "success";
            	}
				break;
			case 'password':
				if($_POST['new_password_1'] == $_POST['new_password_2']){
					if($this->profileModel->insert_password($_POST['old_password'], $_POST['new_password_1'])){
                		echo "success";
            		}else{
            			echo "The old password is incorrect";
            		}
            	}else{
            		echo "The passwords do not match";
				}
				break;
			default:
				break;
		}
   	}
}