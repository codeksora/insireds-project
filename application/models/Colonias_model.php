<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colonias_model extends CI_Model {

	public function findAll() {
		$query = $this->db->get('colonia');
		return $query->result();
	}
}
