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

}

/* End of file Minventory.php */
/* Location: ./application/models/Minventory.php */