<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('vsm_epf'))) {
			redirect('login','refresh');
		}
		// $this->load->model('Minventory');
	}	

	public function index()
	{
		$data['content'] = 'change_password';
		$this->load->view('index', $data);
	}

}

/* End of file Config.php */
/* Location: ./application/controllers/Config.php */