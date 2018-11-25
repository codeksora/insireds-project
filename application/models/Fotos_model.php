<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotos_model extends CI_Model {

	private $id;
	private $nombre;

	public function add($data) {
		return $this->db->insert('foto', $data);
	}

	public function upd($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update('foto', $data);
	}

}
