<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productdetails extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->model('AlfredAtWork/productdetailsModel');

  	}
	public function index( $product_id ){
		$data['product_id'] = $product_id;
		$data['productdetails_datas'] = $this->productdetailsModel->showData( $product_id );
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
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$this->load->view('AlfredAtWork/productdetails.php', $data);
	}

	public function updateColor(){
		if($this->productdetailsModel->update_color( $_POST['id'], $_POST['color'] )){
            echo "Color updated";
        }
	}

	public function updateGender(){
		if($this->productdetailsModel->update_gender( $_POST['id'], $_POST['gender'] )){
            echo "Gender updated";
        }
	}

	public function updateTags(){
		if($this->productdetailsModel->update_tags( $_POST['id'], $_POST['tags'] )){
            echo "Tags updated";
        }
	}

	public function updateSize(){
		if($this->productdetailsModel->update_size( $_POST['id'], $_POST['size'] )){
            echo "Sizes updated";
        }
	}

	public function updatePicture( $product_id ){

        if(count($_FILES) > 0 && isset($_FILES)) {
            // print_r($_FILES['file']);
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('file')){
                echo $this->upload->display_errors('', '');
            }else{ echo 'success'; }
        }

	// $config['upload_path'] = './assets/uploads/';
 //    $config['allowed_types'] = 'gif|jpg|png';
 //    $config['max_size'] = 1024 * 2;
 //    $config['encrypt_name'] = TRUE;
 //    $this->load->library('upload', $config);
 //        try {
 //            if (!$this->upload->do_upload($_FILES['file'])){
 //                echo $this->upload->display_errors('', '');
 //            }else{
 //                $data = $this->upload->data();
 //                $file_id = $this->files_model->insert_file($product_id, $data['file_name']);
 //                if($file_id){
 //                    echo "File successfully uploaded";
 //                }else{
 //                    unlink($data['full_path']);
 //                    echo "Something went wrong when saving the file, please try again.";
 //                }
 //            }
 //        } catch (Exception $e) {
 //            echo $e;
 //        }
        
	}

	public function updateThumb(){}


}