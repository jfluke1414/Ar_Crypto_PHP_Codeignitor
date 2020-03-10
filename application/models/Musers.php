<?php  
// if (!defined('BASEPATH')) exit('No direct script access allowed');
defined('BASEPATH') OR exit('No direct script access allowed');

class Musers extends CI_Model {

    function __construct(){
        parent::__construct();
	$this->load->database();
    }
	
    function login_check(){
    	$username = $this->security->xss_clean($this->input->post('user_id'));
	$password = $this->security->xss_clean($this->input->post('user_pw'));		
	$ecryp_pw = sha1($password);	
            if(empty($username) || empty($password))
	        return false;		
		$this->db->where('user_id', $username);
		$this->db->where('user_pw', $ecryp_pw);
		$query = $this->db->get('user');
	
	    if($query->num_rows() == 1)
	    {
	        $row = $query->row();
		    $data = array(
		    'isuser' => true,
		    'user_id' => $row->user_id,
		    'user_name' => $row->user_name										
	        );
	    $this->session->set_userdata($data);
	    return true;
	}
	return false;
    }

    function add_users($ecryp_pw, $id, $name){	
	$this->db->set('user_id', $id);
	$this->db->set('user_pw', $ecryp_pw);
	$this->db->set('user_name', $name);		
	$this->db->set('regdate', 'NOW()', FALSE);	
	$this->db->insert('user');
    }	
	
    function check_users(){
	$id = $this->input->post('user_id');
	$this->db->where('user_id', $id);	
	$query = $this->db->get('user');
	return $query->result();		
    }
	
    function get_users(){	
	$name = $this->input->post('findid_user_name');
	$email = $this->input->post('findid_user_email');
		
	$this->db->where('name', $name);
	$this->db->where('email', $email);			
	$query = $this->db->get('user');
	return $query->result();		
    }	
	
    function get_pw_user($name, $id){
        $this->db->where('name', $name);
	$this->db->where('id', $id);
	$query = $this->db->get('user');
	return $query->result();		
    }	
	
    function user_update_pw($id, $ecryp_pw){
    	$this->db->where('id', $id);
    	$data = array('pw' => $ecryp_pw);
	$query = $this->db->update('user', $data);
    }	
	
    function update_userInfo($ecryp_pw){
    	$id = $this->input->post("user_id");
	$email = $this->input->post("user_email");
	$phone = $this->input->post("user_phone");
		
    	$this->db->where('id', $id);
    	$data = array(
    	    'pw' => $ecryp_pw,
    	    'email' => $email,
    	    'phone' => $phone
    	);
	$query = $this->db->update('user', $data);
    }
	
    function get_coin_kind(){
        $query = $this->db->get('coin_kind');
        return $query->result();
    }
    
    function get_ex_kind(){
        $query = $this->db->get('exchanges');
        return $query->result();
    }
    
    function get_userInfo($id){	    
	$this->db->where('id', $id);		
	$query = $this->db->get('user');
	return $query->result();		
    }

    function delete_userInfo($id){
	$this->db->where('id', $id);
	$this->db->delete('user');
    }

    function save_request(){    	
    	$partner_name = $this->input->post("partner_name");
    	$user_name = $this->input->post("user_name");
    	$phone = $this->input->post("user_phone");
	$email = $this->input->post("user_email");
	$content = $this->input->post("request_textarea");
		
	$this->db->set('partner', $partner_name);
	$this->db->set('name', $user_name);
	$this->db->set('email', $email);
	$this->db->set('phone', $phone);
	$this->db->set('contents', $content);
	$this->db->set('regdate', 'NOW()', FALSE);
	$this->db->insert('request');
    }
    
    function save_user_coin(){
        $user_id = $this->session->userdata('user_id');
        $btc_count = $this->input->post('btc_count');
        $eth_count = $this->input->post('eth_count');
        $xrp_count = $this->input->post('xrp_count');
        $ltc_count = $this->input->post('ltc_count');
        $bch_count = $this->input->post('bch_count');
        $dash_count = $this->input->post('dash_count');
        $pib_count = $this->input->post('pib_count');
        $qtum_count = $this->input->post('qtum_count');
        $snt_count = $this->input->post('snt_count');

        $this->db->set('user_id', $user_id);
        $this->db->set('btc_count', $btc_count);
        $this->db->set('eth_count', $eth_count);
        $this->db->set('xrp_count', $xrp_count);
        $this->db->set('ltc_count', $ltc_count);
        $this->db->set('bch_count', $bch_count);
        $this->db->set('dash_count', $dash_count);
        $this->db->set('pib_count', $pib_count);
        $this->db->set('qtum_count', $qtum_count);
        $this->db->set('snt_count', $snt_count);        
        $this->db->insert('user_coin');        
    }
    
    function change_user_coin(){        
        $user_id = $this->session->userdata('user_id');
        $btc_count = $this->input->post('btc_count');
        $eth_count = $this->input->post('eth_count');
        $xrp_count = $this->input->post('xrp_count');
        $ltc_count = $this->input->post('ltc_count');
        $bch_count = $this->input->post('bch_count');
        $dash_count = $this->input->post('dash_count');
        $pib_count = $this->input->post('pib_count');
        $qtum_count = $this->input->post('qtum_count');
        $snt_count = $this->input->post('snt_count');
        
        $data = array(
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
        $this->db->where('user_id', $user_id);
        $this->db->update('user_coin', $data);
    }
    
    function user_coin_chk(){        
        $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user_coin');        
        return $query->result();
    }
    
    function get_user_coin(){        
        $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('user_coin');        
        return $query->result();
    }

    function paid_info($id){		
	$this->db->where('userid', $id);
	$this->db->where('resultcode', '00');
	$query = $this->db->get('pay');		
	return $query->result();		
    }
}
