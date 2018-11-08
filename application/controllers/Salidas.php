<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salidas extends CI_Controller {

	public function index() {
		$this->load->view('templates/header_view');
		$this->load->view('salidas/salidas_view');
		$this->load->view('templates/footer_view');
	}

	public function agregar() {
		$this->load->view('templates/header_view');
		$this->load->view('salidas/salidas_view');
		$this->load->view('templates/footer_view');
	}
	
}
