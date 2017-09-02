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
        if( $this->input->post('contact_email') != null && $this->input->post('contact_email') != '' && $this->input->post('contact_phone') != null && $this->input->post('contact_phone') != '' && $this->input->post('contact_name') != null && $this->input->post('contact_name') != '' && $this->input->post('contact_message') != null && $this->input->post('contact_message') != '' && $this->input->post('input_url') == null && $this->input->post('input_url') == ''){

            $Contact_ReceiverEmail = "birkenstockbondi@gmail.com"; 
            // $Contact_ReceiverEmail = "nemokervi@yahoo.fr"; 
            $Contact_SenderEmail = "no-reply@birkenstockbondibeach.com.au"; 
            $Contact_Name = $this->input->post('contact_name');
            $Contact_Message = $this->input->post('contact_message');
            $Contact_Message .= "\n \n Contact details: ".$this->input->post('contact_name');
            $Contact_Message .= "\n Contact Phone: ".$this->input->post('contact_phone');
            $Contact_Message .= "\n Contact email: ".$this->input->post('contact_email');

            //Load email library 
            $this->email->from($Contact_SenderEmail, $Contact_Name); 
            $this->email->to($Contact_ReceiverEmail);
            $this->email->subject('Message from Birkenstockbondibeach.com.au'); 
            $this->email->message($Contact_Message); 
   
            //Send mail 
            if($this->email->send()){ 
                $this->session->set_flashdata("email_sent","Thank you for sending us your enquiry, a Birkenstock representative will respond to it shortly");  
            }else{ 
                $this->session->set_flashdata("email_sent","Error in sending Email."); 
            }
        }else{ 
            $this->session->set_flashdata("email_sent","Something happen with your email please try again."); 
        }

         redirect('contact');
	}


    public function newsletter(){
        $result = $this->mailchimp->post("lists/3eb48a33e0/members", [ 'email_address' => $_POST['email'], 'status' => 'subscribed', ]);
        if ( $this->mailchimp ) {
            $data = array("status" => 'success', 'message' => 'Your email has been added to our newsletter');
            header('Content-Type: application/json');
            echo json_encode( $data );
        } else {
            $data = array("status" => 'error', 'message' => $MailChimp->getLastError());
            header('Content-Type: application/json');
            echo json_encode( $data );
        } 
    }
}
