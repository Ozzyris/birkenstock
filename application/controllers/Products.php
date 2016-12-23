<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('homeModel');
		$this->load->model('productsModel');
  	}

	public function index(){
		$data = array();
		$data['page_anchor'] = 'products';
		$data['footer_datas'] = $this->homeModel->showFooterData();
		$data['products_datas'] = $this->productsModel->showActiveProducts();
		$this->load->view('includes/head.php');
		$this->load->view('products.php', $data);
	}
}