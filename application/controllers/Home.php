<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('homeModel');
  	}

	public function index(){
		$data = array();
		$data['page_anchor'] = 'home';
		$data['footer_datas'] = $this->homeModel->showFooterData();
		$data['news_datas'] = $this->homeModel->showNewsData();
		$this->load->view('includes/head.php');
		$this->load->view('home.php', $data);
	}
}
