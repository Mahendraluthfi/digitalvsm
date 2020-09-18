<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['content'] = 'users';
		$data['get'] = $this->db->get('users')->result();
		$this->load->view('index', $data);
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */