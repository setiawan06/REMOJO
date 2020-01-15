<?php 
 
class m_about extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
}