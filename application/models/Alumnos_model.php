<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos_model extends CI_Model {

	private $id;
	private $nombre;

	public function findAll() {
		$this->db->where('a.estado', 1);
		$query = $this->db->get('alumno a');
		return $query->result();
	}

	public function findById($id) {
		$this->db->select('a.id, a.nombre, a.apellidoPa, a.apellidoMa, a.calle, a.numeroInt, a.numeroExt, a.municipio, a.colonia, a.grado, a.atencion, a.grupo, a.tutor, a.autorizado1, a.autorizado2,
			f.id as foto_id, f.foto as foto_img, f.nombre as foto_nombre');
		$this->db->from('alumno a');
		$this->db->join('foto f', 'f.id = a.foto');
		$this->db->where('a.id', $id);
		$this->db->where('a.estado', 1);
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data) {
		return $this->db->insert('alumno', $data);
	}

	public function upd($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update('alumno', $data);
	}

	public function del($id) {
		$this->db->where('id', $id);
		return $this->db->update('alumno', array('estado'=>0));
	}
}
