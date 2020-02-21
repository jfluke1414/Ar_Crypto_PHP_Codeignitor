<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends Crypto_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{		
		$this->load->view('company_view');	
		$this->_footer();
	}
}

