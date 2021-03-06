<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupos_model extends CI_Model {

	private $id;
	private $grupo;

	public function findAll() {
		$query = $this->db->get('grupo');
		return $query->result();
	}

	public function findAll_Dropdown() {
		$query = $this->db->get('grupo');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->grupo;
	    }

		return $array;
	}
}
