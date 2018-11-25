<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grados_model extends CI_Model {

	public function findAll() {
		$query = $this->db->get('grado');
		return $query->result();
	}

	public function findAll_Dropdown() {
		$query = $this->db->get('grado');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->grado;
	    }

		return $array;
	}
}
