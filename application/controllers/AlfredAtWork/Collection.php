<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/collectionModel');
  	}
	public function index(){
		$data['collection_datas'] = $this->collectionModel->showData();
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'product';
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/collection.php', $data);
	}

	public function insertData(){
		if($this->collectionModel->insertData( $_POST['title'] )){
            echo "success";
        }
	}

	public function switchActive( $id ){
		if($this->collectionModel->switchActive( $id )){
            echo "success";
        }

        //CANNOT ACTIVATE IF 0 PRODUTS
	}

	public function addDeleteDate( $id ){
		if($this->collectionModel->addDeleteDate( $id )){
            echo "success";
        }
	}

	public function undoArchiveData( $id ){
		if($this->collectionModel->undoArchiveData( $id )){
            echo "success";
        }
	}
}