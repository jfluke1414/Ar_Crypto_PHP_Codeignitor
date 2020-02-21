<?php
class Crypto_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('text');
		$this->load->helper('file');
		
	}

	function _header(){
        $header['title'] = "Crypto";
        $this->load->view("/include/header", $header);
	}
	
	function _header_dialog(){
       $this->load->view("/include/header_dialog");
	}

	function _manageheader(){
		$header['title'] = "Crypto";
		$this->load->view("/include/manageheader", $header);
		
	}

	
	function _footer(){
		$this->load->view("/include/footer");
	}	
	
	
	function _login_chk()
	{ 
	    //만약 비로그인이면 로그인페이지로 이동시킴
	    //If It's not logon, make it move to login page
	    if(!$this->session->userdata('isuser'))
	    {
	        redirect('index.php/Main/login','location');
	        return true;
	    }
	}

	
	
	
	
	
	
	
	
	
	
}
