<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Municipios_model extends CI_Model {

	private $id;
	private $nombre;

	public function findAll() {
		$query = $this->db->get('municipio');
		return $query->result();
	}
}
