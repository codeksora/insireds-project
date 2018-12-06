<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docentes_model extends CI_Model {

	private $id;
	private $nombre;

	public function findAll() {
		$this->db->where('d.estado', 1);
		$query = $this->db->get('docente d');
		return $query->result();
	}

	public function findById($id) {
		$this->db->select('d.id, d.nombre, d.apellidoPa, d.apellidoMa, d.calle, d.numeroInt, d.numeroExt, d.municipio, d.colonia, d.telefono, d.ine, d.escuela, d.usuario,
			f.id as foto_id, f.foto as foto_img, f.nombre as foto_nombre');
		$this->db->from('docente d');
		$this->db->join('foto f', 'f.id = d.foto');
		$this->db->where('d.id', $id);
		$this->db->where('d.estado', 1);
		$query = $this->db->get();

		if($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function getDocenteLoginById($id) {
		$this->db->select('d.id, d.nombre, d.apellidoPa, d.apellidoMa,
			f.id as foto_id, f.foto as foto_img, f.nombre as foto_nombre, t.tipo');
		$this->db->from('docente d');
		$this->db->join('foto f', 'f.id = d.foto');
		$this->db->join('login l', 'l.id = d.usuario');
		$this->db->join('tipousuario t', 't.id = l.tipo');
		$this->db->where('d.id', $id);
		$query = $this->db->get();

		if($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	}

	public function add($data) {
		return $this->db->insert('docente', $data);
	}

	public function upd($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update('docente', $data);
	}

	public function del($id) {
		$this->db->where('id', $id);
		return $this->db->update('docente', array('estado'=>0));
	}
}
