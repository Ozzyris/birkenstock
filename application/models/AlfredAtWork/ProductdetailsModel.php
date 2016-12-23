<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productdetailsModel extends CI_Model{
	
	public function showData( $product_id ){
		$sql = $this->db->query("SELECT * FROM products WHERE id = $product_id");
		return $sql->result()[0];
	}

	public function update_color( $product_id, $color ){
        $sql = $this->db->query("UPDATE products SET color = '$color' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function update_gender( $product_id, $gender ){
        $sql = $this->db->query("UPDATE products SET gender = '$gender' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function update_tags( $product_id, $tags ){
        $sql = $this->db->query("UPDATE products SET tag = '$tags' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function update_size( $product_id, $size ){
        $sql = $this->db->query("UPDATE products SET size = '$size' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function update_picture($product_id, $imagename ){
        // $sql = $this->db->query("UPDATE products SET image = '$imagename' WHERE id = '$product_id'");
		return $sql == true;
    }


}