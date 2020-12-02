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
		$getexim = $this->Minventory->getwhere_exim($idstyle,$idrules);	
		$this->cek_instructions($idrules);	
		if ($getcek->type == "PROCESS") {
			$data['content'] = 'fillprocess';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['proc'] = $getprocess->row();
			$data['ins'] = $this->db->get_where('ins_process', array('id_rule' => $idrules))->row();
			$this->load->view('index', $data);
		}elseif ($getcek->type == "INVENTORY") {
			$data['content'] = 'fillinventory';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['inv'] = $getinventory->row();
			$data['ins'] = $this->db->get_where('ins_inventory', array('id_rule' => $idrules))->row();			
			$this->load->view('index', $data);
		}else{
			$data['content'] = 'fillexim';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['exim'] = $getexim->row();
			$data['ins'] = $this->db->get_where('ins_exim', array('id_rule' => $idrules))->row();			
			$this->load->view('index', $data);
		}
	}

	public function view($idrules,$idstyle)
	{
		$getcek = $this->db->get_where('rules', array('id' => $idrules))->row();
		$getmain = $this->db->get_where('main_info', array('id' => $idstyle))->row();
		$getinventory = $this->Minventory->getwhere($idstyle,$idrules);
		$getprocess = $this->Minventory->getwhere_process($idstyle,$idrules);
		$getexim = $this->Minventory->getwhere_exim($idstyle,$idrules);


		if ($getcek->type == "PROCESS") {
			if (empty($getprocess->num_rows())) {
				$this->_insertproc($idrules,$idstyle);
			}
			$data['content'] = 'viewprocess';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['proc'] = $this->Minventory->getwhere_process($idstyle,$idrules)->row();
			$this->load->view('index', $data);
		}elseif ($getcek->type == "INVENTORY") {
			if (empty($getinventory->num_rows())) {
				$this->_insertinv($idrules,$idstyle);
			}
			$data['content'] = 'viewinventory';
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['inv'] = $this->Minventory->getwhere($idstyle,$idrules)->row();
			$this->load->view('index', $data);
		}else{
			if (empty($getexim->num_rows())) {
				$this->_insertexim($idrules,$idstyle);
			}
			$data['get'] = $getcek;
			$data['main'] = $getmain;
			$data['exim'] = $this->Minventory->getwhere_exim($idstyle,$idrules)->row();
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

	function _insertexim($idrules,$idstyle)
	{
		$this->db->insert('data_exim', array(
			'id_main' => $idstyle,
			'id_rule' => $idrules,
		));
	}

	public function save_proc($idrules,$idstyle,$idproc)
	{
		$result = $this->input->post('input8') / 56880;
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
			'result' => $result,
		));



		redirect('process/view/'.$idrules.'/'.$idstyle,'refresh');
	}

	public function save_exim($idrules,$idstyle,$idexim)
	{
		$this->db->where('id_exim', $idexim);
		$this->db->update('data_exim', array(
			'sea1' => $this->input->post('sea1'),
			'sea2' => $this->input->post('sea2'),
			'sea3' => $this->input->post('sea3'),			
			'sea4' => $this->input->post('sea4'),			
			'air1' => $this->input->post('air1'),
			'air2' => $this->input->post('air2'),
			'air3' => $this->input->post('air3'),
			'air4' => $this->input->post('air4'),
		));

		redirect('process/view/'.$idrules.'/'.$idstyle,'refresh');	
	}

	public function overview($id)
	{
		$data['get'] = $this->db->get_where('main_info', array('id' => $id))->row();
		$data['info'] = $this->db->get_where('information', array('id_main' => $id))->result();
		$data['process'] = $this->Minventory->getprocess($id)->result();
		$data['inventory'] = $this->Minventory->getinventory($id)->result();
		$data['exim'] = $this->Minventory->getexim($id)->result();
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
		$data['content'] = 'overview';
		$this->load->view('index', $data);
	}

	public function submit_embed($id)
	{
		$this->db->where('id', $id);
		$this->db->update('main_info', array(
			'embed' => $this->input->post('embed')
		));

		redirect('process/overview/'.$id,'refresh');
	}

	public function upload_image()
	{
		$id = $this->input->post('id');
		$config['upload_path']          = './dist/img/visual/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 2048;
        // $config['max_width']            = 3000;
        // $config['max_height']           = 3000;
        $config['encrypt_name'] 		= true;         

        $this->load->library('upload', $config);

        if (!empty($_FILES['visual']['name'])) {
	        if ( ! $this->upload->do_upload('visual')){
	            $error = array('error' => $this->upload->display_errors());	         
				echo  $error['error'];   	            
	        }else{	            
	            $this->db->where('id', $id);
	            $this->db->update('main_info', array(
	            	'image' => $this->upload->file_name
	            ));
	        }
	    }
	    redirect('process/overview/'.$id,'refresh');
	}

	public function review($id)
	{
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

		$this->load->view('review', $data);
	}

	public function getprocess($id)
	{
		$data = $this->db->get_where('data_process', array('id_process' => $id))->row();
		echo json_encode($data);
	}

	public function getinventory($id)
	{
		$data = $this->db->get_where('data_inventory', array('id' => $id))->row();
		echo json_encode($data);
	}

	public function getexim($id)
	{
		$data = $this->db->get_where('data_exim', array('id_exim' => $id))->row();
		echo json_encode($data);
	}

	public function cek_instructions($id)
	{
		$get = $this->db->get_where('rules', array('id' => $id))->row();
		if ($get->type == "PROCESS") {
			// echo $get->id;
			$cek = $this->db->get_where('ins_process', array('id_rule' => $id))->num_rows();
			if (empty($cek)) {
				$this->db->insert('ins_process', array('id_rule' => $get->id));
			}			
		}elseif($get->type == "INVENTORY"){
			// echo $get->id;
			$cek = $this->db->get_where('ins_inventory', array('id_rule' => $id))->num_rows();
			if (empty($cek)) {
				$this->db->insert('ins_inventory', array('id_rule' => $get->id));
			}		
		}else{
			// echo $get->id;
			$cek = $this->db->get_where('ins_exim', array('id_rule' => $id))->num_rows();
			if (empty($cek)) {
				$this->db->insert('ins_exim', array('id_rule' => $get->id));
			}			
		}
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

/* End of file Process.php */
/* Location: ./application/controllers/Process.php */