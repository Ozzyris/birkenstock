<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/Home_Model');
		$this->load->model('AlfredAtWork/dashboardModel');
  	}

	public function index(){
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'home';
		$page_anchor['first_name'] = $this->dashboardModel->showNameData()->first_name;
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$data['home_datas'] = $this->Home_Model->showData();
		$this->load->view('AlfredAtWork/home.php', $data);
	}

	public function newsletter_content(){
		if($this->Home_Model->newsletter_content( $_POST['newsletter_text'] )){
			$data = array("status" => 'success', 'message' => 'Newsletter Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function facebook_content(){
		if($this->Home_Model->facebook_content( $_POST['facebook_text'], $_POST['facebook_link'] )){
			$data = array("status" => 'success', 'message' => 'Facebook Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function instagram_content(){
		if($this->Home_Model->instagram_content( $_POST['instagram_text'], $_POST['instagram_link'] )){
			$data = array("status" => 'success', 'message' => 'Instagram Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function address_content(){
		if($this->Home_Model->address_content( $_POST['address_text'], $_POST['address_link'] )){
			$data = array("status" => 'success', 'message' => 'Address Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function email_content(){
		if($this->Home_Model->email_content( $_POST['email_text'], $_POST['email_link'] )){
			$data = array("status" => 'success', 'message' => 'Email Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function phone_content(){
		if($this->Home_Model->phone_content( $_POST['phone_text'], $_POST['phone_link'] )){
			$data = array("status" => 'success', 'message' => 'Phone Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	
}
