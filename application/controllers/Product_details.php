<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->model('homeModel');
		$this->load->model('productdetailModel');
  	}

	public function index( $collection, $category, $product_id ){
		$data = array();
		$data['page_anchor'] = 'products';
		$data['footer_datas'] = $this->homeModel->showFooterData();
		$data['collection_datas'] = $this->productdetailModel->showCollectionDetails( $collection );
		$collection_id = $data['collection_datas']->id;
		$data['products_datas'] = $this->productdetailModel->showProductsDetails( $collection_id, $category );
		$data['products_id'] = $product_id;
		$this->load->view('includes/head.php');
		$this->load->view('product_details.php', $data);
	}

}
