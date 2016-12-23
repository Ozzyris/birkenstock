<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collectiondetails extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/collectiondetailsModel');
  	}
	public function index( $id ){
		$data['collection_id'] = $id;
		$data['collectiondetails_datas'] = $this->collectiondetailsModel->showData( $id );
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'products';
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/collectiondetails.php', $data);
	}

	public function updateData( $type ){
		switch ( $type ) {
			case 'name':
				if($this->collectiondetailsModel->update_name( $_POST['collection_id'], $_POST['name'] )){
                	echo "Saved";
            	}
				break;
			case 'description':
				if($this->collectiondetailsModel->update_description( $_POST['collection_id'], $_POST['description'] )){
                	echo "Saved";
            	}
            	break;
			default:
				break;
		}
	}

}