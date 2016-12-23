<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createpassword extends CI_Controller {

	public function index(){
		$this->load->view('AlfredAtWork/includes/head.php');
		$this->load->view('AlfredAtWork/createpassword.php');
	}
	
}