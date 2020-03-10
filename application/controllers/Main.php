<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends Crypto_Controller {

	public function __construct(){
	    parent::__construct();
	    $this->init();
	}
	
	public function init(){
	    $this->_header();
	    $this->_header_dialog();
	}
	
	public function index(){		
	    //exchange
	    $data['exchange'] = $this->get_exchange_info();

	    //coinone
            $ex_name = 'coinone';
            $data[$ex_name] = $this->get_coin_info($ex_name);
		
	    //coinfield
            $ex_name = 'coinfield';
            $data[$ex_name] = $this->get_coin_info($ex_name);

	    //huobi
            $ex_name = 'huobi';
            $data[$ex_name] = $this->get_coin_info($ex_name);

	    //upbit
            $ex_name = 'upbit';
            $data[$ex_name] = $this->get_coin_info($ex_name);
		
	    //bithumb
            $ex_name = 'bithumb';
            $data[$ex_name] = $this->get_coin_info($ex_name);

	    //bittrex
            $ex_name = 'bittrex';
            $data[$ex_name] = $this->get_coin_info($ex_name);
		
	    //poloniex
	    $ex_name = 'poloniex';
	    $data[$ex_name] = $this->get_coin_info($ex_name);
		
            $this->load->view('main_view', $data);
		
	    $this->_footer();
	}
	
	function inspection(){
	    $this->_login_chk();	    
	}

	function get_coin_info($ex_name){
	    $this->load->model('Mains');
	    $data = $this->Mains->get_coin_data($ex_name);
		
	    return $data;
	}
	
	function get_coin_info_ajax(){	    
	    $this->input->post('');	    
	    $this->load->model('Mains');
	    $data = $this->Mains->get_coin_data($ex_name);
	    
	    return $data;
	}

	function login(){
	    $this->load->view('login_view');
	}	
}
