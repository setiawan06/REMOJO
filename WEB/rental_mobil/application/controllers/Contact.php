<?php 
 
class Contact extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_contact');
		$this->load->helper('url');
 
	}
 
	function index(){
		$this->load->view('kontak');
	}

}