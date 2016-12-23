<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('AlfredAtWork/ForgotpasswordModel');
  	}

	public function index(){
		$this->load->view('AlfredAtWork/includes/head.php');
		$this->load->view('AlfredAtWork/forgotpassword.php');
	}

	public function recovery_email(){
		$email = $_POST['email'];
		$saved_email = $this->ForgotpasswordModel->email_check( $email );

		if( $saved_email == 'true' ){
			$forgotten = $this->ion_auth->forgotten_password( $email );
    		if( $forgotten ) {
    			echo 'A recovery email as been sent.';
    		}else{
    			echo $this->ion_auth->errors();
    		}
		}
  	}
	
}