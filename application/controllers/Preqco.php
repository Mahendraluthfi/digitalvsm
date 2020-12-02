<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preqco extends CI_Controller {

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
		$data['content'] = 'preqco';
		$data['getbutton'] = $this->db->query("SELECT DISTINCT(type) FROM rules WHERE department='$ses'")->result();
		$data['get'] = $this->db->get('main_info')->result();		
		$this->load->view('index', $data);
	}	

	public function question($id,$point='')
	{
		if ($this->session->userdata('vsm_department') == "COMMERCIAL") {
			$data['exim'] = $this->db->get_where('rules', array('type' => 'EXIM', 'department' => $this->session->userdata('vsm_department')))->result(); 
		}else{
			$data['process'] = $this->db->get_where('rules', array('type' => 'PROCESS', 'department' => $this->session->userdata('vsm_department')))->result();
			$data['inventory'] = $this->db->get_where('rules', array('type' => 'INVENTORY', 'department' => $this->session->userdata('vsm_department')))->result();	
		}
		$data['main'] = $this->db->get_where('main_info', array('id' => $id))->row();
		$data['content'] = 'preqco_sign';
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

		$this->load->view('index', $data);
		
	}

	public function submit($id,$id_rules)
	{
		$get = $this->db->get_where('rules', array('id' => $id_rules))->row();
		$this->object_submit($id,$get->point_name);
		$this->session->set_flashdata("msg", "
			$( document ).ready(function() {
			      $(document).Toasts('create', {
			        class: 'bg-info', 
			        title: 'Submit Success !',
			        position: 'bottomRight',
			        delay: 750,
			        autohide: true
			      });
			    });
			");
		redirect('preqco/question/'.$id.'/'.$get->point_name.'/'.$id_rules,'refresh');

	}

	public function object_submit($id,$point)
	{
		if ($point == "Laying") {
			$this->db->where('id_style', $id);
			$this->db->update('q_laying', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),
				'input5' => $this->input->post('input5'),
				'input6' => $this->input->post('input6'),
				'risk_level' => $this->input->post('risk_level'),
			));	
		}elseif($point == "Molding"){
			$this->db->where('id_style', $id);
			$this->db->update('q_molding', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),
				'input5' => $this->input->post('input5'),
				'input6' => $this->input->post('input6'),
				'input7' => $this->input->post('input7'),
				'input8' => $this->input->post('input8'),
				'input9' => $this->input->post('input9'),
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "Assorting"){
			$this->db->where('id_style', $id);
			$this->db->update('q_assorting', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),				
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "Hand Cut"){
			$this->db->where('id_style', $id);
			$this->db->update('q_handcut', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),				
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "Auto Cutter"){
			$this->db->where('id_style', $id);
			$this->db->update('q_autocutter', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),				
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "Band Knife"){
			$this->db->where('id_style', $id);
			$this->db->update('q_bandknife', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),				
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "Unloading"){
			$this->db->where('id_style', $id);
			$this->db->update('q_unloading', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),
				'input5' => $this->input->post('input5'),
				'input6' => $this->input->post('input6'),
				'input7' => $this->input->post('input7'),
				'input8' => $this->input->post('input8'),
				'input9' => $this->input->post('input9'),
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "Fabric Storage"){
			$this->db->where('id_style', $id);
			$this->db->update('q_fabricstorage', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),
				'input5' => $this->input->post('input5'),
				'input6' => $this->input->post('input6'),
				'input7' => $this->input->post('input7'),
				'input8' => $this->input->post('input8'),
				'input9' => $this->input->post('input9'),
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "FG"){
			$this->db->where('id_style', $id);
			$this->db->update('q_fg', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),
				'input4' => $this->input->post('input4'),
				'input5' => $this->input->post('input5'),
				'input6' => $this->input->post('input6'),
				'input7' => $this->input->post('input7'),
				'input8' => $this->input->post('input8'),
				'input9' => $this->input->post('input9'),
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "C-Tex"){
			$this->db->where('id_style', $id);
			$this->db->update('q_ctex', array(
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
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "AQL Cutting"){
			$this->db->where('id_style', $id);
			$this->db->update('q_aqlcut', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),								
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "AQL"){
			$this->db->where('id_style', $id);
			$this->db->update('q_aql', array(
				'input1' => $this->input->post('input1'),
				'input2' => $this->input->post('input2'),
				'input3' => $this->input->post('input3'),								
				'risk_level' => $this->input->post('risk_level'),
			));			
		}elseif($point == "Sewing"){
			$this->db->where('id_style', $id);
			$this->db->update('q_sewing', array(
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
				'input13' => $this->input->post('input13'),
				'input14' => $this->input->post('input14'),
				'input15' => $this->input->post('input15'),
				'risk_level' => $this->input->post('risk_level'),
			));			
		}
	}

}

/* End of file Preqco.php */
/* Location: ./application/controllers/Preqco.php */