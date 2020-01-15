<?php 
 
class m_blog extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}
}