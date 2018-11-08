<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docentes_model extends CI_Model {

	private $id;
	private $nombre;

	public function findAll() {
		$query = $this->db->get('docente');
		return $query->result();
	}

	public function findById($id) {
		$this->db->select('a.id, a.nombre, a.apellidoPa, a.apellidoMa, a.calle, a.numeroInt, a.numeroEx, a.municipio, a.colonia, a.grado, a.grupo, a.tutor, a.autorizado1, a.autorizado2,
			f.id as foto_id, f.foto as foto_img, f.nombre as foto_nombre');
		$this->db->from('alumno a');
		$this->db->join('foto f', 'f.id = a.foto');
		$this->db->where('a.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
}
