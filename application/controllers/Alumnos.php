<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {
	private $url_redirect = 'alumnos';

	public function __construct() {
		parent::__construct();

		$this->load->model('Alumnos_model');
		$this->load->model('Padres_model');
	}

	public function index() {
		$data = array(
			'alumnos' => $this->Alumnos_model->findAll()
		);
		$this->load->view('templates/header_view', $data);
		$this->load->view('alumnos/alumnos_view');
		$this->load->view('templates/footer_view');
	}

	public function agregar() {
		$data = array(
			'municipios' => $this->Municipios_model->findAll(),
			'grupos' => $this->Grupos_model->findAll(),
			'colonias' => $this->Colonias_model->findAll(),
			'grados' => $this->Grados_model->findAll()
		);
		$this->load->view('templates/header_view', $data);
		$this->load->view('alumnos/alumnos_agregar_view');
		$this->load->view('templates/footer_view');
	}

	public function editar($id = NULL) {
		if($id == NULL) {
			redirect($this->url_redirect);
		} else {
			$data = array(
				'alumno' => $this->Alumnos_model->findById($id),
				'municipios' => $this->Municipios_model->findAll(),
				'grupos' => $this->Grupos_model->findAll(),
				'colonias' => $this->Colonias_model->findAll(),
				'grados' => $this->Grados_model->findAll(),
				'padres' => $this->Padres_model->findAll()
			);
			$this->load->view('templates/header_view', $data);
			$this->load->view('alumnos/alumnos_editar_view');
			$this->load->view('templates/footer_view');			
		}
	}

	public function eliminar($id = NULL) {
		if($id == NULL) {
			redirect($this->url_redirect);
		} else {
			$data = array(
				'alumno' => $this->Alumnos_model->findById($id)
			);

			$this->load->view('templates/header_view', $data);
			$this->load->view('alumnos/alumnos_eliminar_view');
			$this->load->view('templates/footer_view');			
		}
	}
}
