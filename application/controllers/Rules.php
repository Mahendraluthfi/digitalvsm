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
		$data['get'] = $this->db->query('SELECT * FROM rules ORDER BY seq ASC')->result();		
		$this->load->view('index', $data);
	}

	public function get($id)
	{
		$data = $this->db->get_where('rules', array('id' => $id))->row();
		echo json_encode($data);
	}

	public function save()
	{
		$seq = $this->input->post('seq');

		// $cek = $this->db->get_where('rules', array('seq' => $seq))->num_rows();

		// if ($cek > 0) {
		// 	$this->session->set_flashdata('msg', '
		// 		<div class="alert alert-danger">
		// 			<strong>Sequence is not available !</strong>
		// 		</div>
		// 		');
		// }else{
			$this->db->insert('rules', array(
				'department' => $this->input->post('department'),
				'type' => $this->input->post('type'),
				'point_name' => $this->input->post('point_name'),
				'seq' => $this->input->post('seq'),
			));

		// }

		redirect('rules','refresh');
	}

	public function edit($id)
	{
			$seq = $this->input->post('seq');

		// $cek = $this->db->get_where('rules', array('seq' => $seq))->num_rows();

		// if ($cek > 0) {
		// 	$this->session->set_flashdata('msg', '
		// 		<div class="alert alert-danger">
		// 			<strong>Sequence is not available !</strong>
		// 		</div>
		// 		');
		// }else{
			$this->db->where('id', $id);
			$this->db->update('rules', array(
				'department' => $this->input->post('department'),
				'type' => $this->input->post('type'),
				'point_name' => $this->input->post('point_name'),
				'seq' => $this->input->post('seq'),
			));
		// }

		redirect('rules','refresh');
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('rules');

		redirect('rules','refresh');
	}

	public function instructions($id)
	{
		$get = $this->db->get_where('rules', array('id' => $id))->row();
		if ($get->type == "PROCESS") {
			// echo $get->id;
			$cek = $this->db->get_where('ins_process', array('id_rule' => $id))->num_rows();
			if (empty($cek)) {
				$this->db->insert('ins_process', array('id_rule' => $get->id));
			}
			$row = $this->db->get_where('ins_process', array('id_rule' => $id))->row();
			// print_r($row);
			$data['get_pro'] = $row;
			$data['fill'] = 'ins_process';

		}elseif($get->type == "INVENTORY"){
			// echo $get->id;
			$cek = $this->db->get_where('ins_inventory', array('id_rule' => $id))->num_rows();
			if (empty($cek)) {
				$this->db->insert('ins_inventory', array('id_rule' => $get->id));
			}
			$row = $this->db->get_where('ins_inventory', array('id_rule' => $id))->row();
			// print_r($row);
			$data['get_pro'] = $row;
			$data['fill'] = 'ins_inventory';

		}else{
			// echo $get->id;
			$cek = $this->db->get_where('ins_exim', array('id_rule' => $id))->num_rows();
			if (empty($cek)) {
				$this->db->insert('ins_exim', array('id_rule' => $get->id));
			}
			$row = $this->db->get_where('ins_exim', array('id_rule' => $id))->row();
			// print_r($row);
			$data['get_pro'] = $row;
			$data['fill'] = 'ins_exim';

		}
		$data['get'] = $get;		
		$data['content'] = 'instructions';
		$this->load->view('index', $data);
	}

	public function save_ins_process()
	{
		// echo $this->input->post('id');
		$this->db->where('id', $this->input->post('id'));			
		$this->db->update('ins_process', array(
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

		redirect('rules','refresh');
	}

	public function save_ins_inventory()
	{
		// echo $this->input->post('id');
		$this->db->where('id', $this->input->post('id'));			
		$this->db->update('ins_inventory', array(
			'input1' => $this->input->post('input1'),
			'input2' => $this->input->post('input2'),
			'input3' => $this->input->post('input3'),
			'input4' => $this->input->post('input4'),
			'input5' => $this->input->post('input5'),
			'input6' => $this->input->post('input6'),
			'input7' => $this->input->post('input7'),
			'input8' => $this->input->post('input8'),
			'input9' => $this->input->post('input9'),			
		));

		redirect('rules','refresh');
	}

	public function save_ins_exim()
	{
		// echo $this->input->post('id');
		$this->db->where('id', $this->input->post('id'));			
		$this->db->update('ins_exim', array(
			'sea1' => $this->input->post('sea1'),
			'sea2' => $this->input->post('sea2'),
			'sea3' => $this->input->post('sea3'),
			'sea4' => $this->input->post('sea4'),
			'air1' => $this->input->post('air1'),
			'air2' => $this->input->post('air2'),
			'air3' => $this->input->post('air3'),
			'air4' => $this->input->post('air4'),
			
		));

		redirect('rules','refresh');
	}

	public function embed()
	{
		$data['get'] = $this->db->get_where('default_embed', array('id_embed' => '1'))->row();
		$data['content'] = 'embed';
		$this->load->view('index', $data);

	}

	public function sub_embed()
	{
		$this->db->where('id_embed', 1);
		$this->db->update('default_embed', array(
			'embed' => $this->input->post('embed')
		));

		redirect('rules/embed','refresh');
	}
}

/* End of file Rules.php */
/* Location: ./application/controllers/Rules.php */