<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeModel extends CI_Model{
	public function showData(){
		$sql = $this->db->query("SELECT * FROM footer WHERE id = '1' LIMIT 1");
		return $sql->result()[0];
	}	
	public function insertData($name, $value){	
        $sql = $this->db->query("UPDATE footer SET $name = '$value' WHERE id = '1'");
		return $sql == true;
	}
}