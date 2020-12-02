<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
		$data['totaltime'] = $this->db->query("SELECT sum(lead_time) as total FROM information WHERE id_main ='$id' AND from_who = '$who'")->row();
		$data['get'] = $this->db->get_where('main_info', array('id' => $id))->row();
		$data['item'] = $this->db->get('item')->result();
		$data['info'] = $this->db->get_where('information', array('id_main' => $id))->result();
		$data['from'] = $this->db->get('item')->result();
		// if ($this->session->userdata('vsm_department') == "MOS") {			
		// }else{
		// 	$data['from'] = $this->db->get_where('have_item', array('department' => $who))->result();
			// $data['info'] = $this->db->get_where('information', array('from_who' => $this->session->userdata('vsm_department'), 'id_main' => $id))->result();
		// }
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
			'from_who' => $this->input->post('from_who'),
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
			'from_who' => $this->input->post('from_who'),			
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

	public function download($id)
	{
		$get_main = $this->db->get_where('main_info',array('id' => $id))->row();
		$get_info = $this->db->get_where('information', array('id_main' => $id))->result();


		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$spreadsheet->getActiveSheet()->mergeCells('A1:F1');		
		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'Data Information Matrix from Style '.$get_main->style_no)
		->setCellValue('A3', 'NO')
		->setCellValue('B3', 'FROM')
		->setCellValue('C3', 'TO')
		->setCellValue('D3', 'INFORMATION')
		->setCellValue('E3', 'TYPE')
		->setCellValue('F3', 'LEAD_TIME')		
		;

		foreach(range('A','F') as $columnID) {
 		   $spreadsheet->getActiveSheet()->getColumnDimension($columnID)
        ->setAutoSize(true);
		}
		$spreadsheet->getActiveSheet()->getStyle('A1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('cecece');
		$spreadsheet->getActiveSheet()->getStyle('A3:F3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('42ff5f');

		// Miscellaneous glyphs, UTF-8
		$no =1;
		$i = 4; foreach($get_info as $data) {

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A'.$i, $no++)		
		->setCellValue('B'.$i, $data->from_who)
		->setCellValue('C'.$i, $data->to_who)
		->setCellValue('D'.$i, $data->information)
		->setCellValue('E'.$i, $data->type)
		->setCellValue('F'.$i, $data->lead_time.' days');	
		$i++;
		}
        
		$writer = new Xlsx($spreadsheet);
		
		$filename = 'Digital VSM Information Matrix - Style '.$get_main->style_no;
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}

}

/* End of file Information.php */
/* Location: ./application/controllers/Information.php */