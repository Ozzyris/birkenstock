<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createpassword extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('AlfredAtWork/ForgotpasswordModel');
  	}

	public function index( $token ){
		$this->load->view('AlfredAtWork/includes/head.php');
		$datas = array();
		$datas['token'] = $token;
		$this->load->view('AlfredAtWork/createpassword.php', $datas);
	}

	 public function Set_password(){
	 		$token = $_POST['token'];
	 		$password = $_POST['password_recovery'];
	 		$password_bis = $_POST['password_recovery_bis'];

	 		if($password == $password_bis){
	 			$id = $this->ForgotpasswordModel->get_user_id( $token );
				$reset = $this->ion_auth->forgotten_password_complete($token);
	
				if ($reset){
	 				if( $id != false ){
	 					$id = $id->id;
	 					$data = array(
							'password' => $password,
					 	);
						
						if( $this->ion_auth->update($id, $data) ){
							$data = array("status" => 'success', 'message' => 'Password Reset'); 
							header('Content-Type: application/json');
    						echo json_encode( $data );
						}

	 				}else{
	 					$data = array("status" => 'error', 'message' => 'Reset password Token expire, Please tri again.');   
						header('Content-Type: application/json');
    					echo json_encode( $data );
	 				}

				}else{
	 				$data = array("status" => 'error', 'message' => 'Reset password Token expire, Please try again.');   
					header('Content-Type: application/json');
    				echo json_encode( $data );
				}
	 		}else{
	 			$data = array("status" => 'error', 'message' => 'Password do not match');    
				header('Content-Type: application/json');
    			echo json_encode( $data );
	 		}


		}
	
}