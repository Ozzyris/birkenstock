<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class collectionModel extends CI_Model{
	
	public function showData(){
		$sql = $this->db->query("SELECT * FROM collection");
		return $sql->result();
	}

	public function insertData( $title ){
		$data = array(
            'name' => $title,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem atque alias iste cupiditate deserunt eligendi blanditiis quod odit nihil provident, ea reiciendis excepturi cum voluptatum quaerat hic beatae ipsum minus.'
      	);

      	$sql = $this->db->insert('collection', $data);
	}

	public function switchActive( $id ){
		$sql = $this->db->query("SELECT active FROM collection WHERE id = $id LIMIT 1");
      	$result = $sql->result()[0];
        if($result->active == 1){
        	$is_all_product_archive = 'yes';
            $sql_product_archive = $this->db->query("SELECT active FROM products WHERE collection_id = '$id'");
            $result_product_archive = $sql_product_archive->result();

            foreach ( $result_product_archive as $value){
            	if( $value->active == 1){ $is_all_product_archive = false; }
			}
 
			if( $is_all_product_archive == true ){
				$sql_update_collection = $this->db->query("UPDATE collection SET active='0' WHERE id = $id LIMIT 1");
				return $sql_update_collection == true;
			}else{
				header('HTTP/1.1 500 You can\'t switch off a collection if all the product aren\'t switch off' );
       			header('Content-Type: application/json; charset=UTF-8');
        		die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
			}

            
        }elseif( $result->active == 0 ){
        	$sql_product = $this->db->query("SELECT id FROM products WHERE collection_id = '$id'");
            $result_product = $sql_product->result();
            print_r(count ($result_product));
            if( count($result_product) == 0){
				header('HTTP/1.1 500 You can\'t switch on an empty collection' );
       			header('Content-Type: application/json; charset=UTF-8');
        		die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
            }else{
            	$sql_update_collection = $this->db->query("UPDATE collection SET active='1' WHERE id = $id LIMIT 1");
            	return $sql_update_collection == true;
            }
        }
	}

	public function addDeleteDate( $id ){
		$deteDate = new DateTime();
		$deteDate = $deteDate->getTimestamp();
		$deteDate = $deteDate + 2592000;

		$sql = $this->db->query("UPDATE collection SET time_to_death='$deteDate', active='-1' WHERE id = $id LIMIT 1");
		return $sql == true;

		// BEING ABLE TO ACHIVE A COLLECTION
        // ADD ALL THE PRODUCT INSIDE OF IT
	}

	public function undoArchiveData( $id ){
		$sql = $this->db->query("UPDATE collection SET time_to_death='0', active='0' WHERE id = $id LIMIT 1");
		return $sql == true;
	}

}


		// $sql_product_read = $this->db->query("SELECT id FROM products WHERE collection_id = '$collection_id' AND active = '1'");
		// $result = $sql_product_read->result()[0];

		// //foreach
		// $sql_product_write = $this->db->query("UPDATE products SET active='0' WHERE id = $id");
		// $sql_product_write;


// NEED TO CHECK IF ALL THE PRODUCT ON A COLLECTION ARE DELETED BEFORE 
// OR DELETE THEM
// BEING ABLE TO ACHIVE A COLLECTION
// AND BY THE SAME OCCASION ALL THE PRODUCT WHO COME WITh IT