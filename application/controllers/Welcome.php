<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['get'] = $this->db->get_where('main_info')->result();
		$data['content'] = 'dashboard';
		$this->load->view('index', $data);
	}

	public function get()
	{
		$data['get'] = $this->db->get_where('main_info')->result();		
		$id = $this->input->post('style');
		$data['main'] = $this->db->get_where('main_info', array('id' => $id))->row();
		$data['field1'] = $this->Minventory->view_exim('1',$id)->row();
		$data['field2'] = $this->Minventory->view_process('2',$id)->row();		
		$data['field3'] = $this->Minventory->view_inventory('3',$id)->row();		
		$data['field4'] = $this->Minventory->view_process('4',$id)->row();		
		$data['field5'] = $this->Minventory->view_inventory('5',$id)->row();		
		$data['field6'] = $this->Minventory->view_inventory('6',$id)->row();		
		$data['field7'] = $this->Minventory->view_process('7',$id)->row();		
		$this->validate_sequence('8',$id,'data_inventory');
		$data['field8'] = $this->Minventory->samesequence_inventory('8',$id)->row();
		$this->validate_sequence('9',$id,'data_process');
		$data['field9'] = $this->Minventory->samesequence_process('9',$id)->row();		
		$data['field10'] = $this->Minventory->view_inventory('10',$id)->row();		
		$data['field11'] = $this->Minventory->view_process('11',$id)->row();		
		$this->validate_sequence('12',$id,'data_inventory');
		$data['field12'] = $this->Minventory->samesequence_inventory('12',$id)->row();
		$data['field13'] = $this->Minventory->view_process('13',$id)->row();		
		$data['field14'] = $this->Minventory->view_inventory('14',$id)->row();		
		$data['field15'] = $this->Minventory->view_process('15',$id)->row();		
		$data['field16'] = $this->Minventory->view_inventory('16',$id)->row();		
		$data['field17'] = $this->Minventory->view_process('17',$id)->row();		
		$data['field18'] = $this->Minventory->view_inventory('18',$id)->row();		
		$data['field19'] = $this->Minventory->view_inventory('19',$id)->row();		
		$data['field20'] = $this->Minventory->view_process('20',$id)->row();		
		$data['field21'] = $this->Minventory->view_inventory('21',$id)->row();		
		$data['field22'] = $this->Minventory->view_process('22',$id)->row();		
		$data['field23'] = $this->Minventory->view_inventory('23',$id)->row();		
		$data['field24'] = $this->Minventory->view_inventory('24',$id)->row();						
		$data['field25'] = $this->Minventory->view_exim('25',$id)->row();
			$data['laying'] = $this->db->get_where('q_laying', array('id_style' => $id))->row();
		$data['molding'] = $this->db->get_where('q_molding', array('id_style' => $id))->row();
		$data['assorting'] = $this->db->get_where('q_assorting', array('id_style' => $id))->row();
		$data['handcut'] = $this->db->get_where('q_handcut', array('id_style' => $id))->row();
		$data['autocutter'] = $this->db->get_where('q_autocutter', array('id_style' => $id))->row();
		$data['bandknife'] = $this->db->get_where('q_bandknife', array('id_style' => $id))->row();
		$data['unloading'] = $this->db->get_where('q_unloading', array('id_style' => $id))->row();
		$data['fabricstorage'] = $this->db->get_where('q_fabricstorage', array('id_style' => $id))->row();
		$data['fg'] = $this->db->get_where('q_fg', array('id_style' => $id))->row();
		$data['ctex'] = $this->db->get_where('q_ctex', array('id_style' => $id))->row();
		$data['aqlcut'] = $this->db->get_where('q_aqlcut', array('id_style' => $id))->row();
		$data['aql'] = $this->db->get_where('q_aql', array('id_style' => $id))->row();
		$data['sewing'] = $this->db->get_where('q_sewing', array('id_style' => $id))->row();
		// $data['total_inventory'] = $this->Minventory->total_inventory($id)->row();
		$data['content'] = 'dashboard_get';
		$this->load->view('index', $data);
	}

	public function validate_sequence($sequence,$id_main,$table)
	{
		$db = $this->db->get_where('rules', array('seq' => $sequence))->result();
		foreach ($db as $data) {
			$cek = $this->db->get_where($table, array('id_main' => $id_main, 'id_rule' => $data->id))->num_rows();
			if (empty($cek)) {
				$this->db->insert($table, array(
					'id_main' => $id_main,
					'id_rule' => $data->id,
				));
			}
		}		
	}	
	
}
