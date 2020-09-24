<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('vsm_epf'))) {
			redirect('login','refresh');
		}
	}	

	public function index()
	{
		$data['content'] = 'maininformation';
		$data['get'] = $this->db->get('main_info')->result();
		$this->load->view('index', $data);
	}

	public function add()
	{
		$this->db->insert('main_info', array(
			'style_no' => $this->input->post('style'),
			'product' => $this->input->post('product'),
			'customer' => $this->input->post('customer'),
		));

		redirect('main','refresh');
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */