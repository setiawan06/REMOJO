<?php 
 
class Team extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_team');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('anggota');
	}

}