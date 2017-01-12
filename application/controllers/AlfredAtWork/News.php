<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/News_Model');
		$this->load->model('AlfredAtWork/dashboardModel');
  	}
	public function index(){
		$data['news_datas'] = $this->News_Model->showNewsData();
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'news';
		$page_anchor['first_name'] = $this->dashboardModel->showNameData()->first_name;
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/news.php', $data);
	}

	public function insertData(){
		if($this->News_Model->insertData( $_POST['title'] )){
            $data = array("status" => 'success', 'message' => 'News Created');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function switchActive( $news_id ){
		if($this->News_Model->switchActive( $news_id )){
            $data = array("status" => 'success', 'message' => 'Status Updated');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}

	public function delete_element( $news_id ){
		if($this->News_Model->delete_element( $news_id )){
            $data = array("status" => 'success', 'message' => 'News Deleted');    
			header('Content-Type: application/json');
    		echo json_encode( $data );
        }
	}
	
}