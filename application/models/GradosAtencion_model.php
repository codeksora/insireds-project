<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GradosAtencion_model extends CI_Model {

	public function findAll() {
		$query = $this->db->get('gradoatencion');
		return $query->result();
	}

	public function findAll_Dropdown() {
		$query = $this->db->get('gradoatencion');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->gradoAt;
	    }

		return $array;
	}
}
