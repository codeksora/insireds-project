<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escuelas_model extends CI_Model {

	public function findAll() {
		$query = $this->db->get('colonia');
		return $query->result();
	}

	public function findAll_Dropdown() {
		$query = $this->db->get('escuela');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->nombre;
	    }

		return $array;
	}
}
