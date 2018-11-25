<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Padres_model extends CI_Model {

	private $id;
	private $nombre;

	public function findAll() {
		$query = $this->db->get('padre');
		return $query->result();
	}

	public function findAll_Dropdown() {
		$query = $this->db->get('padre');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->nombre . ' ' . $row->apellidoPa . ' ' . $row->apellidoMa;
	    }

		return $array;
	}
}
