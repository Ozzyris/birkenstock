<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('homeModel');
  	}

	public function index(){
		$data = array();
		$data['page_anchor'] = 'aboutus';
		$data['footer_datas'] = $this->homeModel->showFooterData();
		$this->load->view('includes/head.php');
		$this->load->view('about.php', $data);
	}
}
