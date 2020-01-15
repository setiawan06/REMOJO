<?php 
 
class m_contact extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
}