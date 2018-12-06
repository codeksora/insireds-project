<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {
	private $url_redirect = 'alumnos';
	private $data = array();

	public function __construct() {
		parent::__construct();

        $this->load->library('session');
        if(!$this->session->userdata('logeado')) redirect();

		$this->load->model('Alumnos_model');
		$this->load->model('Padres_model');
		$this->load->model('Fotos_model');

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['encrypt_name']			= TRUE;
        $this->load->library('upload', $config);

        $config = array(
	        array('field' => 'nombre', 'label' => 'Nombre', 'rules' => 'required'),
	        array('field' => 'apellidoPa', 'label' => 'Apellido Paterno', 'rules' => 'required'),
	        array('field' => 'apellidoMa', 'label' => 'Apellido Materno', 'rules' => 'required'),
	        array('field' => 'calle', 'label' => 'Calle', 'rules' => 'required'),
	        array('field' => 'numeroInt', 'label' => 'Int.', 'rules' => 'required|integer'),
	        array('field' => 'numeroExt', 'label' => 'Ext.', 'rules' => 'required|integer'),
	        array('field' => 'municipio', 'label' => 'Municipio', 'rules' => 'required|integer'),
	        array('field' => 'colonia', 'label' => 'Colonia', 'rules' => 'required|integer'),
	        array('field' => 'grado', 'label' => 'Grado', 'rules' => 'required|integer'),
	        array('field' => 'atencion', 'label' => 'Grado de Atención', 'rules' => 'required|integer'),
	        array('field' => 'grupo', 'label' => 'Grupo', 'rules' => 'required|integer'),
	        array('field' => 'tutor', 'label' => 'Padre / Tutor', 'rules' => 'required|integer'),
	        array('field' => 'autorizado1', 'label' => 'Tercer Autorizado 1', 'rules' => 'required|integer'),
	        array('field' => 'autorizado2', 'label' => 'Tercer Autorizado 2', 'rules' => 'required|integer')
		);
		$this->form_validation->set_rules($config);

		$this->data['municipios'] = $this->Municipios_model->findAll_Dropdown();
		$this->data['grupos'] = $this->Grupos_model->findAll_Dropdown();
		$this->data['colonias'] = $this->Colonias_model->findAll_Dropdown();
		$this->data['grados'] = $this->Grados_model->findAll_Dropdown();
		$this->data['gradosAtencion'] = $this->GradosAtencion_model->findAll_Dropdown();
		$this->data['padres'] = $this->Padres_model->findAll_Dropdown();
		$this->data['page_header'] = 'Alumnos';
		$this->data['page_url'] = 'alumnos';
		$this->data['page_icon'] = 'fa-book';
		$this->data['optional_description'] = 'Panel de administración de alumnos';
	}
	/* VISTAS */
	public function index() {
		$data = $this->data;

		$data['alumnos'] = $this->Alumnos_model->findAll();
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('alumnos/alumnos_view');
		$this->load->view('templates/footer_view');
	}

	public function agregar() {
		$data = $this->data;
		//Breadcrumb (Nombre general, url general, Nombre del módulo, icono de fontAwesome)
		$data['breadcrumb'] = 'Agregar alumno';

		$this->load->view('templates/header_view', $data);
		$this->load->view('alumnos/alumnos_agregar_view');
		$this->load->view('templates/footer_view');
	}

	public function editar($id = NULL) {
		if($id == NULL || $this->Alumnos_model->findById($id) == FALSE) {
			redirect('alumnos');
		} else {
			$data = $this->data;
			$data['breadcrumb'] = 'Editar alumno';
			$data['alumno'] = $this->Alumnos_model->findById($id);			

			$this->load->view('templates/header_view', $data);
			$this->load->view('alumnos/alumnos_editar_view');
			$this->load->view('templates/footer_view');			
		}
	}

	public function eliminar($id = NULL) {
		if($id == NULL || $this->Alumnos_model->findById($id) == FALSE) {
			redirect($this->url_redirect);
		} else {
			$data = $this->data;
			$data['breadcrumb'] = 'Eliminar alumno';
			$data['alumno'] = $this->Alumnos_model->findById($id);

			$this->load->view('templates/header_view', $data);
			$this->load->view('alumnos/alumnos_eliminar_view');
			$this->load->view('templates/footer_view');			
		}
	}

	/* FUNCIONES EVENTOS */
	public function agregar_s() {

	        if ($this->form_validation->run() == FALSE) {
	            $this->agregar();
	        } else {
				$data_alumno['nombre'] = $this->input->post('nombre');
				$data_alumno['apellidoPa'] = $this->input->post('apellidoPa');
				$data_alumno['apellidoMa'] = $this->input->post('apellidoMa');
				$data_alumno['calle'] = $this->input->post('calle');
				$data_alumno['numeroInt'] = $this->input->post('numeroInt');
				$data_alumno['numeroExt'] = $this->input->post('numeroExt');
				$data_alumno['municipio'] = $this->input->post('municipio');
				$data_alumno['colonia'] = $this->input->post('colonia');
				$data_alumno['grado'] = $this->input->post('grado');
				$data_alumno['grupo'] = $this->input->post('grupo');
				$data_alumno['tutor'] = $this->input->post('tutor');
				$data_alumno['autorizado1'] = $this->input->post('autorizado1');
				$data_alumno['autorizado2'] = $this->input->post('autorizado2');
				$data_alumno['atencion'] = $this->input->post('atencion');
				$data_alumno['estado'] = 1;

				$data_foto['foto'] = 'user_profile.jpg';
		  		$data_foto['nombre'] = $this->input->post('nombre') . ' ' . $this->input->post('apellidoPa') . ' ' . $this->input->post('apellidoMa');
	  			$this->Fotos_model->add($data_foto); // Agregamos los datos de la foto

	  			$foto_id = $this->db->insert_id(); // Obtenemos el id de la foto agregada
	            $data_alumno['foto'] = $foto_id; // Lo asignamos a una variable para que se agrege el id a tabla alumnos
	            $this->Alumnos_model->add($data_alumno);

	            $flash_resp = 'Se ha agregado al alumno satisfactoriamente.';

	            $this->session->set_flashdata('agregar_alumno', $flash_resp);

	            redirect('alumnos/agregar');
	        }

	}

	public function editar_s($id = NULL) {

		if($id == NULL || $this->Alumnos_model->findById($id) == FALSE) redirect('alumnos');

        //Si hace envio de datos desde formulario
    	if ($this->form_validation->run() == FALSE) { 

			$this->editar($id);
		} else { 

			// Si la validación es aceptada.
			$data_alumno['nombre'] = $this->input->post('nombre');
			$data_alumno['apellidoPa'] = $this->input->post('apellidoPa');
			$data_alumno['apellidoMa'] = $this->input->post('apellidoMa');
			$data_alumno['calle'] = $this->input->post('calle');
			$data_alumno['numeroInt'] = $this->input->post('numeroInt');
			$data_alumno['numeroExt'] = $this->input->post('numeroExt');
			$data_alumno['municipio'] = $this->input->post('municipio');
			$data_alumno['colonia'] = $this->input->post('colonia');
			$data_alumno['grado'] = $this->input->post('grado');
			$data_alumno['grupo'] = $this->input->post('grupo');
			$data_alumno['tutor'] = $this->input->post('tutor');
			$data_alumno['autorizado1'] = $this->input->post('autorizado1');
			$data_alumno['autorizado2'] = $this->input->post('autorizado2');
			$data_alumno['atencion'] = $this->input->post('atencion');
            $this->Alumnos_model->upd($id, $data_alumno);

            $flash_resp = 'Se actualizó al alumno satisfactoriamente.';

            $this->session->set_flashdata('editar_alumno', $flash_resp);

            redirect('alumnos/' . $id . '/editar');
		}
	}

	public function editar_photo_s($id = NULL) {

		if($id == NULL || $this->Alumnos_model->findById($id) == FALSE) redirect('alumnos');
		
		$foto_id = $this->input->post('foto_id');

		if ( ! $this->upload->do_upload('foto')) { 

            $flash_resp = $this->upload->display_errors();

            $this->session->set_flashdata('editar_foto_alumno_error', $flash_resp);

            $this->editar($id);
        } else {

            $flash_resp = 'Foto actualizada.';

            $this->session->set_flashdata('editar_foto_alumno_success', $flash_resp);

            $data_foto['foto'] = $this->upload->data('file_name');

            $this->Fotos_model->upd($foto_id, $data_foto);

            redirect('alumnos/' . $id . '/editar');
        }

	}

	public function eliminar_s($id = NULL) {
		if($id == NULL || $this->Alumnos_model->findById($id) == FALSE) redirect('alumnos');

		$flash_resp = 'Elimminado correctamente.';
		$this->session->set_flashdata('eliminar_alumno_success', $flash_resp);

		$this->Alumnos_model->del($id);

		redirect('alumnos');
	}
}
