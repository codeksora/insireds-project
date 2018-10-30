<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$this->load->view('templates/header_view');
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('templates/footer_view');
	}
}
