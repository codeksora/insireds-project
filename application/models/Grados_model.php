<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grados_model extends CI_Model {

	public function findAll() {
		$query = $this->db->get('grado');
		return $query->result();
	}
}
