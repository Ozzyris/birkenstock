<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsdetails extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/News_Model');
        $this->load->model('AlfredAtWork/dashboardModel');
  	}
	public function index( $news_id ){
		$data['product_id'] = $news_id;
		$data['newsdetails_datas'] = $this->News_Model->showNewsDetailsData( $news_id );
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'news';
        $page_anchor['first_name'] = $this->dashboardModel->showNameData()->first_name;
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/newsdetails.php', $data);
	}

    public function title_content( $news_id ){
        if($this->News_Model->title_content( $news_id, $_POST['title'] )){
            $data = array('status' => 'success', 'message' => 'Title Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }else{ echo 'coucou'; }
    }

    public function time_content( $id ){
        $timestamp = DateTime::createFromFormat('m/d/Y', $_POST['time'])->getTimestamp();
        if($this->News_Model->time_content( $id, $timestamp )){
            $data = array('status' => 'success', 'message' => 'Time Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
    }

    public function description_content( $news_id ){
        if($this->News_Model->description_content( $news_id, addslashes($_POST['description']) )){
            $data = array('status' => 'success', 'message' => 'Description Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
    }

    public function link_content( $news_id ){
        if($this->News_Model->link_content( $news_id, $_POST['link'] )){
            $feedback_data = array('status' => 'success', 'message' => 'Link Updated');    
            header('Content-Type: application/json');
            echo json_encode( $feedback_data );
        }
    }

	public function image_content( $news_id ){
        if(count($_FILES) > 0 && isset($_FILES)) {
            $config['upload_path'] = './assets/uploads/news/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = 'news_picture_' . $news_id;
            $config['overwrite'] = TRUE;
            $config['detect_mime'] = TRUE;
            $config['max_size'] = 1024;
            $config['max_width'] = 600;
            $config['max_height'] = 400;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file')){
                $feedback_data = array('status' => 'error', 'message' => 'File dimentions need to be 600px x 400px');    
                header('Content-Type: application/json');
                echo json_encode( $feedback_data );
            }else{
                $data = $this->upload->data();
                $file_id = $this->News_Model->image_content($news_id, $data['file_name']);
                if($file_id){
                    $feedback_data = array('status' => 'success', 'message' => 'File Uploaded');
                    header('Content-Type: application/json');
                    echo json_encode( $feedback_data );
                }else{
                    unlink($data['full_path']);
                    $feedback_data = array('status' => 'error', 'message' => 'Something went wrong when saving the file, please try again.');
                    header('Content-Type: application/json');
                    echo json_encode( $feedback_data );
                }
            }
        }
    }
}