<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function loginUser($usuario, $contrasena) {

		$this->db->where('l.usuario', $usuario);
		$this->db->where('d.estado', 1);
		$this->db->join('docente d', 'd.usuario = l.id');
		$query = $this->db->get('login l');

		$db_contrasena = $query->num_rows() == 1 ? $query->row(2)->contrasena : '';

		if(password_verify($contrasena, $db_contrasena)) {
			return $query->row(0)->id;
		} else {
			return false;
		}
	}

	public function add() {
		$options = ['cost' => 12];
    	$encripted_pass = password_hash($this->input->post('contrasena'), PASSWORD_BCRYPT, $options);
		$data_login['usuario'] = $this->input->post('ine');
		$data_login['contrasena'] = $encripted_pass;
		$data_login['tipo'] = $this->input->post('tipo_usuario');

		$this->db->insert('login', $data_login);

		return $this->db->insert_id();

	}

	public function upd($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update('login', $data);
	}
}
