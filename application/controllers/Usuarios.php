<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	private $url_redirect = 'docentes';
	private $data = array();

	public function __construct() {
		parent::__construct();

		$this->load->library('session');
        if(!$this->session->userdata('logeado')) redirect();

		$this->load->model('Docentes_model');
		$this->load->model('Padres_model');

		$this->data['municipios'] = $this->Municipios_model->findAll_Dropdown();
		$this->data['grupos'] = $this->Grupos_model->findAll_Dropdown();
		$this->data['colonias'] = $this->Colonias_model->findAll_Dropdown();
		$this->data['grados'] = $this->Grados_model->findAll_Dropdown();
		$this->data['page_header'] = 'Docentes';
		$this->data['page_url'] = 'docentes';
		$this->data['page_icon'] = 'fa-book';
		$this->data['optional_description'] = 'Panel de administración de alumnos';

	}

	public function index() {
		$data = $this->data;
		$data['docentes'] = $this->Docentes_model->findAll();
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('docentes/docentes_view');
		$this->load->view('templates/footer_view');
	}

	public function agregar() {
		$data = $this->data;
		$data['breadcrumb'] = 'Agregar docente';
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('docentes/docentes_agregar_view');
		$this->load->view('templates/footer_view');
	}

	public function editar($id = NULL) {
		if($id == NULL) {
			redirect($this->url_redirect);
		} else {
			$data = array(
				'docente' => $this->Docentes_model->findById($id),
				'municipios' => $this->Municipios_model->findAll(),
				'grupos' => $this->Grupos_model->findAll(),
				'colonias' => $this->Colonias_model->findAll(),
				'grados' => $this->Grados_model->findAll(),
				'padres' => $this->Padres_model->findAll()
			);
			$this->load->view('templates/header_view', $data);
			$this->load->view('docentes/docentes_editar_view');
			$this->load->view('templates/footer_view');			
		}
	}

	public function eliminar($id = NULL) {
		if($id == NULL) {
			redirect($this->url_redirect);
		} else {
			$data = array(
				'docente' => $this->Docentes_model->findById($id)
			);

			$this->load->view('templates/header_view', $data);
			$this->load->view('docentes/docentes_eliminar_view');
			$this->load->view('templates/footer_view');			
		}
	}
}
