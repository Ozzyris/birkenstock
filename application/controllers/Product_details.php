<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->model('homeModel');
		$this->load->model('productdetailModel');
  	}

	public function index( $id ){
		$data = array();
		$data['page_anchor'] = 'products';
		$data['footer_datas'] = $this->homeModel->showFooterData();
		$data['products_datas'] = $this->productdetailModel->showProductsDetails( $id );
		$data['collection_datas'] = $this->productdetailModel->showCollectionDetails( $id );

		$this->load->view('includes/head.php');
		$this->load->view('product_details.php', $data);
	}

}
