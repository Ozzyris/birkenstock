<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardModel extends CI_Model{

	public function showNameData(){
		$id = $this->session->userdata('user_id');
		$sql = $this->db->query("SELECT first_name FROM users WHERE id = '$id' LIMIT 1");
		return $sql->result()[0];
	}

	public function showData(){
		$sql = $this->db->query("SELECT * FROM system_news ORDER BY timestamp DESC LIMIT 10");
		return $sql->result();
	}

	public function archiveData( $id ){
		$sql = $this->db->query("UPDATE system_news SET status='0' WHERE id = $id LIMIT 1");
		return $sql == true;
	}


}