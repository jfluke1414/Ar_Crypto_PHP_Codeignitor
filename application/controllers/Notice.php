<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends Crypto_Controller {

	public function __construct()
	{
		parent::__construct();		
	}
	
	public function Notice_1()
	{		
		
		$id = $this->input->get('list_id');
		$data['notice_id'] = $id;
		$this->load->model('Notices');

		$pagenum = $this->uri->segment(3, 1);	//占쎈읂占쎌뵠筌욑옙 甕곕뜇�깈
		$outcnt = '5';							//�뵳�딅뮞占쎈뱜 �빊�뮆�젾 揶쏉옙占쎈땾
		
		$params = array();
		$params['outcnt'] = $outcnt;
		$params['pagenum'] = $pagenum;
		$params['call'] = true;
		
		$result = $this->Notices->request_list($params);
		$data['results'] = $result;
		
		$allcnt = $this->Notices->request_count_all();
			
		$data['allcnt'] = $allcnt;
		$data['pagenum'] = $pagenum;
		$data['outcnt'] = $outcnt;
		
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Notice/Notice_1';
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
		
		$this->load->view('notice01_view', $data);	
		$this->_footer();
	}
	
	public function Notice_2()
	{		
		
		
		$id = $this->input->get('list_id');
		$data['notice_id'] = $id;
		$this->load->model('Notices');

		$pagenum = $this->uri->segment(3, 1);	//占쎈읂占쎌뵠筌욑옙 甕곕뜇�깈
		$outcnt = '5';							//�뵳�딅뮞占쎈뱜 �빊�뮆�젾 揶쏉옙占쎈땾
		
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
		$config['base_url'] = base_url().'Notice/Notice_2';
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
		
		$this->load->view('notice02_view', $data);	
		$this->_footer();
	
	}
	
	
	public function security_news()
	{
		
		
	}
	
}

