<?php 
 
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_home');
		$this->load->model('m_cars');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['tb_gallery_mobil'] = $this->m_cars->mobil();
		$data['tb_detail_transaksi'] = $this->m_home->stastiktik_transaksi_selesai()->result();
		$data['tb_transaksi'] = $this->m_home->stastiktik()->result();
		$data['tb_mobil'] = $this->m_home->stastiktik_mobil()->result();
		$this->load->view('index',$data);
	}

}