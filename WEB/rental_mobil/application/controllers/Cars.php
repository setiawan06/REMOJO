<?php 
 
class Cars extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_cars');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['tb_gallery_mobil'] = $this->m_cars->mobil();
		$this->load->view('mobil',$data);
	}

}