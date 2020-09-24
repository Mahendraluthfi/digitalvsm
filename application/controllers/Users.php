<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('vsm_epf'))) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['content'] = 'users';
		$data['get'] = $this->db->get('users')->result();
		$this->load->view('index', $data);
	}

	public function add(){
		$this->db->insert('users', array(
			'epf' => $this->input->post('epf'),
			'name' => $this->input->post('name'),
			'department' => $this->input->post('department'),
			'password' => md5($this->input->post('epf')),
		));

		redirect('users','refresh');
	}

	public function get($id)
	{
		$data = $this->db->get_where('users', array('id' => $id))->row();
		echo json_encode($data);
	}

	public function edit()
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('users', array(
			'epf' => $this->input->post('epf_edit'),
			'name' => $this->input->post('name_edit'),
			'department' => $this->input->post('department_edit')
		));

		redirect('users','refresh');
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');

		redirect('users','refresh');
	}

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */