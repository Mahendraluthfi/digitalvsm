<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('vsm_epf'))) {
			redirect('login','refresh');
		}
		$this->load->model('Minventory');
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

	public function item()
	{
		$data['content'] = 'item';
		$data['get'] = $this->db->get('item')->result();
		$get = $this->Minventory->dist_item()->result();
		foreach ($get as $key => $value) {
			$value->arrayitem = $this->db->get_where('have_item',array('department' => $value->dpt))->result();
		}
		$data['get2'] = $get;
		$this->load->view('index', $data);
	}

	public function add_item()
	{
		$this->db->insert('item', array('item' => strtoupper($this->input->post('item'))));
		redirect('users/item','refresh');
	}

	public function del_item($id)
	{
		$this->db->where('id_item', $id);
		$this->db->delete('item');
		redirect('users/item','refresh');
	}

	public function item_has()
	{
		$this->db->insert('have_item', array(
			'department' => $this->input->post('department'),
			'item' => $this->input->post('item'),
		));

		redirect('users/item','refresh');
	}

	public function del_have_item($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('have_item');
		redirect('users/item','refresh');
	}
}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */