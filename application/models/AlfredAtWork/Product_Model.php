<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Model extends CI_Model{
	
	public function get_collection_id( $name ){
		$sql = $this->db->query("SELECT id FROM collection WHERE name = '$name'");
		return $sql->result()[0];
	}

	public function showProductData( $collection_id ){
		$sql = $this->db->query("SELECT * FROM products WHERE collection_id = '$collection_id' ORDER BY id DESC");
		return $sql->result();
	}

	public function showProductDetailData( $product_id ){
		$sql = $this->db->query("SELECT * FROM products WHERE id = $product_id");
		return $sql->result()[0];
	}

	public function insert_element( $collection_id, $color ){
		$sql = $this->db->query("SELECT name FROM collection WHERE id = '$collection_id'");
		$collection_name = $sql->result()[0]->name;

		$data = array(
            'color' => $color,
            'collection' => $collection_name,
            'collection_id' => $collection_id,
            'picture' => 'assets/images/news/placeholder.png',
            'thumb' => 'assets/images/news/placeholder.png'
      	);

      $sql = $this->db->insert('products', $data);
	}

	public function switch_element( $id ){
		$sql = $this->db->query("SELECT active, collection_id FROM products WHERE id = $id LIMIT 1");
      	$result = $sql->result()[0];
      	$collection_id = $result->collection_id;

        if($result->active == 1){
            $sql_update_products = $this->db->query("UPDATE products SET active='0' WHERE id = $id LIMIT 1");
            return $sql_update_products == true;
        }elseif( $result->active == 0 ){
        	$sql_collection = $this->db->query("SELECT active FROM collection WHERE id = '$collection_id' LIMIT 1");
      		$collection_active = $sql_collection->result()[0]->active;
      		if( $collection_active == 0){
      			$sql_update_collection = $this->db->query("UPDATE collection SET active='1' WHERE id = '$collection_id'");
      			$sql_update_products = $this->db->query("UPDATE products SET active='1' WHERE id = '$id'");
      			return $sql_update_products == true;
        	}else{
        		$sql_update_products = $this->db->query("UPDATE products SET active='1' WHERE id = '$id'");
        		return $sql_update_products == true;
        	}
        }
	}

	public function delete_element( $product_id ){
		$sql_path = $this->db->query("SELECT picture, thumb FROM products WHERE id = $product_id LIMIT 1");
		$thumb_path = $sql_path->result()[0]->thumb;
		$picture_path = $sql_path->result()[0]->picture;

		if( $thumb_path != 'assets/images/news/placeholder.png'){
			unlink( $thumb_path );
		}
		if( $picture_path != 'assets/images/news/placeholder.png'){
			unlink( $picture_path );
		}

		$sql = $this->db->query("DELETE FROM products WHERE id = '$product_id'");
		return $sql == true;
	}

	public function category_element( $product_id, $category ){
        $sql = $this->db->query("UPDATE products SET category = '$category' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function color_element( $product_id, $color ){
        $sql = $this->db->query("UPDATE products SET color = '$color' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function gender_element( $product_id, $gender ){
        $sql = $this->db->query("UPDATE products SET gender = '$gender' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function tags_element( $product_id, $tags ){
        $sql = $this->db->query("UPDATE products SET tag = '$tags' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function size_element( $product_id, $size ){
        $sql = $this->db->query("UPDATE products SET size = '$size' WHERE id = '$product_id'");
		return $sql == true;
	}

	public function picture_element($product_id, $imagename ){
		$path = 'assets/uploads/products/' . $imagename;
        $sql = $this->db->query("UPDATE products SET picture = '$path' WHERE id = '$product_id'");
		return $sql == true;
    }

	public function thumb_element($product_id, $thumbname ){
		$path = 'assets/uploads/thumbnails/' . $thumbname;
        $sql = $this->db->query("UPDATE products SET thumb = '$path' WHERE id = '$product_id'");
		return $sql == true;
    }

}