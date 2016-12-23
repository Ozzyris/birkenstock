<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class collectiondetailsModel extends CI_Model{
	
	public function showData( $collection_id ){
		$sql = $this->db->query("SELECT * FROM collection WHERE id = $collection_id");
		return $sql->result()[0];
	}
	public function update_name( $collection_id, $name ){
        $sql = $this->db->query("UPDATE collection SET name = '$name' WHERE id = '$collection_id'");
		return $sql == true;
	}
	public function update_description( $collection_id, $description ){
        $sql = $this->db->query("UPDATE collection SET description = '$description' WHERE id = '$collection_id'");
		return $sql == true;

	}

}