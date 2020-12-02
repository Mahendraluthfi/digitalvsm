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
			'cons' => $this->input->post('cons'),
			'takttime' => $this->input->post('takttime'),
			'cust_demand' => $this->input->post('cust_demand'),
			'psd' => $this->input->post('psd'),
			'ped' => $this->input->post('ped'),
		));

		$get = $this->db->query("SELECT MAX(id) as id_max FROM main_info")->row();
		$this->insertquestion($get->id_max);

		echo json_encode(array('status' => TRUE));
	}

	public function edit($id)
	{
		$this->db->where('id', $id);
		$this->db->update('main_info', array(
			'style_no' => $this->input->post('style'),
			'product' => $this->input->post('product'),
			'customer' => $this->input->post('customer'),
			'cons' => $this->input->post('cons'),
			'takttime' => $this->input->post('takttime'),
			'cust_demand' => $this->input->post('cust_demand'),
			'psd' => $this->input->post('psd'),
			'ped' => $this->input->post('ped'),
		));

		echo json_encode(array('status' => TRUE));
	}

	public function get($id)
	{
		$data = $this->db->get_where('main_info', array('id' => $id))->row();
		echo json_encode($data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('main_info');

		redirect('main','refresh');
	}

	public function insertquestion($id)
	{
		$this->db->insert('q_laying', array(
			'id_style' => $id
		));
		$this->db->insert('q_molding', array(
			'id_style' => $id
		));
		$this->db->insert('q_assorting', array(
			'id_style' => $id
		));
		$this->db->insert('q_handcut', array(
			'id_style' => $id
		));
		$this->db->insert('q_autocutter', array(
			'id_style' => $id
		));
		$this->db->insert('q_bandknife', array(
			'id_style' => $id
		));
		$this->db->insert('q_unloading', array(
			'id_style' => $id
		));
		$this->db->insert('q_fabricstorage', array(
			'id_style' => $id
		));
		$this->db->insert('q_fg', array(
			'id_style' => $id
		));
		$this->db->insert('q_ctex', array(
			'id_style' => $id
		));
		$this->db->insert('q_aqlcut', array(
			'id_style' => $id
		));
		$this->db->insert('q_aql', array(
			'id_style' => $id
		));
		$this->db->insert('q_sewing', array(
			'id_style' => $id
		));
	}

}

/* End of file Main.php */
/* Location: ./application/controllers/Main.php */