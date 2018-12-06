<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parentescos_model extends CI_Model {

	public function findAll() {
		$query = $this->db->get('parentesco');
		return $query->result();
	}

	public function findAll_Dropdown() {
		$query = $this->db->get('parentesco');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->parentesco;
	    }

		return $array;
	}
}
