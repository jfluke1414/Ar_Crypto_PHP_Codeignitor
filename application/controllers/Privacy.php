<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends Crypto_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->_header();		
	}
	
	public function index()
	{		
		$this->load->view('privacy_view');	
		$this->_footer();
	}
}

