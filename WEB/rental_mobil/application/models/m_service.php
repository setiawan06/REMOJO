<?php 
 
class m_service extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
}