<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class intro extends Crypto_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{		
	
		
		$this->_get_coinone_info();
		$this->load->view('intro_view');
		$this->_footer();
	}
	
	

	
}

