<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Padres_model extends CI_Model {

	private $id;
	private $nombre;

	public function findAll() {
		$query = $this->db->get('padre');
		return $query->result();
	}

	// public function findById($id) {
	// 	$query = $this->db->get_where('padre', array('id' => $id));
	// 	return $query->row();
	// }
}
