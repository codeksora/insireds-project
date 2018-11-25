<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipios_model extends CI_Model {

	private $id;
	private $nombre;

	public function findAll() {
		$query = $this->db->get('municipio');
		return $query->result();
	}

	public function findAll_Dropdown() {
		$query = $this->db->get('municipio');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->nombre;
	    }

		return $array;
	}
}
