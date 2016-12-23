<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class newsdetailsModel extends CI_Model{
	
	public function showData( $id ){
		$sql = $this->db->query("SELECT * FROM news WHERE id = $id");
		return $sql->result()[0];
	}
	public function update_title( $product_id, $title ){
        $sql = $this->db->query("UPDATE news SET title = '$title' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function update_description( $product_id, $description ){
        $sql = $this->db->query("UPDATE news SET description = '$description' WHERE id = '$product_id'");
		return $sql == true;

	}

	public function update_link( $product_id, $link ){
        $sql = $this->db->query("UPDATE news SET link = '$link' WHERE id = '$product_id'");
		return $sql == true;

	}

}