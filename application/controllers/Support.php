<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends Crypto_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('captcha');		
	}
	
	public function index()
	{		
// 		$url = base_url();
// 		$captcha_word = rand(23678190, 96523469);
		
// 		$captcha = array(
// 			'word'   => $captcha_word,
// 			'img_path'  => './captcha/',
// 			'img_url'  => ''.base_url().'captcha/',			
// 			'img_width'  => '160',
// 			'img_height'  => '40',
// 			'expiration'  => '3600'
// 		);
		
// 		$data['captcha'] = create_captcha($captcha);
// 		$sessi_cap = $data['captcha']['word'];
		
// 		$this->session->set_userdata('captchaword', $sessi_cap);
		
// 		$this->load->view('support_view', $data);	
// 		$this->_footer();

	    echo("<script>alert('Sorry, Coming soon.');history.back();</script>");
	}
	
	
	public function remake_captcha()
	{

		$url = base_url();
		$captcha_word = rand(23678190, 96523469);
		
		$captcha = array(
			'word'   => $captcha_word,
			'img_path'  => './captcha/',
			'img_url'  => ''.base_url().'captcha/',			
			'img_width'  => '160',
			'img_height'  => '40',
			'expiration'  => '3600'
		);
		
		$data['captcha'] = create_captcha($captcha);
		$sessi_cap = $data['captcha']['word'];
		$cap_image = $data['captcha']['image'];
		
		$this->session->set_userdata('captchaword', $sessi_cap);
		
		
		echo json_encode(array('status' => 'success', 'data'=> $cap_image));
		exit;

	}
	
	
	public function request()
	{
		$securekey = $this->input->post("captcha_txt");
		
    	$phone = $this->input->post('phone');    	
    	$consult_chx = $this->input->post('consult_chx');
    	$demo_chx = $this->input->post('demo_chx');
    	$partner_chx = $this->input->post('partner_chx');
    	

    	if($securekey == '' || $securekey == ' �솻洹ｋ샍�뇡�쉮�닱筌뤾쑴�겱占쎈ご�뜝占� �뜝�럩肉��뜝�럩�졑�뜝�럥�돵 �썒�슣�닔�땻占썲뜝�럩�뭵.'){
			echo("<script>alert('�솻洹ｋ샍�뇡占� 占쎈닱筌뤾쑴�겱占쎈ご�뜝占� �뜝�럩�꼪�뜝�럩逾ε뜝�럥�돵 �썒�슣�닔�땻占썲뜝�럩�뭵.');history.back();</script>");
			return false;
		}
    	
    	$captchaword = $this->session->userdata('captchaword');
		$captcha_txt = $this->input->post('captcha_txt');

		if($captchaword != $captcha_txt)
		{
			$msg = "�솻洹ｋ샍�뇡�쉮援쒒겫�뼔援→뤆�룊�삕 �뜝�룞�삕占쎈뎨占쎈윥占쎈퉵�뜝�럥堉�. �솻洹ｋ샍�뇡�쉮援쒒겫�뼔援∽옙紐닷뜝占� �뜝�럩�꼪�뜝�럩逾ε뜝�럥�돵 �썒�슣�닔�땻占썲뜝�럩�뭵";
			echo("<script>alert('$msg');</script>");
			echo("<script>location.href='/Support';</script>");
			exit;
		}
		else
		{
			$this->load->library('session');
			$this->session->set_userdata("captcha_ok", "true");
		}

    	
    	if($consult_chx==null ? $consult_chx = 0:$consult_chx = 1);
    	if($demo_chx==null ? $demo_chx = 0:$demo_chx = 1);
    	if($partner_chx==null ? $partner_chx = 0:$partner_chx = 1);

		$this->load->library('encrypt');
    	$encrypt_phone = $this->encrypt->encode($phone);
    	
    	
    	$data['phone'] = $encrypt_phone;
    	$data['consult_chx'] = $consult_chx;
    	$data['demo_chx'] = $demo_chx;
    	$data['partner_chx'] = $partner_chx;
    	
    	$this->load->model('Requests');
    	$this->Requests->save_request($data);
		
		$msg = "占쎈닱筌뤾쑴踰� �뜝�럩�뭵嶺뚳퐦�삕 �뜝�럩�걦占쎈쇀占쎌뒧�뵳釉앹삕�굢占썲뜝�럥裕멨뜝�럥鍮띶뜝�럥堉�.";
		echo("<script>alert('$msg');</script>");
		echo("<script>location.href='/main';</script>");
	}
}

