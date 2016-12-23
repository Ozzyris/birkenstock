<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productsModel extends CI_Model{
	
	public function showActiveProducts(){
		$sql = $this->db->query("SELECT * FROM products WHERE active = '1'");
		return $sql->result();
	}

}