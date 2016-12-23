<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productModel extends CI_Model{
	
	public function get_collection_id( $name ){
		$sql = $this->db->query("SELECT id FROM collection WHERE name = '$name'");
		return $sql->result()[0];
	}

	public function showData( $collection_id ){
		$sql = $this->db->query("SELECT * FROM products WHERE collection_id = '$collection_id' ORDER BY id DESC");
		return $sql->result();
	}

	public function insertData( $color, $collection_id ){
		$sql = $this->db->query("SELECT name FROM collection WHERE id = '$collection_id'");
		$collection_name = $sql->result()[0]->name;

		$data = array(
            'color' => $color,
            'collection' => $collection_name,
            'collection_id' => $collection_id,
            'picture' => 'news/placeholder.png',
            'thumb' => 'news/placeholder.png'
      	);

      $sql = $this->db->insert('products', $data);
	}

	public function switchActive( $id ){
		$sql = $this->db->query("SELECT active, collection_id FROM products WHERE id = $id LIMIT 1");
      	$result = $sql->result()[0];
      	$collection_id = $result->collection_id;

        if($result->active == 1){
            $sql_update_products = $this->db->query("UPDATE products SET active='0' WHERE id = $id LIMIT 1");
        }elseif( $result->active == 0 ){
        	$sql_collection = $this->db->query("SELECT active FROM collection WHERE id = '$collection_id' LIMIT 1");
      		$collection_active = $sql_collection->result()[0]->active;
      		if( $collection_active == 0){
      			$sql_update_collection = $this->db->query("UPDATE collection SET active='1' WHERE id = '$collection_id' LIMIT 1");
      			return $sql_update_collection == true;
      		}
            $sql_update_products = $this->db->query("UPDATE products SET active='1' WHERE id = $id LIMIT 1");
        }
		return $sql_update_products == true;

		//ACTIVATE COLLECTION IF NOT
	}

	public function addDeleteDate( $id ){
		$deteDate = new DateTime();
		$deteDate = $deteDate->getTimestamp();
		$deteDate = $deteDate + 2592000;

		$sql = $this->db->query("UPDATE products SET time_to_death='$deteDate', active='-1' WHERE id = $id LIMIT 1");
		return $sql == true;
	}

	public function undoArchiveData( $id ){
		$sql = $this->db->query("UPDATE products SET time_to_death='0', active='0' WHERE id = $id LIMIT 1");
		return $sql == true;
	}
}