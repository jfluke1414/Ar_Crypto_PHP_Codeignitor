<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mfunctions extends CI_Model {

    function __construct(){
        parent::__construct();
		$this->load->database();
    }
    function get_coininfo_selected(){
        $this->db->select('currency, price, exchange_name, date(date) as date');
        
        $this->db->where('exchange_name', 'coinone');
        $this->db->or_where('exchange_name', 'upbit');
        $this->db->or_where('exchange_name', 'coinfield');
        
        if(!is_null($this->input->post('btc_count'))){
            $this->db->or_where('currency', 'btc');            
        }
        if(!is_null($this->input->post('eth_count'))){
            $this->db->or_where('currency', 'eth');            
        }
        if(!is_null($this->input->post('xrp_count'))){
            $this->db->or_where('currency', 'xrp');            
        }
        if(!is_null($this->input->post('ltc_count'))){
            $this->db->or_where('currency', 'ltc');
        }
        if(!is_null($this->input->post('bch_count'))){
            $this->db->or_where('currency', 'bch');
        }
        if(!is_null($this->input->post('dash_count'))){
            $this->db->or_where('currency', 'dash');
        }
        if(!is_null($this->input->post('pib_count'))){
            $this->db->or_where('currency', 'pib');
        }
        if(!is_null($this->input->post('qtum_count'))){
            $this->db->or_where('currency', 'qtum');
        }
        if(!is_null($this->input->post('snt_count'))){
            $this->db->or_where('currency', 'snt');
        }
	$query = $this->db->get('coin_info');
        return $query->result();
    }
}
