<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection_Model extends CI_Model{
	
	public function showCollectionData(){
		$sql = $this->db->query("SELECT id, active, name FROM collection ORDER BY id DESC");
		$data = array();
		foreach ( $sql->result() as $value){
			$sql_count = $this->db->query("SELECT id FROM products WHERE collection_id = '$value->id'");
			$sql_picture = $this->db->query("SELECT thumb FROM products WHERE collection_id = '$value->id' LIMIT 1");

			if( $sql_count->num_rows() == 0 ){
				array_push($data, (object) array("id"=>$value->id, "active"=>$value->active, "thumb"=> "assets/images/news/placeholder.png", "name"=>$value->name, "count"=>$sql_count->num_rows()));
			}else{
				array_push($data, (object) array("id"=>$value->id, "active"=>$value->active, "thumb"=> $sql_picture->result()[0]->thumb, "name"=>$value->name, "count"=>$sql_count->num_rows()));
			}

		}
		return $data;
	}
	
	public function showCollectionDetailsData( $collection_id ){
		$sql = $this->db->query("SELECT * FROM collection WHERE id = $collection_id");
		return $sql->result()[0];
	}

	public function insert_element( $title ){
		$data = array(
            'name' => $title,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem atque alias iste cupiditate deserunt eligendi blanditiis quod odit nihil provident, ea reiciendis excepturi cum voluptatum quaerat hic beatae ipsum minus.'
      	);

      	$sql = $this->db->insert('collection', $data);
	}

	public function switch_element( $collection_id ){
		$sql = $this->db->query("SELECT active FROM collection WHERE id = $collection_id LIMIT 1");
      	$result = $sql->result()[0];

        if($result->active == 1){
        	$is_all_product_archive = 'yes';
            $sql_product_archive = $this->db->query("SELECT active FROM products WHERE collection_id = '$collection_id'");
            $result_product_archive = $sql_product_archive->result();

            foreach ( $result_product_archive as $value){
            	if( $value->active == 1){ $is_all_product_archive = false; }
			}
			if( $is_all_product_archive == true ){
				$sql_update_collection = $this->db->query("UPDATE collection SET active='0' WHERE id = $collection_id LIMIT 1");
				$data = array('status' => 'success', 'message' => 'Status Switched');    
				header('Content-Type: application/json');
				return json_encode( $data );
			}else{
				$data = array('status' => 'error', 'message' => 'You can\'t switch off a collection if all the product aren\'t switch off');    
				header('Content-Type: application/json');
				return json_encode( $data );
			}

        }elseif( $result->active == 0 ){
        	$sql_product = $this->db->query("SELECT id FROM products WHERE collection_id = '$collection_id'");
            $result_product = $sql_product->result();
            if( count($result_product) == 0){
        		$data = array('status' => 'error', 'message' => 'You can\'t switch on an empty collection');    
				header('Content-Type: application/json');
				return json_encode( $data );
            }else{
            	$sql_update_collection = $this->db->query("UPDATE collection SET active='1' WHERE id = $collection_id LIMIT 1");
            	$data = array('status' => 'success', 'message' => 'Status Switched');    
				header('Content-Type: application/json');
				return json_encode( $data );
            }
        }
	}

	public function delete_element( $collection_id ){
		$sql_count = $this->db->query("SELECT id FROM products WHERE collection_id = '$collection_id'");
		$nb_of_row = $sql_count->num_rows();

		if( $nb_of_row == 0 ){
			$sql = $this->db->query("DELETE FROM collection WHERE id = '$collection_id'");
			return $sql == true;
		}else{
			header('HTTP/1.1 500 The collection need to be empty to be deleted.' );
       		header('Content-Type: application/json; charset=UTF-8');
        	die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
	}

	public function name_content( $collection_id, $name ){
        $sql = $this->db->query("UPDATE collection SET name = '$name' WHERE id = '$collection_id'");
		return $sql == true;
	}
	public function description_content( $collection_id, $description ){
        $sql = $this->db->query("UPDATE collection SET description = '$description' WHERE id = '$collection_id'");
		return $sql == true;

	}
}