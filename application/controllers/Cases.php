<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends Crypto_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('download');
		
	}
	
	public function index()
	{		
		$this->load->view('case_view');	
		$this->_footer();
	}
	
	
	public function Accenture_download($filename)
	{
		$path = "/home/avds/assets/download/";
		$path = $path.$filename;		
		force_download($path, NULL);
		
		$msg = "Download completed.";
		echo("<script>alert('$msg');history.back();</script>");
	}	
	
	public function pdfviewer($file)
	{
		$path = "/assets/download/".$file;

		$data['path'] = $path;
		$this->load->view('pdf_view', $data);
		
	}
	
	
}

