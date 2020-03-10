<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends Crypto_Controller {

	public function __construct(){
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

	public function write(){
           $this->_login_chk();
	   $this->load->view('/manage/write_view');
	}
	
	public function _login_chk(){		
	   if(!$this->session->userdata('isadmin')){
	   	redirect('/Manage','location');
		return true;
	   }
	}
	
	function login_end(){
	   Header("Content-type: text/html; charset=UTF-8");
		
	   // Load the model
	   $this->load->model('Manages');
	   // Validate the user can login
	   $result = $this->Manages->login_check();
		
	   // Now we verify the result
	   if(! $result){
		// If user did not validate, then show them login page again
		$msg = ".";
		echo("<script>alert('$msg');history.back();</script>");
		exit;
	   } else {
		// If user did validate, 
		// Send them to members area
		redirect('/Manage/news_lists','location');
	   }
	}
	
	public function logout(){
	   $this->session->sess_destroy();
	   redirect('/Manage', 'location');
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
	
	public function save_inquiry_modified(){				
	   $this->load->model('Manages');
	   $this->Manages->edit_inquiry();

	   $msg = ".";
	   echo json_encode(array('status' => 'success', 'message' => $msg));
	   exit;
	}	
	
	public function del_rel(){
	   $id = $this->input->post('post_id');
	
	   $this->load->model('Manages');
	   $this->Manages->del_rel($id);
		
	   $msg="Delete completed";
	   echo json_encode(array('status' => 'success','message'=> $msg));
	   exit;
	}

	public function del_inquiry(){
	   $id = $this->input->post('post_id');
		
	   $this->load->model('Manages');
	   $this->Manages->del_inquiry($id);
		
	   $msg="Delete completed";
	   echo json_encode(array('status' => 'success','message'=> $msg));
	   exit;
	}	
    }
