<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minventory extends CI_Model {

	public function getwhere($style,$rule)
		{
			$this->db->select('*, data_inventory.id as idv');
			$this->db->from('data_inventory');
			$this->db->join('rules', 'rules.id = data_inventory.id_rule');
			$this->db->join('main_info', 'main_info.id = data_inventory.id_main');
			$this->db->where('data_inventory.id_rule', $rule);
			$this->db->where('data_inventory.id_main', $style);
			$db = $this->db->get();
			return $db;
		}	

	public function getwhere_process($style,$rule)
		{
			$this->db->from('data_process');
			$this->db->join('rules', 'rules.id = data_process.id_rule');
			$this->db->join('main_info', 'main_info.id = data_process.id_main');
			$this->db->where('data_process.id_rule', $rule);
			$this->db->where('data_process.id_main', $style);
			$db = $this->db->get();
			return $db;
		}

	public function getwhere_exim($style,$rule)
		{
			$this->db->from('data_exim');
			$this->db->join('rules', 'rules.id = data_exim.id_rule');
			$this->db->join('main_info', 'main_info.id = data_exim.id_main');
			$this->db->where('data_exim.id_rule', $rule);
			$this->db->where('data_exim.id_main', $style);
			$db = $this->db->get();
			return $db;
		}

	public function getprocess($id)
		{
			$this->db->from('data_process');
			$this->db->join('rules', 'rules.id = data_process.id_rule');
			$this->db->where('data_process.id_main', $id);
			$db = $this->db->get();
			return $db;
		}	

	public function getinventory($id)
		{
			$this->db->select('*, data_inventory.id as idv');
			$this->db->from('data_inventory');
			$this->db->join('rules', 'rules.id = data_inventory.id_rule');
			$this->db->where('data_inventory.id_main', $id);
			$db = $this->db->get();
			return $db;
		}

	public function getexim($id)
		{
			$this->db->from('data_exim');
			$this->db->join('rules', 'rules.id = data_exim.id_rule');
			$this->db->where('data_exim.id_main', $id);
			$db = $this->db->get();
			return $db;
		}

	public function view_process($seq,$idmain)
	{
		$getrule = $this->db->get_where('rules', array('seq' => $seq))->row();
		$cek = $this->db->get_where('data_process', array('id_rule' => $getrule->id, 'id_main' => $idmain))->num_rows();
		if (empty($cek)) {
			$this->db->insert('data_process', array(
				'id_main' => $idmain,
				'id_rule' => $getrule->id,
			));
		}

		$db = $this->db->query("SELECT * FROM `data_process`
			JOIN rules ON rules.id=data_process.id_rule
			WHERE rules.seq = '$seq'
			AND data_process.id_main = '$idmain'");
		return $db;
	}

	public function view_inventory($seq,$idmain)
	{
		$getrule = $this->db->get_where('rules', array('seq' => $seq))->row();
		$cek = $this->db->get_where('data_inventory', array('id_rule' => $getrule->id, 'id_main' => $idmain))->num_rows();
		if (empty($cek)) {
			$this->db->insert('data_inventory', array(
				'id_main' => $idmain,
				'id_rule' => $getrule->id,
			));
		}
		
		$db = $this->db->query("SELECT * FROM `data_inventory`
			JOIN rules ON rules.id=data_inventory.id_rule
			WHERE rules.seq = '$seq'
			AND data_inventory.id_main = '$idmain'");
		return $db;
	}

	public function view_exim($seq,$idmain)
	{
		$getrule = $this->db->get_where('rules', array('seq' => $seq))->row();
		$cek = $this->db->get_where('data_exim', array('id_rule' => $getrule->id, 'id_main' => $idmain))->num_rows();
		if (empty($cek)) {
			$this->db->insert('data_exim', array(
				'id_main' => $idmain,
				'id_rule' => $getrule->id,
			));
		}
		
		$db = $this->db->query("SELECT * FROM `data_exim`
			JOIN rules ON rules.id=data_exim.id_rule
			WHERE rules.seq = '$seq'
			AND data_exim.id_main = '$idmain'");
		return $db;	
	}

	public function dist_item()
	{
		$this->db->select('DISTINCT(department) as dpt');
		$this->db->from('have_item');
		$db = $this->db->get();
		return $db;
	}

	public function total_inventory($id)
	{
		$db = $this->db->query("SELECT sum(input9) as total FROM `data_inventory` WHERE id_main = '$id'");
		return $db;
	}

	public function samesequence_inventory($seq,$idmain)
	{
		$db = $this->db->query("SELECT * FROM `data_inventory`
			JOIN rules ON rules.id=data_inventory.id_rule
			WHERE rules.seq = '$seq'
			AND data_inventory.id_main = '$idmain'
            ORDER BY input9 DESC LIMIT 1");
		return $db;
	}

	public function samesequence_process($seq,$idmain)
	{
		$db = $this->db->query("SELECT * FROM `data_process`
			JOIN rules ON rules.id=data_process.id_rule
			WHERE rules.seq = '$seq'
			AND data_process.id_main = '$idmain'
            ORDER BY input8 DESC LIMIT 1");
		return $db;
	}

}

/* End of file Minventory.php */
/* Location: ./application/models/Minventory.php */