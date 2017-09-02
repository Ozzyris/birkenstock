<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collectiondetails extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/Collection_Model');
		$this->load->model('AlfredAtWork/dashboardModel');
  	}
	public function index( $collection_id ){
		$data['collection_id'] = $collection_id;
		$data['collectiondetails_datas'] = $this->Collection_Model->showCollectionDetailsData( $collection_id );
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'products';
		$page_anchor['first_name'] = $this->dashboardModel->showNameData()->first_name;
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/collectiondetails.php', $data);
	}

	public function name_content( $collection_id ){
        if($this->Collection_Model->name_content( $collection_id, $_POST['name'] )){
            $data = array("status" => 'success', 'message' => 'Name Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
	}

	public function description_content( $collection_id ){
        if($this->Collection_Model->description_content( $collection_id, addslashes($_POST['description'] ))){
            $data = array("status" => 'success', 'message' => 'Description Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
	}

}