<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/Product_Model');
		$this->load->model('AlfredAtWork/dashboardModel');
  	}
	public function index( $name ){
		$data['collection_id'] = $this->Product_Model->get_collection_id( $name )->id;
		$data['collection_name'] = $name;
		$data['product_datas'] = $this->Product_Model->showProductData( $data['collection_id'] );
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'product';
		$page_anchor['first_name'] = $this->dashboardModel->showNameData()->first_name;
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/products.php', $data);
	}

	public function insert_element( $collection_id  ){
		if($this->Product_Model->insert_element( $collection_id, $_POST['color'] )){
            $data = array("status" => 'success', 'message' => 'Product Created');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function switch_element( $product_id ){
		if($this->Product_Model->switch_element( $product_id )){
            $data = array("status" => 'success', 'message' => 'Status Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }else{
        	$data = array("status" => 'error', 'message' => 'An error happen with the status Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
    }

	public function delete_element( $product_id ){
		if($this->Product_Model->delete_element( $product_id )){
            $data = array("status" => 'success', 'message' => 'Product Deleted');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}
}