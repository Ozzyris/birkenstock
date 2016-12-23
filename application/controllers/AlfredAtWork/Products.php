<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/productModel');
  	}
	public function index( $name ){
		$data['collection_id'] = $this->productModel->get_collection_id( $name )->id;
		$data['collection_name'] = $name;
		$data['product_datas'] = $this->productModel->showData( $data['collection_id'] );
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'product';
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/products.php', $data);
	}

	public function insertData(){
		if($this->productModel->insertData( $_POST['color'], $_POST['collection_id'] )){
            echo "success";
        }
	}

	public function switchActive( $id ){
		if($this->productModel->switchActive( $id )){
            echo "success";
        }
    }

	public function addDeleteDate( $id ){
		if($this->productModel->addDeleteDate( $id )){
            echo "success";
        }
	}

	public function undoArchiveData( $id ){
		if($this->productModel->undoArchiveData( $id )){
            echo "success";
        }
	}
}