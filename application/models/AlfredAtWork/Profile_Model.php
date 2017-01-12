<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_Model extends CI_Model{

	public function showData(){
		$user_id =  $this->session->userdata('user_id');
		$sql = $this->db->query("SELECT email, first_name, last_name FROM users WHERE id = '$user_id'");		
		return $sql->result()[0];
	}

	public function name_content( $first_name, $last_name ){
		$user_id =  $this->session->userdata('user_id');
        $sql = $this->db->query("UPDATE users SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$user_id'");
		return $sql == true;
	}

	public function email_content( $email ){
		$user_id =  $this->session->userdata('user_id');
        $sql = $this->db->query("UPDATE users SET email = '$email' WHERE id = '$user_id'");
		return $sql == true;
	}
	
}