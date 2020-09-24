<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if (empty($this->session->userdata('vsm_epf'))) {			
			$this->load->view('login');		
		}else{
			redirect('welcome','refresh');
		}
	}

	public function submit()
	{
		$epf = $this->input->post('epf');
		$password = md5($this->input->post('password'));

		$get = $this->db->get_where('users', array(
			'epf' => $epf,
			'password' => $password,
		));

		if (empty($get->num_rows())) {
			$this->session->set_flashdata('msg', '
				<div class="alert alert-danger text-center">					
					<strong>EPF or Password is wrong !</strong>
				</div>
				');
			redirect('login','refresh');
		}else{
			$row = $get->row();
			$array = array(
				'vsm_epf' => $row->epf,
				'vsm_name' => $row->name,
				'vsm_department' => $row->department,
			);
			
			$this->session->set_userdata( $array );

			redirect('welcome','refresh');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata(array(
			'vsm_epf',
			'vsm_name',
			'vsm_department',
		));

		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */