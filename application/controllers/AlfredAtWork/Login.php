<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
    $this->load->view('AlfredAtWork/includes/head.php');
		$this->load->view('AlfredAtWork/login.php');
	}

	public function auth(){
      if(isset( $_POST['email'], $_POST['password']) ){
          if (!$this->ion_auth->is_max_login_attempts_exceeded($_POST['email'])){
              if($this->ion_auth->login($_POST['email'], $_POST['password'])){
                $this->ion_auth->clear_login_attempts($_POST['email']);
                $userId = $this->ion_auth->get_user_id();
                $session_data = array( 'user_id'  => $userId );
                $this->session->set_userdata($session_data);
                redirect('alfredatwork/dashboard');
              }else{
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('alfredatwork/login');
              }
          }else{
            $this->session->set_flashdata('message', 'You have too many login attempts');
            redirect('alfredatwork/login');
          }
      }else{
        die('Not found');
      }
  }

}