<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	private $data = array();

	public function __construct() {
		parent::__construct();

		$this->load->model('Salidas_model');

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
		$this->data['meses'] = $meses_Dropdown;

		$anios_Dropdown = array();
		$anios_Dropdown[''] = 'Seleccionar';
		for ($i=2018; $i <= date("Y"); $i++) { 
			$anios_Dropdown[$i] = $i;
		}

		$this->data['anios'] = $anios_Dropdown;

		$tipo_reporte_Dropdown = array(
			'' => 'Seleccionar',
	        'alumnos' => 'Alumnos',
	        'docentes' => 'Docentes',
	        'padres' => 'Padres',
		);

		$this->data['tipos_reporte'] = $tipo_reporte_Dropdown;

		$this->data['page_header'] = 'Reportes';
		$this->data['page_url'] = 'reportes';
		$this->data['page_icon'] = 'fa-link';
		$this->data['optional_description'] = 'Panel de administración de reportes';

		$this->load->library('session');
		if(!$this->session->userdata('logeado')) redirect();
	}

	public function index() {
		$data = $this->data;

		$this->load->view('templates/header_view', $data);
		$this->load->view('reportes/reportes_view');
		$this->load->view('templates/footer_view');
	}

	public function search() {
		$config = array(
	        array('field' => 'tipo_reporte', 'label' => 'Tipo de reporte', 'rules' => 'required'),
	        array('field' => 'anio', 'label' => 'Año', 'rules' => 'required'),
	        array('field' => 'mes', 'label' => 'Mes', 'rules' => 'required')
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$anio = $this->input->post('anio');
			$mes = $this->input->post('mes');
			
			$data = $this->data;
			$data['salidas'] = $this->Salidas_model->findByYearAndMonth($anio, $mes);
			if($this->input->post('export_pdf')) {
				$this->load->library('html2pdf');

				$data['mes'] = $mes;
				$data['anio'] = $anio;
				$this->html2pdf->folder('./assets/pdfs/');
				$this->html2pdf->filename('reporte.pdf');
				$this->html2pdf->paper('a4', 'portrait');
				$this->html2pdf->html($this->load->view('reportes/reportes_template01_view.php', $data, true));
				$this->html2pdf->create('download');
			}


			$this->load->view('templates/header_view', $data);
			$this->load->view('reportes/reportes_table_view');
			$this->load->view('templates/footer_view');
		}
	}

	public function template() {
		$data['salidas'] = $this->Salidas_model->findByYearAndMonth(123, 123);
		$this->load->view('reportes/reportes_template01_view.php', $data);
	}
}
