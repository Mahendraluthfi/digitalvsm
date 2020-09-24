<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('vsm_epf'))) {
			redirect('login','refresh');
		}
	}
	
	public function index()
	{
		$data['content'] = 'dashboard';
		$this->load->view('index', $data);
	}
	
}
