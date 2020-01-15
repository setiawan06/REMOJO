<?php 
 
class Blog extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_blog');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('berita');
	}

}