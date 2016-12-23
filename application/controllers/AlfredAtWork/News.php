<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/newsModel');
  	}
	public function index(){
		$data['news_datas'] = $this->newsModel->showData();
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'news';
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/news.php', $data);
	}

	public function insertData(){
		if($this->newsModel->insertData( $_POST['title'] )){
            echo "success";
        }
	}

	public function switchActive( $id ){
		if($this->newsModel->switchActive( $id )){
            echo "success";
        }
	}

	public function addDeleteDate( $id ){
		if($this->newsModel->addDeleteDate( $id )){
            echo "success";
        }
	}

	public function undoArchiveData( $id ){
		if($this->newsModel->undoArchiveData( $id )){
            echo "success";
        }
	}

	public function updateData( $id ){}
}