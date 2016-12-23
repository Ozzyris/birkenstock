<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsdetails extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/newsdetailsModel');
  	}
	public function index( $id ){
		$data['product_id'] = $id;
		$data['newsdetails_datas'] = $this->newsdetailsModel->showData( $id );
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'news';
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/newsdetails.php', $data);
	}

	public function updateData( $type ){
		switch ( $type ) {
			case 'title':
				if($this->newsdetailsModel->update_title( $_POST['product_id'], $_POST['title'] )){
                	echo "Saved";
            	}
				break;
			case 'description':
				if($this->newsdetailsModel->update_description( $_POST['product_id'], $_POST['description'] )){
                	echo "Saved";
            	}
            	break;
			case 'link':
				if($this->newsdetailsModel->update_link( $_POST['product_id'], $_POST['link'] )){
                	echo "Saved";
            	}
				break;
			default:
				break;
		}
	}

}