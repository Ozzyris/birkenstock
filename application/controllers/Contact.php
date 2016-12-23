<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('homeModel');
  	}

	public function index(){
		$data = array();
		$data['page_anchor'] = 'contactus';
		$data['footer_datas'] = $this->homeModel->showFooterData();
		$this->load->view('includes/head.php');
		$this->load->view('contact.php', $data);
	}
}
