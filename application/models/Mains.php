<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mains extends CI_Model {

    function __construct(){
        parent::__construct();
	$this->load->database();
    }
    
    function set_coin_data($data){	
	$mas_id = null;
	$max = null;
        
        $this->db->select_max('id');
        $this->db->where('exchange_name', $data['exchange_name']);
        $query = $this->db->get('coin_info');
        foreach($query->result() as $ids){
            $max = $ids->id;
            $max_id = $max + 1;
        }
        
        if(empty($data['btc_currency'])){
            return false;
        } else {
            if(!empty($data['btc_currency'])){
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['btc_currency']);
                $this->db->set('price', $data['btc_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }            
            if(!empty($data['eth_currency'])){                
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['eth_currency']);
                $this->db->set('price', $data['eth_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }            
            if(!empty($data['xrp_currency'])){
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['xrp_currency']);
                $this->db->set('price', $data['xrp_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }            
            if(!empty($data['ltc_currency'])){
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['ltc_currency']);
                $this->db->set('price', $data['ltc_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }            
            if(!empty($data['bch_currency'])){
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['bch_currency']);
                $this->db->set('price', $data['bch_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }            
            if(!empty($data['dash_currency'])){
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['dash_currency']);
                $this->db->set('price', $data['dash_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }            
            if(!empty($data['pib_currency'])){
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['pib_currency']);
                $this->db->set('price', $data['pib_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }            
            if(!empty($data['qtum_currency'])){             
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['qtum_currency']);
                $this->db->set('price', $data['qtum_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }            
            if(!empty($data['snt_currency'])){
                $this->db->set('id', $max_id);
                $this->db->set('currency', $data['snt_currency']);
                $this->db->set('price', $data['snt_last']);
                $this->db->set('exchange_name', $data['exchange_name']);
                $this->db->set('date', 'NOW()', FALSE);
                $this->db->insert('coin_info');
            }
            return true;
        }		
    }

    function set_exchange_rate($data){	
	$this->db->empty_table('exchange_rate');
	foreach($data as $list){	
	    $this->db->where('currency', 'usd_krw');
	    $this->db->where('currency', 'cad_krw');
	    $this->db->delete('coin_info');

	    $this->db->set('currency', 'usd_krw');
	    $this->db->set('rate', $list->USD_KRW);
	    $this->db->set('date', 'Now()', FALSE);
	    $this->db->insert('exchange_rate');
		
	    $this->db->set('currency', 'cad_krw');
	    $this->db->set('rate', $list->CAD_KRW);
	    $this->db->set('date', 'Now()', FALSE);
	    $this->db->insert('exchange_rate');
	}		
    }
	
    function get_exchange_rate(){
	$this->db->select('currency, rate, date(date) as date');    	
	$query = $this->db->get('exchange_rate');
        return $query->result();
    }	

    function get_coin_data($ex_name){
        $q = 'SELECT * FROM coin_info WHERE exchange_name = "'.$ex_name.'" AND id = (SELECT MAX(id) FROM coin_info WHERE exchange_name = "'.$ex_name.'") ORDER BY DATE DESC';
        $query = $this->db->query($q);

        return $query->result();
    }	
}
