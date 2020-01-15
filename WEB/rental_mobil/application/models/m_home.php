<?php 
 
class m_home extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function stastiktik(){
		return $this->db->query('SELECT STATUS_TRANSAKSI,COUNT(*) AS total_transaksi FROM tb_transaksi GROUP BY STATUS_TRANSAKSI=0');
	}


	function stastiktik_transaksi_selesai(){
		return $this->db->query('SELECT STATUS,COUNT(*) AS total_transaksi_selesai FROM tb_detail_transaksi GROUP BY STATUS=0');
	}

	function stastiktik_mobil(){
		return $this->db->query('SELECT ID_MOBIL,COUNT(*) AS total_mobil FROM tb_mobil GROUP BY ID_MOBIL=0');
	}
}