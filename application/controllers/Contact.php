<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct(){
    	parent::__construct();
		$this->load->model('homeModel');
  	}

	public function index(){
		$data = array();
		$data['page_anchor'] = 'contactus';
		$data['footer_datas'] = $this->homeModel->showFooterData();
		$this->load->view('includes/head.php');
		$this->load->view('contact.php', $data);
	}

	function submit(){
        // $Contact_ReceiverEmail = "birkenstockbondi@gmail.com"; 
        $Contact_ReceiverEmail = "nemokervi@yahoo.fr"; 
        $Contact_SenderEmail = "no-reply@birkenstockbondibeach.com.au"; 
        $Contact_Name = $this->input->post('contact_name');
        $Contact_Message = $this->input->post('contact_message');
   		$Contact_Message .= "\n Contact details: ".$this->input->post('contact_name');
   		$Contact_Message .= "\n Contact Phone: ".$this->input->post('contact_phone');
        $Contact_Message .= "\n Contact email: ".$this->input->post('Contact_Email');

         //Load email library 
         $this->email->from($Contact_SenderEmail, $Contact_Name); 
         $this->email->to($Contact_ReceiverEmail);
         $this->email->subject('Message from Birkenstockbondibeach.com.au'); 
         $this->email->message($Contact_Message); 
   
         //Send mail 
         if($this->email->send()){ 
         	$this->session->set_flashdata("email_sent","Thank you for sending us your enquiry, a RentersCard representative will respond to it shortly");  
         }else{ 
         	$this->session->set_flashdata("email_sent","Error in sending Email."); 
         }
         redirect('contact');
	}
}
