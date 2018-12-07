<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salidas_model extends CI_Model {

	public function findByYearAndMonth($anio, $month) {
		$this->db->select('DATE_FORMAT(s.fecha, "%d-%m-%Y") as fecha, s.hora, s.accidentes, s.obsAcci, s.atenciones, s.obsAten, s.obsAdic, a.nombre as alumno_nombre, a.apellidoPa as alumno_apellidoPa, a.apellidoMa as alumno_apellidoMa, p.nombre as padre_nombre, p.apellidoPa as padre_apellidoPa, p.apellidoMa as padre_apellidoMa, u.nombre as docente_nombre, u.apellidoPa as docente_apellidoPa, u.apellidoMa as docente_apellidoMa');
		$this->db->from('salida s');
		$this->db->join('alumno a', 'a.id = s.alumno');
		$this->db->join('docente u', 'u.id = s.usuario');
		$this->db->join('padre p', 'p.id = s.padre');
		$this->db->where('YEAR(s.fecha)', $anio);
		$this->db->where('MONTH(s.fecha)', $month);
		$query = $this->db->get();
		return $query->result();
	}
}
