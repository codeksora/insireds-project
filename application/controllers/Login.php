<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('session');
		
	}

	public function index() {
		if($this->session->userdata('logeado')) redirect('dashboard');
		$this->load->view('login/login_view');
	}

	public function auth() {
		$config = array(
	        array('field' => 'usuario', 'label' => 'Usuario', 'rules' => 'trim|required|min_length[3]'),
	        array('field' => 'contrasena', 'label' => 'Contraseña', 'rules' => 'trim|required|min_length[3]')
	    );

	    $this->form_validation->set_rules($config);

	    if($this->form_validation->run() == FALSE) {
	    	$data = array(
	    		'errors' => validation_errors()
	    	);
	    	$this->session->set_flashdata($data);

	    	$this->load->view('login/login_view');
	    } else {
	    	$nombreUsuario = $this->input->post('usuario');
	    	$contrasena = $this->input->post('contrasena');

	    	$this->load->model('Login_model');

	    	$usuarioId = $this->Login_model->loginUser($nombreUsuario, $contrasena);

	    	if($usuarioId) {
	    		$this->load->model('Docentes_model');
	    		$docente = $this->Docentes_model->getDocenteLoginById($usuarioId);
	    		$user_data = array(
	    			'usuario_id' => $usuarioId,
	    			'nombre_usuario' => $nombreUsuario,
	    			'nombre_completo' => $docente->nombre . ' ' . $docente->apellidoPa,
	    			'tipo_usuario' => $docente->tipo,
	    			'tipo_usuario_id' => $docente->tipousuario_id,
	    			'foto_usuario' => $docente->foto_img,
	    			'logeado' => TRUE
	    		);
	    		$this->session->set_userdata($user_data);

	    		redirect('dashboard');
	    	} else {
	    		$data = array(
		    		'errors' => 'Usuario y/o contraseña son incorrectas.'
		    	);
		    	$this->session->set_flashdata($data);
	    		$this->load->view('login/login_view');
	    	}
	    }
	}

	public function logout() {
		if($this->session->userdata('logeado')) {
			$this->session->sess_destroy(); redirect();
		} else redirect('dashboard');
		
	}
}
