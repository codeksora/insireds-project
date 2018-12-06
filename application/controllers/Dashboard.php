<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $data = array();

	public function __construct() {
		parent::__construct();

		$this->data['page_header'] = 'Escritorio';
		$this->data['page_url'] = 'dashboard';
		$this->data['page_icon'] = 'fa-dashboard';
		$this->data['optional_description'] = 'Panel de administración general';

		$this->load->library('session');
		if(!$this->session->userdata('logeado')) redirect();
	}

	public function index() {
		$data = $this->data;

		$this->load->view('templates/header_view', $data);
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('templates/footer_view');
	}
}
