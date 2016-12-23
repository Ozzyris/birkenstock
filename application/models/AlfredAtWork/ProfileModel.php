<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profileModel extends CI_Model{

	public function showData(){
		$user_id =  $this->session->userdata('user_id');
		$sql = $this->db->query("SELECT email, first_name, last_name FROM users WHERE id = '1'");		
		return $sql->result()[0];
	}

	public function insert_name( $first_name, $last_name ){
		$user_id =  $this->session->userdata('user_id');
        $sql = $this->db->query("UPDATE users SET first_name = '$first_name', last_name = '$last_name' WHERE id = '$user_id'");
		return $sql == true;
	}

	public function insert_email( $email ){
		$user_id =  $this->session->userdata('user_id');
        $sql = $this->db->query("UPDATE users SET email = '$email' WHERE id = '$user_id'");
		return $sql == true;
	}

	public function insert_password( $old_password, $new_password ){
		$user_id =  $this->session->userdata('user_id');
		// CRYPTE THE PASSWORD
      	// CHECH THE OLD PASSWORD 
        //$sql = $this->db->query("UPDATE users SET $name = '$value' WHERE id = '$user_id'");
		//return $sql == true;
	}
}