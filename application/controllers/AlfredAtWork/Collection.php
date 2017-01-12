<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/Collection_Model');
		$this->load->model('AlfredAtWork/dashboardModel');
  	}
	public function index(){
		$data['collection_datas'] = $this->Collection_Model->showCollectionData();
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'product';
		$page_anchor['first_name'] = $this->dashboardModel->showNameData()->first_name;
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/collection.php', $data);
	}

	public function insert_element(){
		if($this->Collection_Model->insert_element( $_POST['title'] )){
			$data = array('status' => 'success', 'message' => 'Collection Created');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function switch_element( $collection_id ){
		echo $this->Collection_Model->switch_element( $collection_id );
	}

	public function delete_element( $collection_id ){
		if($this->Collection_Model->delete_element( $collection_id )){
			$data = array('status' => 'success', 'message' => 'Collection Deleted');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}
}