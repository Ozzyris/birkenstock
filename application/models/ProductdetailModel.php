<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productdetailModel extends CI_Model{
	
	public function showProductsDetails( $id ){
		$sql_collection_id = $this->db->query("SELECT collection_id FROM products WHERE id = '$id' LIMIT 1");
		$collection_id = $sql_collection_id->result()[0]->collection_id;

		$sql = $this->db->query("SELECT * FROM products WHERE collection_id = '$collection_id'");
		return $sql->result();
	}

	public function showCollectionDetails( $id ){
		$sql_collection_id = $this->db->query("SELECT collection_id FROM products WHERE id = '$id' LIMIT 1");
		$collection_id = $sql_collection_id->result()[0]->collection_id;

		$sql = $this->db->query("SELECT * FROM collection WHERE id = '$collection_id' LIMIT 1");
		return $sql->result()[0];
	}

}