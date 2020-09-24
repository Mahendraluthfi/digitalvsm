<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

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
		$ses = $this->session->userdata('vsm_department');
		$data['content'] = 'process';
		$data['getbutton'] = $this->db->query("SELECT DISTINCT(type) FROM rules WHERE department='$ses'")->result();
		$data['get'] = $this->db->get('main_info')->result();		
		$this->load->view('index', $data);
	}

	public function get($type)
	{
		$data = $this->db->get_where('rules', array('type' => $type, 'department' => $this->session->userdata('vsm_department')))->result();
		echo json_encode($data);
	}

	public function sign($idrules,$idstyle)
	{
		$getcek = $this->db->get_where('rules', array('id' => $idrules))->row();
		$getmain = $this->db->get_where('main_info', array('id' => $idstyle))->row();
		$getinventory = $this->Minventory->getwhere($idstyle,$idrules);		
		$getprocess = $this->Minventory->getwhere_process($idstyle,$idrules);		
		if ($getcek->type == "PROCESS") {
			$data['content'] = 'fillprocess';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['proc'] = $getprocess->row();
			$this->load->view('index', $data);
		}elseif ($getcek->type == "INVENTORY") {
			$data['content'] = 'fillinventory';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['inv'] = $getinventory->row();
			$this->load->view('index', $data);
		}else{
			$data['content'] = 'fillexim';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$this->load->view('index', $data);
		}
	}

	public function view($idrules,$idstyle)
	{
		$getcek = $this->db->get_where('rules', array('id' => $idrules))->row();
		$getmain = $this->db->get_where('main_info', array('id' => $idstyle))->row();
		$getinventory = $this->Minventory->getwhere($idstyle,$idrules);
		$getprocess = $this->Minventory->getwhere_process($idstyle,$idrules);
		if (empty($getinventory->num_rows())) {
			$this->_insertinv($idrules,$idstyle);
		}

		if (empty($getprocess->num_rows())) {
			$this->_insertproc($idrules,$idstyle);
		}

		if ($getcek->type == "PROCESS") {
			$data['content'] = 'viewprocess';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['proc'] = $this->Minventory->getwhere_process($idstyle,$idrules)->row();
			$this->load->view('index', $data);
		}elseif ($getcek->type == "INVENTORY") {
			$data['content'] = 'viewinventory';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['inv'] = $this->Minventory->getwhere($idstyle,$idrules)->row();
			$this->load->view('index', $data);
		}else{
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['content'] = 'viewexim';
			$this->load->view('index', $data);
		}
	}

	public function save($idrules,$idstyle,$idinv)
	{
		$this->db->where('id', $idinv);
		$this->db->update('data_inventory', array(
			'input1' => $this->input->post('input1'),
			'input2' => $this->input->post('input2'),
			'input3' => $this->input->post('input3'),
			'input4' => $this->input->post('input4'),
			'input5' => $this->input->post('input5'),
			'input6' => $this->input->post('input6'),
			'input7' => $this->input->post('input7'),
			'input8' => $this->input->post('input8'),
			'input9' => $this->input->post('input9'),
			'unit' => $this->input->post('unit')
		));

		redirect('process/view/'.$idrules.'/'.$idstyle,'refresh');
	}

	function _insertinv($idrules,$idstyle)
	{
		$this->db->insert('data_inventory', array(
			'id_main' => $idstyle,
			'id_rule' => $idrules,
		));
	}

	function _insertproc($idrules,$idstyle)
	{
		$this->db->insert('data_process', array(
			'id_main' => $idstyle,
			'id_rule' => $idrules,
		));
	}

	public function save_proc($idrules,$idstyle,$idproc)
	{
		$this->db->where('id_process', $idproc);
		$this->db->update('data_process', array(
			'input1' => $this->input->post('input1'),
			'input2' => $this->input->post('input2'),
			'input3' => $this->input->post('input3'),
			'input4' => $this->input->post('input4'),
			'input5' => $this->input->post('input5'),
			'input6' => $this->input->post('input6'),
			'input7' => $this->input->post('input7'),
			'input8' => $this->input->post('input8'),
			'input9' => $this->input->post('input9'),
			'input10' => $this->input->post('input10'),
			'input11' => $this->input->post('input11'),
			'input12' => $this->input->post('input12'),
		));

		redirect('process/view/'.$idrules.'/'.$idstyle,'refresh');
	}

}

/* End of file Process.php */
/* Location: ./application/controllers/Process.php */