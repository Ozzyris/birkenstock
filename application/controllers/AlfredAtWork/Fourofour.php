<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fourofour extends CI_Controller {

	public function index(){
		$this->load->view('AlfredAtWork/includes/head.php');
		$this->load->view('AlfredAtWork/fourOfour.php');
	}
	
}