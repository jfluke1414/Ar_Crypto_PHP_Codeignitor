<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends Crypto_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->library('session');
		$this->_manageheader();
	}

	public function index(){
		
		if($this->session->userdata('isadmin') == true){
			$this->_news_list();
		} else {
			$this->load->view('/manage/login_view');
			
		}

		
	}

	public function write()
	{
		$this->_login_chk();
		$this->load->view('/manage/write_view');
	}
	
	public function inquiry()
	{
		$this->_login_chk();
		$this->load->view('/manage/inquiry_view');
	}
	
	public function news_lists()
	{
		$this->_news_list();
		
	}
	
	public function inquiry_lists()
	{
		$this->_inquiry_list();
		
	}
	
	
	public function make_news(){
		
		$this->load->model('Manages');
		$this->Manages->save_news();
		
		
		$msg = "�돱�뒪媛� �벑濡� �릺�뿀�뒿�땲�떎.";
		echo("<script>alert('$msg');</script>");
		echo("<script>location.href='/manage/write';</script>");
			
	}
	
	public function make_inquiry(){
		
		$this->load->model('Manages');
		$this->Manages->save_inquiry();
		
		$msg = "�씠�슜臾몄쓽媛� �벑濡� �릺�뿀�뒿�땲�떎.";
		echo("<script>alert('$msg');</script>");
		echo("<script>location.href='/manage/inquiry';</script>");
			
	}
	
	public function _news_list()
	{	
		$this->_login_chk();
		
		$id = $this->input->get('list_id');
		$data['notice_id'] = $id;
		$this->load->model('Notices');

		$pagenum = $this->uri->segment(3, 1);	//�럹�씠吏� 踰덊샇
		$outcnt = '5';							//由ъ뒪�듃 異쒕젰 媛��닔
		
		$params = array();
		$params['outcnt'] = $outcnt;
		$params['pagenum'] = $pagenum;
		$params['call'] = true;
		
		$result = $this->Notices->news_list($params);
		$data['results'] = $result;
		
		$allcnt = $this->Notices->news_count_all();
			
		$data['allcnt'] = $allcnt;
		$data['pagenum'] = $pagenum;
		$data['outcnt'] = $outcnt;
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Manage/news_lists';
		$config['total_rows'] = $allcnt;
		$config['per_page'] = $outcnt;
		$config['num_links'] = '4';
		$config['uri_segment'] = '3';
		$config['use_page_numbers'] = TRUE;
	
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$config['prev_link'] = '<img src="/assets/images/icon_left.png" width="25" height="25" alt="" style="vertical-align: middle;">';
		$config['next_link'] = '<img src="/assets/images/icon_right.png" width="25" height="25" alt="" style="vertical-align: middle;">';
		
		
		$this->pagination->initialize($config);
				
		$this->load->view('/manage/newsList_view', $data);	
		
	}
	
	
	public function _inquiry_list()
	{	
		$this->_login_chk();
		
		$id = $this->input->get('list_id');
		$data['notice_id'] = $id;
		$this->load->model('Notices');

		$pagenum = $this->uri->segment(3, 1);	//�럹�씠吏� 踰덊샇
		$outcnt = '5';							//由ъ뒪�듃 異쒕젰 媛��닔
		
		$params = array();
		$params['outcnt'] = $outcnt;
		$params['pagenum'] = $pagenum;
		$params['call'] = true;
		
		$result = $this->Notices->inquiry_list($params);
		$data['results'] = $result;
		
		$allcnt = $this->Notices->inquiry_count_all();
			
		$data['allcnt'] = $allcnt;
		$data['pagenum'] = $pagenum;
		$data['outcnt'] = $outcnt;
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Manage/inquiry_lists';
		$config['total_rows'] = $allcnt;
		$config['per_page'] = $outcnt;
		$config['num_links'] = '4';
		$config['uri_segment'] = '3';
		$config['use_page_numbers'] = TRUE;
	
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$config['prev_link'] = '<img src="/assets/images/icon_left.png" width="25" height="25" alt="" style="vertical-align: middle;">';
		$config['next_link'] = '<img src="/assets/images/icon_right.png" width="25" height="25" alt="" style="vertical-align: middle;">';
		
		
		$this->pagination->initialize($config);
				
		$this->load->view('/manage/inquiryList_view', $data);	
		
	}
	
	public function _login_chk()
	{
		//留뚯빟 鍮꾨줈洹몄씤�씠硫� 濡쒓렇�씤�럹�씠吏�濡� �씠�룞�떆�궡	
		if(!$this->session->userdata('isadmin'))
		{
			redirect('/Manage','location');
			return true;
		}
	}
	
	function login_end()
	{
		Header("Content-type: text/html; charset=UTF-8");
		
		// Load the model
		$this->load->model('Manages');
		// Validate the user can login
		$result = $this->Manages->login_check();
		
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = "�븘�씠�뵒 �샊�� 鍮꾨�踰덊샇媛� �씪移섑븯吏� �븡�뒿�땲�떎.";
			echo("
			<script>
			alert('$msg');
			history.back();
			</script>
			");
			exit;
		}else{
			// If user did validate, 
			// Send them to members area
			redirect('/Manage/news_lists','location');
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/Manage', 'location');
	}
	
	
	public function admin_edit_news(){
		

		$id = $this->input->post('post_id');
		
		$this->load->model('Manages');
		$result = $this->Manages->get_news($id);
	
		foreach($result as $list){
			$id = $list->id;
			$title = $list->title;
			$content = $list->contents;

		}

		echo json_encode(array('status' => 'success', 'id' => $id, 'title' => $title, 'content' => $content));
		exit;
		
	}
	
	public function admin_edit_inquiry(){
		

		$id = $this->input->post('post_id');
		
		$this->load->model('Manages');
		$result = $this->Manages->get_inquiry($id);
	
		foreach($result as $list){
			$id = $list->id;
			$title = $list->title;
			$content = $list->contents;

		}

		echo json_encode(array('status' => 'success', 'id' => $id, 'title' => $title, 'content' => $content));
		exit;
		
	}	
	
	
	
	public function save_news_modified(){
				
		$this->load->model('Manages');
		$this->Manages->edit_news();

		$msg = "�돱�뒪媛� �닔�젙 �릺�뿀�뒿�땲�떎.";
		echo json_encode(array('status' => 'success', 'message' => $msg));
		exit;

	}
	
	public function save_inquiry_modified(){
				
		$this->load->model('Manages');
		$this->Manages->edit_inquiry();

		$msg = "�씠�슜臾몄쓽媛� �닔�젙 �릺�뿀�뒿�땲�떎.";
		echo json_encode(array('status' => 'success', 'message' => $msg));
		exit;

	}	
	
	
	public function del_rel()
	{

		$id = $this->input->post('post_id');
		
		$this->load->model('Manages');
		$this->Manages->del_rel($id);
		
		$msg="Delete completed";
		echo json_encode(array('status' => 'success','message'=> $msg));
		exit;
	}
	

	public function del_inquiry()
	{

		$id = $this->input->post('post_id');
		
		$this->load->model('Manages');
		$this->Manages->del_inquiry($id);
		
		$msg="Delete completed";
		echo json_encode(array('status' => 'success','message'=> $msg));
		exit;
	}
	
	
	
}
