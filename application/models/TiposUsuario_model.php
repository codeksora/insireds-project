<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TiposUsuario_model extends CI_Model {

	public function findAll_Dropdown() {
		$query = $this->db->get('tipousuario');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->tipo;
	    }

		return $array;
	}
}
