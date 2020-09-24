<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (empty($this->session->userdata('vsm_epf'))) {
			redirect('login','refresh');
		}
	}	


	public function index()
	{
		$data['content'] = 'information';
		$data['get'] = $this->db->get('main_info')->result();		
		$this->load->view('index', $data);
	}

	public function add($id)
	{
		$who = $this->session->userdata('vsm_department');
		$data['info'] = $this->db->get_where('information', array('from_who' => $this->session->userdata('vsm_department'), 'id_main' => $id))->result();
		$data['totaltime'] = $this->db->query("SELECT sum(lead_time) as total FROM information WHERE id_main ='$id' AND from_who = '$who'")->row();
		$data['get'] = $this->db->get_where('main_info', array('id' => $id))->row();
		$data['content'] = 'information_add';
		$this->load->view('index', $data);
	}

	public function get($id)
	{
		$data = $this->db->get_where('information', array('id'=> $id))->row();
		echo json_encode($data);
	}

	public function save($id)
	{
		$this->db->insert('information', array(
			'id_main' => $id,
			'information' => $this->input->post('information'),
			'from_who' => $this->session->userdata('vsm_department'),
			'to_who' => $this->input->post('to_who'),
			'type' => $this->input->post('type'),
			'lead_time' => $this->input->post('lead_time'),
		));

		redirect('information/add/'.$id,'refresh');
	}

	public function edit($id,$style)
	{
		$this->db->where('id', $id);
		$this->db->update('information', array(
			'information' => $this->input->post('information'),
			'from_who' => $this->session->userdata('vsm_department'),
			'to_who' => $this->input->post('to_who'),
			'type' => $this->input->post('type'),
			'lead_time' => $this->input->post('lead_time'),
		));

		redirect('information/add/'.$style,'refresh');
	}

	public function delete($id,$style)
	{
		$this->db->where('id', $id);
		$this->db->delete('information');

		redirect('information/add/'.$style,'refresh');		
	}

}

/* End of file Information.php */
/* Location: ./application/controllers/Information.php */