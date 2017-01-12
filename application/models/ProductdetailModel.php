<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productdetailModel extends CI_Model{
	
	public function showProductsDetails( $collection_id, $category ){
		$sql = $this->db->query("SELECT * FROM products WHERE collection_id = '$collection_id' AND category = '$category' AND active = '1'");
		return $sql->result();
	}

	public function showCollectionDetails( $collection ){
		$sql = $this->db->query("SELECT * FROM collection WHERE name = '$collection' LIMIT 1");
		return $sql->result()[0];
	}

}