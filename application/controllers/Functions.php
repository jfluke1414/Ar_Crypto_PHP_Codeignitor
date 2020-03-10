<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Functions extends Crypto_Controller {

	public function __construct()
	{
	    parent::__construct();
	    $this->init();	
	}
	
	public function init(){
	    $this->_header();
	    $this->_header_dialog();
	}
	
	public function index()
	{				
	    if($this->session->userdata('user_id')){
	        $substracted_arr = $this->get_user_coin();	        
	    } else {
	        $substracted_arr = array(
	            'currency_btc' => null,
	            'currency_eth'=> null,
	            'currency_xrp'=> null,
	            'currency_ltc' => null,
	            'currency_bch'=> null,
	            'currency_dash' => null,
	            'currency_pib'=> null,
	            'currency_qtum'=> null,
	            'currency_snt'=> null,
	            
	            'sum_btc' => null,
	            'sum_eth' => null,
	            'sum_xrp' => null,
	            'sum_ltc' => null,
	            'sum_bch' => null,
	            'sum_dash' => null,
	            'sum_pib' => null,
	            'sum_qtum' => null,
	            'sum_snt' => null,
	            
	            'btc_count' => null,
	            'eth_count' => null,
	            'xrp_count' => null,
	            'ltc_count' => null,
	            'bch_count' => null,
	            'dash_count' => null,
	            'pib_count' => null,
	            'qtum_count' => null,
	            'snt_count' => null,
	            
	            'btc_rate' => null,
	            'eth_rate' => null,
	            'xrp_rate' => null,
	            'ltc_rate' => null,
	            'bch_rate' => null,
	            'dash_rate' => null,
	            'pib_rate' => null,
	            'qtum_rate' => null,
	            'snt_rate' => null
	        );
	    }        	    
	    $data['subtracted_list'] = $substracted_arr;
	    $this->load->view('function_view', $data);
	    $this->_footer();
	}
	
	function get_user_coin(){	    
	    $this->load->model('Musers');
	    $result = $this->Musers->get_user_coin();
	    
	    $currency_btc = 'btc';
	    $currency_eth = 'eth';
	    $currency_xrp = 'xrp';
	    $currency_ltc = 'ltc';
	    $currency_bch = 'bch';
	    $currency_dash = 'dash';
	    $currency_pib = 'pib';
	    $currency_qtum = 'qtum';
	    $currency_snt = 'snt';
	    
	    foreach($result as $list){
	        $btc_count = $list->btc_count;
	        $eth_count = $list->eth_count;
	        $xrp_count = $list->xrp_count;
	        $ltc_count = $list->ltc_count;
	        $bch_count = $list->bch_count;
	        $dash_count = $list->dash_count;
	        $pib_count = $list->pib_count;
	        $qtum_count = $list->qtum_count;
	        $snt_count = $list->snt_count;
	    }

	    $this->load->model('Mfunctions');
	    $coin_data = $this->Mfunctions->get_coininfo_selected();
	    
	    foreach($coin_data as $list){
	        if($list->currency == 'btc'){
	            $sum_btc = $list->price * $btc_count;
	            $btc_rate = $list->price;
	        }
	        if($list->currency == 'eth'){
	            $sum_eth = $list->price * $eth_count;
	            $eth_rate = $list->price;
	        }
	        if($list->currency == 'xrp'){
	            $sum_xrp = $list->price * $xrp_count;
	            $xrp_rate = $list->price;
	        }
	        if($list->currency == 'ltc'){
	            $sum_ltc = $list->price * $ltc_count;
	            $ltc_rate = $list->price;
	        }
	        if($list->currency == 'bch'){
	            $sum_bch = $list->price * $bch_count;
	            $bch_rate = $list->price;
	        }
	        if($list->currency == 'dash'){
	            $sum_dash = $list->price * $dash_count;
	            $dash_rate = $list->price;
	        }
	        if($list->currency == 'pib'){
	            $sum_pib = $list->price * $pib_count;
	            $pib_rate = $list->price;
	        }
	        if($list->currency == 'qtum'){
	            $sum_qtum = $list->price * $qtum_count;
	            $qtum_rate = $list->price;
	        }
	        if($list->currency == 'snt'){
	            $sum_snt = $list->price * $snt_count;
	            $snt_rate = $list->price;
	        }
	    }
	    
	    $substracted_arr = array(	        
	        'currency_btc' => $currency_btc,
	        'currency_eth'=> $currency_eth,
	        'currency_xrp'=> $currency_xrp,
	        'currency_ltc' => $currency_ltc,
	        'currency_bch'=> $currency_bch,
	        'currency_dash' => $currency_dash,
	        'currency_pib'=> $currency_pib,
	        'currency_qtum'=> $currency_qtum,
	        'currency_snt'=> $currency_snt,
	        
	        'sum_btc' => $sum_btc,
	        'sum_eth' => $sum_eth,
	        'sum_xrp' => $sum_xrp,
	        'sum_ltc' => $sum_ltc,
	        'sum_bch' => $sum_bch,
	        'sum_dash' => $sum_dash,
	        'sum_pib' => $sum_pib,
	        'sum_qtum' => $sum_qtum,
	        'sum_snt' => $sum_snt,
	        
	        'btc_count' => $btc_count,
	        'eth_count' => $eth_count,
	        'xrp_count' => $xrp_count,
	        'ltc_count' => $ltc_count,
	        'bch_count' => $bch_count,
	        'dash_count' => $dash_count,
	        'pib_count' => $pib_count,
	        'qtum_count' => $qtum_count,
	        'snt_count' => $snt_count,
	        
	        'btc_rate' => $btc_rate,
	        'eth_rate' => $eth_rate,
	        'xrp_rate' => $xrp_rate,
	        'ltc_rate' => $ltc_rate,
	        'bch_rate' => $bch_rate,
	        'dash_rate' => $dash_rate,
	        'pib_rate' => $pib_rate,
	        'qtum_rate' => $qtum_rate,
	        'snt_rate' => $snt_rate
	        
	    );	    
	    return $substracted_arr;
	}
	
	function get_data_selected_ajax(){	    
	    $btc_count = $this->input->post('btc_count');
	    $eth_count = $this->input->post('eth_count');
	    $xrp_count = $this->input->post('xrp_count');
	    $ltc_count = $this->input->post('ltc_count');
	    $bch_count = $this->input->post('bch_count');
	    $dash_count = $this->input->post('dash_count');
	    $pib_count = $this->input->post('pib_count');
	    $qtum_count = $this->input->post('qtum_count');
	    $snt_count = $this->input->post('snt_count');
	    
	    if($btc_count == null){
	        $btc_count = 0;
	    }
	    if($eth_count == null){
	        $eth_count = 0;
	    }
	    if($xrp_count == null){
	        $xrp_count = 0;
	    }
	    if($ltc_count == null){
	        $ltc_count = 0;
	    }
	    if($bch_count == null){
	        $bch_count = 0;
	    }
	    if($dash_count == null){
	        $dash_count = 0;
	    }
	    if($pib_count == null){
	        $pib_count = 0;
	    }
	    if($qtum_count == null){
	        $pib_count = 0;
	    }
	    if($snt_count == null){
	        $pib_count = 0;
	    }
	    
	    $this->load->model('Mfunctions');
	    $coin_data = $this->Mfunctions->get_coininfo_selected();
	    
	    $currency_btc = 'btc';
	    $currency_eth = 'eth';
	    $currency_xrp = 'xrp';
	    $currency_ltc = 'ltc';
	    $currency_bch = 'bch';
	    $currency_dash = 'dash';
	    $currency_pib = 'pib';
	    $currency_qtum = 'qtum';
	    $currency_snt = 'snt';
	    
	    foreach($coin_data as $list){
	        if($list->currency == 'btc'){
	            $sum_btc = $list->price * $btc_count;
	        }
	        if($list->currency == 'eth'){
	            $sum_eth = $list->price * $eth_count;
	        }
	        if($list->currency == 'xrp'){
	            $sum_xrp = $list->price * $xrp_count;
	        }
	        if($list->currency == 'ltc'){
	            $sum_ltc = $list->price * $ltc_count;
	        }
	        if($list->currency == 'bch'){
	            $sum_bch = $list->price * $bch_count;
	        }
	        if($list->currency == 'dash'){
	            $sum_dash = $list->price * $dash_count;
	        }
	        if($list->currency == 'pib'){
	            $sum_pib = $list->price * $pib_count;
	        }
	        if($list->currency == 'qtum'){
	            $sum_qtum = $list->price * $qtum_count;
	        }
	        if($list->currency == 'pib'){
	            $sum_snt = $list->price * $snt_count;
	        }
	    }
	    
	    $substracted_arr = array(
	        'currency_btc' => $currency_btc,
	        'currency_eth'=> $currency_eth,
	        'currency_xrp'=> $currency_xrp,
	        'currency_ltc' => $currency_ltc,
	        'currency_bch'=> $currency_bch,
	        'currency_dash' => $currency_dash,
	        'currency_pib'=> $currency_pib,
	        'currency_qtum'=> $currency_qtum,
	        'currency_snt'=> $currency_snt,
	        
	        'sum_btc' => $sum_btc,
	        'sum_eth' => $sum_eth,
	        'sum_xrp' => $sum_xrp,
	        'sum_ltc' => $sum_ltc,
	        'sum_bch' => $sum_bch,
	        'sum_dash' => $sum_dash,
	        'sum_pib' => $sum_pib,
	        'sum_qtum' => $sum_qtum,
	        'sum_snt' => $sum_snt,
	        
	        'btc_count' => $btc_count,
	        'eth_count' => $eth_count,
	        'xrp_count' => $xrp_count,
	        'ltc_count' => $ltc_count,
	        'bch_count' => $bch_count,
	        'dash_count' => $dash_count,
	        'pib_count' => $pib_count,
	        'qtum_count' => $qtum_count,
	        'snt_count' => $snt_count
	    );	    
	    $data['subtracted_list'] = $substracted_arr;
	    echo json_encode(array('status' => 'success', 'message' => 'ss', 'data' => $substracted_arr));
	    exit;
	}
}

function get_data_selected_submit(){    
    $btc_count = $this->input->post('btc_count');
    $eth_count = $this->input->post('eth_count');
    $xrp_count = $this->input->post('xrp_count');
    $ltc_count = $this->input->post('ltc_count');
    $bch_count = $this->input->post('bch_count');
    $dash_count = $this->input->post('dash_count');
    $pib_count = $this->input->post('pib_count');
    
    if($btc_count == null){
        $btc_count = 0;
    }
    if($eth_count == null){
        $eth_count = 0;
    }
    if($xrp_count == null){
        $xrp_count = 0;
    }
    if($ltc_count == null){
        $ltc_count = 0;
    }
    if($bch_count == null){
        $bch_count = 0;
    }
    if($dash_count == null){
        $dash_count = 0;
    }
    if($pib_count == null){
        $pib_count = 0;
    }
    
    $this->load->model('Mfunctions');
    $coin_data = $this->Mfunctions->get_coininfo_selected();

    $currency_btc = 'btc';
    $currency_eth = 'eth';
    $currency_xrp = 'xrp';
    $currency_ltc = 'ltc';
    $currency_bch = 'bch';
    $currency_dash = 'dash';
    $currency_pib = 'pib';
    
    $sum_btc = 0;
    $sum_eth = 0;
    $sum_xrp = 0;
    $sum_ltc = 0;
    $sum_bch = 0;
    $sum_dash = 0;
    $sum_pib = 0;
	
    foreach($coin_data as $list){
        if($list->currency == 'btc'){
            $sum_btc = $list->price * $btc_count;
        }
        if($list->currency == 'eth'){
            $sum_eth = $list->price * $eth_count;
        }
        if($list->currency == 'xrp'){
            $sum_xrp = $list->price * $xrp_count;
        }
        if($list->currency == 'ltc'){
            $sum_ltc = $list->price * $ltc_count;
        }
        if($list->currency == 'bch'){
            $sum_bch = $list->price * $bch_count;
        }
        if($list->currency == 'dash'){
            $sum_dash = $list->price * $dash_count;
        }
        if($list->currency == 'pib'){
            $sum_pib = $list->price * $pib_count;
        }
    }

    $substracted_arr = array(
        'currency_btc' => $currency_btc,
        'currency_eth'=> $currency_eth,
        'currency_xrp'=> $currency_xrp,
        'currency_ltc' => $currency_ltc,
        'currency_bch'=> $currency_bch,
        'currency_dash' => $currency_dash,
        'currency_pib'=> $currency_pib,
        
        'sum_btc' => $sum_btc,
        'sum_eth' => $sum_eth,
        'sum_xrp' => $sum_xrp,
        'sum_ltc' => $sum_ltc,
        'sum_bch' => $sum_bch,
        'sum_dash' => $sum_dash,
        'sum_pib' => $sum_pib
    );
    $data['subtracted_list'] = $substracted_arr;
    $this->load->view('function_view', $data);
}
