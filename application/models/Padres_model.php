<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Padres_model extends CI_Model {

	private $id;
	private $nombre;

	public function findAll() {
		$this->db->where('p.estado', 1);
		$query = $this->db->get('padre p');
		return $query->result();
	}

	public function findAll_Dropdown() {
		$this->db->where('p.estado', 1);
		$query = $this->db->get('padre p');
		$array[''] = 'Seleccionar';
		foreach($query->result() as $row ){
	        $array[$row->id] = $row->nombre . ' ' . $row->apellidoPa . ' ' . $row->apellidoMa;
	    }

		return $array;
	}

	public function findById($id) {
		$this->db->select('p.id, p.nombre, p.apellidoPa, p.apellidoMa, p.calle, p.numeroInt, p.numeroExt, p.municipio, p.colonia, p.telefono, p.ine, p.parentesco,
			f.id as foto_id, f.foto as foto_img, f.nombre as foto_nombre');
		$this->db->from('padre p');
		$this->db->join('foto f', 'f.id = p.foto');
		$this->db->where('p.id', $id);
		$this->db->where('p.estado', 1);
		$query = $this->db->get();
		return $query->row();
	}

	public function findByINE($ine) {
		$this->db->select('p.id, p.nombre, p.apellidoPa, p.apellidoMa, p.calle, p.numeroInt, p.numeroExt, p.municipio, p.colonia, p.telefono, p.ine, p.parentesco,
			f.id as foto_id, f.foto as foto_img, f.nombre as foto_nombre');
		$this->db->from('padre p');
		$this->db->join('foto f', 'f.id = p.foto');
		$this->db->where('p.ine', $ine);
		$this->db->where('p.estado', 1);
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data) {
		return $this->db->insert('padre', $data);
	}

	public function upd($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update('padre', $data);
	}

	public function del($id) {
		$this->db->where('id', $id);
		return $this->db->update('padre', array('estado'=>0));
	}
}
