<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
    	parent::__construct();
   		if (!$this->ion_auth->logged_in()){
			  redirect('AlfredAtWork/login');
		}
		$this->load->library('MailChimp'); 
		$this->load->model('AlfredAtWork/dashboardModel');
  	}

	public function index(){
		$list_id = '3eb48a33e0'; 
		$result = $this->mailchimp->get('lists/' . $list_id . '/members');
		$data['mailchimp_data'] = $result['members'];
		$this->load->view('AlfredAtWork/includes/head.php');
		$page_anchor = array();
		$page_anchor['active'] = 'dashboard';
		$this->load->view('AlfredAtWork/includes/nav.php', $page_anchor);
		$data['dashboard_datas'] = $this->dashboardModel->showData();
		$this->load->view('AlfredAtWork/dashboard.php', $data);
	}

	public function archiveData( $id ){
		if($this->dashboardModel->archiveData( $id )){
            echo "News Archive";
        }
	}

	public function archiveMailchimp(){
		$list_id = '3eb48a33e0';
		$subscriber_hash = $this->mailchimp->subscriberHash( $_POST['email'] );
		$this->mailchimp->delete("lists/$list_id/members/$subscriber_hash");
		echo "Email Deleted";
	}


}