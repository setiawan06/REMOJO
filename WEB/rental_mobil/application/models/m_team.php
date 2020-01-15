<?php 
 
class m_team extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
}