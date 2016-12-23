<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/homeModel');
  	}

	public function index(){
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'home';
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$data['home_datas'] = $this->homeModel->showData();
		$this->load->view('AlfredAtWork/home.php', $data);
	}

	public function addhomecontent(){
		$i = 0;
   		$id = $_POST['form_id'];
   		$array_of_success = array();
		while ($i < $_POST['form_length']) {
    		$type = $_POST['type' . $i];
    		$name = $id . '_' . $type;
    		$value = $_POST['value' . $i];
    		if($this->homeModel->insertData($name, $value)){
                $array_of_success[$i] = "success";
            }
    		$i++;
		}

		switch($_POST['form_length']){
			case 1:
				if($array_of_success[0] == "success"){
					echo "success";
				}else{
					echo "error";
				}
				break;
			case 2:
				if($array_of_success[0] == "success" && $array_of_success[1] == "success"){
					echo "success";
				}else{
					echo "error";
				}
				break;
			default:
				break;
		}
  	}
}
