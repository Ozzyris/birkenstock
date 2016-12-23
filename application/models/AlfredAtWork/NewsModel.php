<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class newsModel extends CI_Model{
	
	public function showData(){
		$sql = $this->db->query("SELECT * FROM news");
		return $sql->result();

		//ORDER BY TIMESTAMP AND ACTIVE FIRST
		//CHECK THE TIME TO DEATH AND KILL IT
		// ADD THE EDIT MODAL
		// AJAX RELOAD OF THE CARD

	}
	public function insertData( $title ){
		$date = new DateTime();
		$date = $date->getTimestamp();

		$data = array(
            'title' => $title,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem atque alias iste cupiditate deserunt eligendi blanditiis quod odit nihil provident, ea reiciendis excepturi cum voluptatum quaerat hic beatae ipsum minus.',
            'image' => 'news/placeholder.png',
            'link' => '#',
            'time' => $date
      	);

      $sql = $this->db->insert('news', $data);
	}

	public function switchActive( $id ){
		$sql = $this->db->query("SELECT active FROM news WHERE id = $id LIMIT 1");
      	$result = $sql->result()[0];

        if($result->active == 1){
            $sql = $this->db->query("UPDATE news SET active='0' WHERE id = $id LIMIT 1");
        }elseif( $result->active == 0 ){
            $sql = $this->db->query("UPDATE news SET active='1' WHERE id = $id LIMIT 1");
        }
		return $sql == true;
	}

	public function addDeleteDate( $id ){
		$deteDate = new DateTime();
		$deteDate = $deteDate->getTimestamp();
		$deteDate = $deteDate + 2592000;

		$sql = $this->db->query("UPDATE news SET time_to_death='$deteDate', active='-1' WHERE id = $id LIMIT 1");
		return $sql == true;
	}

	public function undoArchiveData( $id ){
		$sql = $this->db->query("UPDATE news SET time_to_death='0', active='0' WHERE id = $id LIMIT 1");
		return $sql == true;
	}
}