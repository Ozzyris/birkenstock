<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model{
	public function showData(){
		$sql = $this->db->query("SELECT * FROM footer WHERE id = '1' LIMIT 1");
		return $sql->result()[0];
	}
		
	public function newsletter_content( $newsletter_text ){	
        $sql = $this->db->query("UPDATE footer SET newsletter_text = '$newsletter_text' WHERE id = '1'");
		return $sql == true;
	}
		
	public function facebook_content( $facebook_text, $facebook_link ){	
        $sql = $this->db->query("UPDATE footer SET facebook_text = '$facebook_text', facebook_link = '$facebook_link' WHERE id = '1'");
		return $sql == true;
	}
		
	public function instagram_content( $instagram_text, $instagram_link ){	
        $sql = $this->db->query("UPDATE footer SET instagram_text = '$instagram_text', instagram_link = '$instagram_link' WHERE id = '1'");
		return $sql == true;
	}
		
	public function address_content( $address_text, $address_link ){	
        $sql = $this->db->query("UPDATE footer SET address_text = '$address_text', address_link = '$address_link' WHERE id = '1'");
		return $sql == true;
	}
		
	public function email_content( $email_text, $email_link ){	
        $sql = $this->db->query("UPDATE footer SET email_text = '$email_text', email_link = '$email_link' WHERE id = '1'");
		return $sql == true;
	}

	public function phone_content( $phone_text, $phone_link ){	
        $sql = $this->db->query("UPDATE footer SET phone_text = '$phone_text', phone_link = '$phone_link' WHERE id = '1'");
		return $sql == true;
	}
}