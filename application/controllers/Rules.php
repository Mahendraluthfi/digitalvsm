<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('vsm_epf'))) {
			redirect('login','refresh');
		}
	}	

	public function index()
	{
		$data['content'] = 'rules';		
		$data['get'] = $this->db->get('rules')->result();		
		$this->load->view('index', $data);
	}

	public function get($id)
	{
		$data = $this->db->get_where('rules', array('id' => $id))->row();
		echo json_encode($data);
	}

	public function save()
	{
		$this->db->insert('rules', array(
			'department' => $this->input->post('department'),
			'type' => $this->input->post('type'),
			'point_name' => $this->input->post('point_name'),
		));

		redirect('rules','refresh');
	}

	public function edit($id)
	{
		$this->db->where('id', $id);
		$this->db->update('rules', array(
			'department' => $this->input->post('department'),
			'type' => $this->input->post('type'),
			'point_name' => $this->input->post('point_name'),
		));

		redirect('rules','refresh');
	}

}

/* End of file Rules.php */
/* Location: ./application/controllers/Rules.php */