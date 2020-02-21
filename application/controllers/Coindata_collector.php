<?php
// if (!defined('BASEPATH')) exit('No direct script access allowed');
// defined('BASEPATH') OR exit('No direct script access allowed');

class Coindata_collector extends Crypto_Controller{

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index($ex_name)
	{
	    
	    if($ex_name == 'exchange'){
	     	$this->set_exchange_rate();
	        print_r("collected exchange data");
	    }
	    if($ex_name == 'coinone'){
	        $coinone = $this->get_coinone_info();
	        $result = $this->save_coin_info($coinone);
	        if($result == 'true'){
	            print_r("Collected coinone data");
	        } else {
	            print_r("Failed getting coinone data");
	        }
	         
	    }
	    if($ex_name == 'coinfield'){
    		$coinfield = $this->get_coinfield_info();
    		$result = $this->save_coin_info($coinfield);
    		if($result == 'true'){
    		    print_r("Collected coinfield data");
    		} else {
    		    print_r("Failed getting coinfield data");
    		}
	    }
	    if($ex_name == 'huobi'){
    		$huobi = $this->get_huobi_info();
    		$result = $this->save_coin_info($huobi);
    		if($result == 'true'){
    		    print_r("Collected huobi data");
    		} else {
    		    print_r("Failed getting huobi data");
    		}
	    }
	    if($ex_name == 'upbit'){
    		$upbit = $this->get_upbit_info();
    		$result = $this->save_coin_info($upbit);
     		if($result == 'true'){
     		    print_r("Collected upbit data");
     		} else {
     		    print_r("Failed getting upbit data");
     		}
	    }
	    if($ex_name == 'bithumb'){
     		$bithumb = $this->get_bithumb_info();
     		$result = $this->save_coin_info($bithumb);
     		if($result == 'true'){
     		    print_r("Collected bithumb data");
     		} else {
     		    print_r("Failed getting bithumb data");
     		}
	    }
	    if($ex_name == 'bittrex'){
    		$bittrex = $this->get_bittrex_info();
    		$result = $this->save_coin_info($bittrex);
    		if($result == 'true'){
    		    print_r("Collected bittrex data");
    		} else {
    		    print_r("Failed getting bittrex data");
    		}
	    }
	    if($ex_name == 'poloniex'){
    		$poloniex = $this->get_poloniex_info();
    		$result = $this->save_coin_info($poloniex);
    		if($result == 'true'){
    		    print_r("Collected poloniex data");
    		} else {
    		    print_r("Failed getting poloniex data");
    		}
	    }
	}


	function get_coin_info($ex_name){
	    $this->load->model('Mains');
	    $data = $this->Mains->get_coin_data($ex_name);
	    
	    return $data;
	}
	
	
	function save_coin_info($data)
	{
	    
	    if($data == null){
	        $msg = "Please check data. It's probably empty.";
	        echo("
			<script>
			alert('$msg');
			history.back();
			</script>
			");
	        exit;
	    }
	    
	    $this->load->model('Mains');
	    $result = $this->Mains->set_coin_data($data);
	    
	    return $result;
	}
	
	
	
	function get_coinone_info()
	{
	    $coinone_url = 'https://api.coinone.co.kr/ticker/?currency="BTC"';
	    
	    $curl_handle=curl_init();
	    
	    curl_setopt($curl_handle, CURLOPT_URL,$coinone_url);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    // 		curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
	    // 		curl_setopt($curl_handle, CURLOPT_SSL_VERIFYHOST, FALSE);
	    
	    $coinone_data = curl_exec($curl_handle);
	    
	    // 		if(curl_exec($curl_handle) === false)
	        // 		{
	        // 		    echo 'Curl error: ' . curl_error($curl_handle);
	        // 		}
	        // 		else
	            // 		{
	            // 		    echo 'Operation completed without any errors';
	            // 		}
	                
	            curl_close($curl_handle);
	            $data = json_decode($coinone_data);
	            
	            $btc_arr = $data->btc;
	            $eth_arr = $data->eth;
	            $xrp_arr = $data->xrp;
	            $ltc_arr = $data->ltc;
	            $bch_arr = $data->bch;
	            $pib_arr = $data->pib;
	            
	            $datas = array();
	            
	            
	            $datas['btc_currency'] =  $btc_arr->currency;
	            $datas['btc_last'] =  $btc_arr->last;
	            
	            
	            
	            
	            $datas['eth_currency'] =  $eth_arr->currency;
	            $datas['eth_last'] =  $eth_arr->last;
	            
	            
	            
	            $datas['xrp_currency'] =  $xrp_arr->currency;
	            $datas['xrp_last'] =  $xrp_arr->last;
	            
	            
	            
	            $datas['ltc_currency'] =  $ltc_arr->currency;
	            $datas['ltc_last'] =  $ltc_arr->last;
	            
	            
	            $datas['bch_currency'] =  $bch_arr->currency;
	            $datas['bch_last'] =  $bch_arr->last;
	            
	            
	            
	            $datas['pib_currency'] =  $pib_arr->currency;
	            $datas['pib_last'] =  $pib_arr->last;
	            
	            
	            $datas['exchange_name'] = "coinone";
	            //var_dump($datas);
	            return $datas;
	}
	
	function get_coinfield_info()
	{
	    $coinfield = 'https://api.coinfield.com/v1/tickers';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$coinfield);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    curl_close($curl_handle);
	    
	    $data = json_decode($query);
	    
	    $datas = array();
	    $datas['exchange_name'] = "coinfield";
	    
	    foreach ($data->markets as $list){
	        if($list->market == "btccad"){
	            $datas['btc_currency'] =  "btc";
	            $datas['btc_last'] =  $list->last;
	        }
	        
	        if($list->market == "ethcad"){
	            $datas['eth_currency'] =  "eth";
	            $datas['eth_last'] =  $list->last;
	        }
	        
	        if($list->market == "xrpcad"){
	            $datas['xrp_currency'] =  "xrp";
	            $datas['xrp_last'] =  $list->last;
	        }
	        
	        if($list->market == "ltccad"){
	            $datas['ltc_currency'] =  "ltc";
	            $datas['ltc_last'] =  $list->last;
	        }
	        
	        if($list->market == "bchcad"){
	            $datas['bch_currency'] =  "bch";
	            $datas['bch_last'] =  $list->last;
	        }
	        
	        if($list->market == "dashcad"){
	            $datas['dash_currency'] =  "dash";
	            $datas['dash_last'] =  $list->last;
	        }
	        
	    };
	    
	    return $datas;
	}
	
	
	function get_huobi_info()
	{
	    
	    $huobi = 'https://api.huobi.pro/market/tickers';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$huobi);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    curl_close($curl_handle);
	    
	    $data = json_decode($query);
	    
	    $datas = array();
	    
	    $datas['exchange_name'] = "huobi";
	    foreach ($data->data as $list){
	        
	        if($list->symbol == "btcusdt"){
	            $datas['btc_currency'] =  "btc";
	            $datas['btc_last'] =  $list->close;
	        }
	        
	        if($list->symbol == "ethusdt"){
	            $datas['eth_currency'] =  "eth";
	            $datas['eth_last'] =  $list->close;
	        }
	        
	        if($list->symbol == "xrpusdt"){
	            $datas['xrp_currency'] =  "xrp";
	            $datas['xrp_last'] =  $list->close;
	        }
	        
	        if($list->symbol == "dashusdt"){
	            $datas['dash_currency'] =  "dash";
	            $datas['dash_last'] =  $list->close;
	        }
	        
	        if($list->symbol == "bchusdt"){
	            $datas['bch_currency'] =  "bch";
	            $datas['bch_last'] =  $list->close;
	        }
	    };
	    
	    return $datas;
	}
	
	
	function get_upbit_info()
	{
	    $upbit_btc = 'https://api.upbit.com/v1/ticker?markets=KRW-BTC';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$upbit_btc);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    curl_close($curl_handle);
	    
	    $btc_data = json_decode($query);
	    
	    $datas = array();
	    
	    $datas['exchange_name'] = "upbit";
	    foreach ($btc_data as $list){	        
            $datas['btc_currency'] =  "btc";
            $datas['btc_last'] =  $list->trade_price;	        
	    };
	    
	    $upbit_eth = 'https://api.upbit.com/v1/ticker?markets=KRW-ETH';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$upbit_eth);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    curl_close($curl_handle);
	    
	    $eth_data = json_decode($query);
	    
	    foreach ($eth_data as $list){
            $datas['eth_currency'] =  "eth";
            $datas['eth_last'] =  $list->trade_price;
	    };
	    
	    $upbit_xrp = 'https://api.upbit.com/v1/ticker?markets=KRW-XRP';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$upbit_xrp);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    curl_close($curl_handle);
	    
	    $xrp_data = json_decode($query);
	    
	    foreach ($xrp_data as $list){	        
            $datas['xrp_currency'] =  "xrp";
            $datas['xrp_last'] =  $list->trade_price;	        
	    };
	    
	    $upbit_qtum = 'https://api.upbit.com/v1/ticker?markets=KRW-QTUM';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$upbit_qtum);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    curl_close($curl_handle);
	    
	    $qtum_data = json_decode($query);
	    
	    foreach ($qtum_data as $list){
	        if($list->market == "KRW-QTUM"){
	            $datas['qtum_currency'] =  "qtum";
	            $datas['qtum_last'] =  $list->trade_price;
	        }
	    };
	    
	    $upbit_snt = 'https://api.upbit.com/v1/ticker?markets=KRW-SNT';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$upbit_snt);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    curl_close($curl_handle);
	    
	    $snt_data = json_decode($query);
	    
	    foreach ($snt_data as $list){	        
            $datas['snt_currency'] =  "snt";
            $datas['snt_last'] =  $list->trade_price;	        
	    };
	    
	    return $datas;
	}

	function get_bithumb_info()
	{
	    
	    $bithumb_all = 'https://api.bithumb.com/public/ticker/all';
	    $datas = array();
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$bithumb_all);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    
	    curl_close($curl_handle);
	    
	    $all_data = json_decode($query);
	    $list = $all_data->data;
	    
	    $btc_arr = $list->BTC;
	    $eth_arr = $list->ETH;
	    $xrp_arr = $list->XRP;
	    
	    
	    
	    $datas['exchange_name'] = "bithumb";
	    $datas['btc_currency'] =  "btc";
	    $datas['btc_last'] =  $btc_arr->prev_closing_price;
	    
	    $datas['eth_currency'] =  "eth";
	    $datas['eth_last'] =  $eth_arr->prev_closing_price;
	    
	    $datas['xrp_currency'] =  "xrp";
	    $datas['xrp_last'] =  $xrp_arr->prev_closing_price;
	    
	    return $datas;
	}
	
	function get_bittrex_info(){
	    
	    $bittrex_btc = 'https://api.bittrex.com/api/v1.1/public/getticker?market=USD-BTC';
	    
	    $datas = array();
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$bittrex_btc);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    
	    curl_close($curl_handle);
	    $btc_data = json_decode($query);
	    
	    $list = $btc_data->result;
	    $datas['exchange_name'] = "bittrex";
	    $datas['btc_currency'] =  "btc";
	    $datas['btc_last'] =  $list->Last;
	    
	    $bittrex_eth = 'https://api.bittrex.com/api/v1.1/public/getticker?market=USD-ETH';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$bittrex_eth);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    
	    curl_close($curl_handle);
	    $eth_data = json_decode($query);
	    
	    $list = $eth_data->result;
	    $datas['eth_currency'] =  "eth";
	    $datas['eth_last'] =  $list->Last;
	    
	    
	    $bittrex_xrp = 'https://api.bittrex.com/api/v1.1/public/getticker?market=USD-XRP';
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$bittrex_xrp);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    
	    curl_close($curl_handle);
	    $xrp_data = json_decode($query);
	    
	    $list = $xrp_data->result;
	    $datas['xrp_currency'] =  "xrp";
	    $datas['xrp_last'] =  $list->Last;
	    
	    return $datas;
	    
	}
	
	function get_poloniex_info(){
	    
	    $poloniex_all = 'https://poloniex.com/public?command=returnTicker';
	    
	    $datas = array();
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$poloniex_all);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $query = curl_exec($curl_handle);
	    
	    curl_close($curl_handle);
	    $all_data = json_decode($query);
	    
	    $btc = $all_data->USDT_BTC;
	    $eth = $all_data->USDT_ETH;
	    $xrp = $all_data->USDT_XRP;
	    
	    $datas['exchange_name'] = "poloniex";
	    
	    if($btc != null){
	        $datas['btc_currency'] =  "btc";
	        $datas['btc_last'] =  $btc->last;
	    }
	    if($eth != null){
	        $datas['eth_currency'] =  "eth";
	        $datas['eth_last'] =  $eth->last;
	    }
	    if($xrp != null){
	        $datas['xrp_currency'] =  "xrp";
	        $datas['xrp_last'] =  $xrp->last;
	    }
	    
	    return $datas;
	    
	}
	
	function set_exchange_rate()
	{
	    
	    $exchange_url = 'https://free.currconv.com/api/v7/convert?q=cad_krw,usd_krw&compact=ultra&apiKey=1b2360cf16ac589201bc';
	    $datas = array();
	    
	    $curl_handle=curl_init();
	    curl_setopt($curl_handle, CURLOPT_URL,$exchange_url);
	    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
	    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
	    $exchange_query = curl_exec($curl_handle);
	    curl_close($curl_handle);
	    
	    $rate_info['data'] = json_decode($exchange_query);
	    
	    $this->load->model('Mains');
	    $this->Mains->set_exchange_rate($rate_info);
	    
	    return $datas;
	}
	
	function get_exchange_info()
	{
	    $this->load->model('Mains');
	    $data = $this->Mains->get_exchange_rate();
	    
	    return $data;
	}
	
}
