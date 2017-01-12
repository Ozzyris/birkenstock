<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productdetails extends CI_Controller {

	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/Product_Model');
        $this->load->model('AlfredAtWork/dashboardModel');
  	}

	public function index( $product_id ){
		$data['product_id'] = $product_id;
		$data['productdetails_datas'] = $this->Product_Model->showProductDetailData( $product_id );
		$all_gender = explode(",", $data['productdetails_datas']->gender);
        	$data['ismenactive'] = false; $data['iswomenactive'] = false; $data['iskidsactive'] = false;
        	foreach($all_gender as $i =>$key) {
        	  $i > 0;
        	  if($key == 'men'){
        	    $data['ismenactive'] = true;
        	  }elseif($key == 'women'){
        	    $data['iswomenactive'] = true;
        	  }elseif($key == 'kids'){
        	    $data['iskidsactive'] = true;
        	  }
        	}
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'products';
        $page_anchor['first_name'] = $this->dashboardModel->showNameData()->first_name;
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/productdetails.php', $data);
	}

    public function category_element( $product_id ){
        if($this->Product_Model->category_element( $product_id, $_POST['category'] )){
            $data = array("status" => 'success', 'message' => 'Category Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
    }

	public function color_element( $product_id ){
		if($this->Product_Model->color_element( $product_id, $_POST['color'] )){
            $data = array("status" => 'success', 'message' => 'Color Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
	}

	public function gender_element( $product_id ){
		if($this->Product_Model->gender_element( $product_id, $_POST['gender'] )){
            $data = array("status" => 'success', 'message' => 'Gender Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
	}

	public function tags_element( $product_id ){
		if($this->Product_Model->tags_element( $product_id, $_POST['tags'] )){
            $data = array("status" => 'success', 'message' => 'Tag Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
	}

	public function size_element( $product_id ){
		if($this->Product_Model->size_element( $product_id, $_POST['size'] )){
            $data = array("status" => 'success', 'message' => 'Sizes Updated');    
            header('Content-Type: application/json');
            echo json_encode( $data );
        }
	}

    public function picture_element( $product_id ){
        if(count($_FILES) > 0 && isset($_FILES)){
            $config['upload_path'] = './assets/uploads/products/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['file_name'] = 'product_picture_' . $product_id;
            $config['overwrite'] = TRUE;
            $config['detect_mime'] = TRUE;
            $config['max_size'] = 1024;
            $config['max_width'] = 800;
            $config['max_height'] = 526;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file')){
                $feedback_data = array('status' => 'error', 'message' => 'File dimentions need to be 800px x 526px');
                header('Content-Type: application/json');
                echo json_encode( $feedback_data );
            }else{
                $data = $this->upload->data();
                $file_id = $this->Product_Model->picture_element($product_id, $data['file_name']);
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

	public function thumb_element( $product_id ){
        if(count($_FILES) > 0 && isset($_FILES)){
            $config_thumb['upload_path'] = './assets/uploads/thumbnails/';
            $config_thumb['allowed_types'] = 'gif|jpg|png';
            $config_thumb['file_name'] = 'thumb_picture_' . $product_id;
            $config_thumb['overwrite'] = TRUE;
            $config_thumb['detect_mime'] = TRUE;
            $config_thumb['max_size'] = 1024;
            $config_thumb['max_width'] = 200;
            $config_thumb['max_height'] = 132;

            $this->load->library('upload', $config_thumb);
            if(!$this->upload->do_upload('file')){
                $feedback_data = array('status' => 'error', 'message' => 'File dimentions need to be 200px x 132px');
                header('Content-Type: application/json');
                echo json_encode( $feedback_data );
            }else{
                $data_thumb = $this->upload->data();
                $file_id_thumb = $this->Product_Model->thumb_element($product_id, $data_thumb['file_name']);
                if($file_id_thumb){
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