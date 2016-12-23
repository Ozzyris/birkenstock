<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeModel extends CI_Model{
	public function showFooterData(){
		$sql = $this->db->query("SELECT * FROM footer WHERE id = '1' LIMIT 1");
		return $sql->result()[0];
	}
	public function showNewsData(){
		$sql = $this->db->query("SELECT * FROM news WHERE active = '1' ORDER BY 'time' DESC LIMIT 5");
		return $sql->result();
	}	

}