<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_Model extends CI_Model{
	
	public function showNewsData(){
		$sql = $this->db->query("SELECT * FROM news ORDER BY time DESC");
		return $sql->result();
	}

	public function showNewsDetailsData( $news_id ){
		$sql = $this->db->query("SELECT * FROM news WHERE id = $news_id");
		return $sql->result()[0];
	}

	public function insertData( $title ){
		$date = new DateTime();
		$date = $date->getTimestamp();

		$data = array(
            'title' => $title,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem atque alias iste cupiditate deserunt eligendi blanditiis quod odit nihil provident, ea reiciendis excepturi cum voluptatum quaerat hic beatae ipsum minus.',
            'image' => 'assets/images/news/placeholder.png',
            'link' => '#',
            'time' => $date
      	);

      $sql = $this->db->insert('news', $data);
	}

	public function switchActive( $news_id ){
		$sql = $this->db->query("SELECT active FROM news WHERE id = $news_id LIMIT 1");
      	$result = $sql->result()[0];

        if($result->active == 1){
            $sql = $this->db->query("UPDATE news SET active='0' WHERE id = $news_id LIMIT 1");
        }elseif( $result->active == 0 ){
            $sql = $this->db->query("UPDATE news SET active='1' WHERE id = $news_id LIMIT 1");
        }
		return $sql == true;
	}

	public function delete_element( $news_id ){
		$sql = $this->db->query("DELETE FROM news WHERE id = '$news_id'");
		return $sql == true;
	}

	public function title_content( $news_id, $title ){
        $sql = $this->db->query("UPDATE news SET title = '$title' WHERE id = '$news_id'");
		return $sql == true;
	}

	public function time_content( $news_id, $time ){
        $sql = $this->db->query("UPDATE news SET time = '$time' WHERE id = '$news_id'");
		return $sql == true;
	}

	public function description_content( $news_id, $description ){
        $sql = $this->db->query("UPDATE news SET description = '$description' WHERE id = '$news_id'");
		return $sql == true;

	}

	public function link_content( $news_id, $link ){
        $sql = $this->db->query("UPDATE news SET link = '$link' WHERE id = '$news_id'");
		return $sql == true;
	}

	public function image_content($news_id, $image_name ){
		$path = 'assets/uploads/news/' . $image_name;
        $sql = $this->db->query("UPDATE news SET image = '$path' WHERE id = '$news_id'");
		return $sql == true;
    }

}