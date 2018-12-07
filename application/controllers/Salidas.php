<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salidas extends CI_Controller {

	private $data = array();

	public function __construct() {
		parent::__construct();

		$this->load->helper('date');

		$this->load->model('Padres_model');
		$this->load->model('Alumnos_model');

		$this->data['page_header'] = 'Salidas';
		$this->data['page_url'] = 'salidas';
		$this->data['page_icon'] = 'fa-link';
		$this->data['optional_description'] = 'Panel de administración de salidas';

		$this->load->library('session');
		if(!$this->session->userdata('logeado')) redirect();
	}

	public function index() {
		$data = $this->data;
		$this->load->view('templates/header_view', $data);
		$this->load->view('salidas/salidas_view');
		$this->load->view('templates/footer_view');
	}

	public function search() {
		$data = $this->data;

		$config = array(
	        array('field' => 'ine', 'label' => 'INE', 'rules' => 'required'),
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$ine = $this->input->post('ine');
			if($this->Padres_model->findByINE($ine)) {
				$padre = $this->Padres_model->findByINE($ine);
				$data['padre'] = $padre;
				$data['alumno'] = $this->Alumnos_model->findByPadre($padre->id);

				$this->load->view('templates/header_view', $data);
				$this->load->view('salidas/salidas_result_view');
				$this->load->view('templates/footer_view');

			} else {
				$flash_resp = 'INE no esta registrado o no está asociado a ningún alumno.';

	            $this->session->set_flashdata('salida_error', $flash_resp);

				$this->load->view('templates/header_view', $data);
				$this->load->view('salidas/salidas_view');
				$this->load->view('templates/footer_view');
			}
		}
	}

	public function registro() {
		if($this->input->post()) {
			$alumno_id = $this->input->post('alumno_id');
			$padre_id = $this->input->post('padre_id');
			$usuario_id = $this->input->post('usuario_id');

			$this->load->model('Salidas_model');

			
			date_default_timezone_set('America/Mexico_City');

			$data['fecha'] = date("Y-m-d");
			$data['hora'] = date("H:i:s");
			$data['accidentes'] = '';
			$data['obsAcci'] = '';
			$data['atenciones'] = '';
			$data['obsAten'] = '';
			$data['obsAdic'] = '';
			$data['alumno'] = $alumno_id;
			$data['usuario'] = $usuario_id;
			$data['padre'] = $padre_id;

			$this->Salidas_model->add($data);

			$flash_resp = 'Se ha registrado la salida del alumno.';

            $this->session->set_flashdata('salida_success', $flash_resp);

			redirect('salidas');
		}
	}
	
}
