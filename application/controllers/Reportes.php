<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	private $data = array();

	public function __construct() {
		parent::__construct();

		$this->data['page_header'] = 'Reportes';
		$this->data['page_url'] = 'reportes';
		$this->data['page_icon'] = 'fa-link';
		$this->data['optional_description'] = 'Panel de administración de reportes';

		$this->load->library('session');
		if(!$this->session->userdata('logeado')) redirect();
	}

	public function index() {
		$data = $this->data;
		$meses_Dropdown = array(
			'' => 'Seleccionar',
	        1 => 'Enero',
	        2 => 'Febrero',
	        3 => 'Marzo',
	        4 => 'Abril',
	        5 => 'Mayo',
	        6 => 'Junio',
	        7 => 'Julio',
	        8 => 'Agosto',
	        9 => 'Septiembre',
	        10 => 'Octubre',
	        11 => 'Noviembre',
	        12 => 'Diciembre'
		);
		$data['meses'] = $meses_Dropdown;

		$anios_Dropdown = array();
		$anios_Dropdown[''] = 'Seleccionar';
		for ($i=2018; $i <= date("Y"); $i++) { 
			$anios_Dropdown[$i] = $i;
		}

		$data['anios'] = $anios_Dropdown;

		$tipo_reporte_Dropdown = array(
			'' => 'Seleccionar',
	        'alumnos' => 'Alumnos',
	        'docentes' => 'Docentes',
	        'padres' => 'Padres',
		);

		$data['tipos_reporte'] = $tipo_reporte_Dropdown;

		$this->load->view('templates/header_view', $data);
		$this->load->view('reportes/reportes_view');
		$this->load->view('templates/footer_view');
	}
}
