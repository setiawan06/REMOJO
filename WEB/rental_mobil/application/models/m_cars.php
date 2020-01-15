<?php 
 
class m_cars extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function mobil(){
		$this->db->select('*');
		$this->db->from('tb_gallery_mobil');
		$this->db->join('tb_mobil','tb_mobil.ID_MOBIL=tb_gallery_mobil.ID_MOBIL');
		$this->db->order_by('tb_gallery_mobil.ID_GALLERY', 'DESC');		
		// $this->db->limit(3);
		$query = $this->db->get();
    	return $query->result();
	}
}