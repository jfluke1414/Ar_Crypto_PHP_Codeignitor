<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
// if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends Crypto_Controller {

    public function __construct(){
        parent::__construct();
        $this->_header();
        $this->_header_dialog();
        $this->load->library('email');
    }

    public function login(){
        $this->load->view("login_view");
        $this->_footer();	
    }

    function login_end(){	  
        $username = $this->security->xss_clean($this->input->post('user_id'));
        $password = $this->security->xss_clean($this->input->post('user_pw'));   
        $this->load->model('Musers');
        $result = $this->Musers->login_check($username, $password);	    

        echo json_encode(array('status' => 'success', 'message' => 'ss', 'data' => $result));	    
        exit;
    }

    public function save_userInfo(){        
        $user_pw = $this->input->post('user_pw');
        $user_id = $this->input->post('user_id');
        $user_name = $this->input->post('user_name');

        $this->load->model('Musers');
        $results = $this->Musers->check_users();
        
        if($results){
            $msg = "This ID exist";
            json_encode(array('status' => 'fail', 'message' => $msg, 'data' => $result));
            exit;
        }
        $ecryp_pw = sha1($user_pw);        
        $this->Musers->add_users($ecryp_pw, $user_id, $user_name);                
        $msg = "Complete sign up. OK";
        echo json_encode(array('status' => 'success', 'message' => $msg));
        exit;        
    }
    
    function save_data_selected_ajax(){
        $this->load->model("Musers");
        
        $result = $this->Musers->user_coin_chk();

        if($result){
            $this->Musers->change_user_coin();
            $msg = "updated.";
        } else {
            $this->Musers->save_user_coin();
            $msg = "saved.";
        }
        echo json_encode(array('status' => 'success', 'message' => $msg));
        exit;        
    }
	
    function get_user_setting(){        
        $this->load->model('Musers');
        $kinds = $this->Musers->get_coin_kind();
        
        $data = array();
        $ex_data = array();        
        $ex_coin = array();        
        $ex_kinds = $this->Musers->get_ex_kind();        
        $ar_num=0;
        
        foreach($kinds as $a => $kind){
            $data[$a] = $kind->coin_name;            
            foreach($ex_kinds as $k => $ex_kind){
                if($ex_kind->coin == $kind->coin_name ){
                    $ex_coin[$kind->coin_name][$ar_num] = $ex_kind->exchange;
                    $ar_num++;
                }
            }
            $ex_data = $ex_coin;
            $ar_num=0;
        }
        echo json_encode(array('status' => 'success','message' => 'aaa','coin_kind' => $data,'ex_kind' => $ex_data));
        exit;
    }
	
    public function find_userInfo(){			
	$this->load->model('users');
	$result = $this->users->get_users();
		
	if(!$result){
		$msg = ".";
		echo("<script>alert('$msg');history.back();</script>");
		exit;
	}
	$data['results'] = $result;	
	$this->load->view("find_complete_id_view", $data);			
    }

    public function find_pwInfo(){		
	$id = $this->input->post('findpw_user_id');
	$name = $this->input->post('findpw_user_name');	
	if($id == null || $name == null){
	    $msg = ".";
	    echo("<script>alert('$msg');history.back();</script>");
	    exit;
	}		
	$this->load->model('users');
	$results = $this->users->get_pw_user($name, $id);
		
	if(!$results){
	    $msg = ".";
	    echo("<script>alert('$msg');history.back();</script>");
	    exit;
	}
		
	foreach($results as $list){}
	$code = "";
	for ($i=1;$i<=8;$i++ ) { // make random num
	    $code .= substr('1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', rand(0,61), 1);
	}
	$data['code'] = $code;
	$data['name'] = $name;
		
	$config = array (
	    'mailtype' => 'html',
	    'charset'  => 'utf-8',
	    'priority' => '1'
        );

        $ecryp_pw = sha1($code);
	$this->load->model('users');
	$this->users->user_update_pw($id, $ecryp_pw);         
        $this->email->initialize($config);
	$main_content = $this->load->view('/email_form', $data, true);
	$this->email->from( 'safesite@jiran.com', 'Jiransoft');
	$this->email->to($list->email);
	$this->email->subject('Safesite Temporary Password');
	$this->email->message($main_content);	
	$this->email->send();
	    $data = array(
		'name' => $name
	    );		
	$this->load->view("find_complete_pw_view", $data);
    }
		
    public function manage_userInfo(){	
        id = $this->session->userdata("user_id");

	$this->load->model('users');
	$result = $this->users->get_userInfo($id);
	$data['results'] = $result;
		
	$this->load->view("edit_join_view", $data);
	$this->_footer();
    }
	
	
    public function logout(){
        $this->session->sess_destroy();
        redirect("/", 'location');		
    }
	
    public function logout_ajax(){
        $this->session->sess_destroy();	    
        $msg="Loged out";
        echo json_encode(array('status' => 'success', 'message' => $msg));
        exit;
    }
	
	
    public function edit_userInfo(){		
    	$pw = $this->input->post("user_pw1");		
	$ecryp_pw = sha1($pw);
	$this->load->model('users');
	$this->users->update_userInfo($ecryp_pw);
		
	$msg = ".";
	echo("<script>alert('$msg');</script>");
	echo("<script>location.href='/main';</script>");
		
    }
	
    public function delete_user(){			
	$id = $this->session->userdata("user_id");
	$this->load->model('users');
	
	$is_paid = $this->users->paid_info($id);
            if (!empty ($is_paid[0]->url) && date("Ymd") < date("Ymd", strtotime("+" . $is_paid[0]->term . " month", strtotime($is_paid[0]->regdate)))) {
	    	$msg = ".";
		echo "<script>alert('$msg');</script>";
		echo("<script>location.href='/user/manage_userInfo';</script>");
		exit;
	    }			
        $this->users->delete_userInfo($id);
		
        $msg = ".";
        echo("<script>alert('$msg');</script>");
        $this->session->sess_destroy();
        echo("<script>location.href='/main';</script>");
    }

	
    public function check_captcha(){		
        $captchaword = $this->session->userdata('captchaword');
	$captcha_txt = $this->input->post('captcha');
		
	if($captchaword != $captcha_txt){
	    echo "false";	
	} else {
            echo "true";
	}
        exit;		
    }
		
    public function request_Info(){	
        if(!$this->session->userdata('user_id')){
	$captchaword = $this->session->userdata('captchaword');
	$captcha_txt = $this->input->post('captcha_txt');
	
	    if($captchaword != $captcha_txt){
	        $msg = "";
	        echo("<script>alert('$msg');history.back();</script>");
	        exit;
	    } else {
	        $this->load->library('session');
	        $this->session->set_userdata("captcha_ok", "true");
	    }
		
        }

	$this->load->model('users');
	$result = $this->users->save_request();
	
	$msg = ".";
	echo("<script>alert('$msg');</script>");
	echo("<script>location.href='/main';</script>");
    }
}
