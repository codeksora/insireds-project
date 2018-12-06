<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docentes extends CI_Controller {
	private $url_redirect = 'docentes';
	private $data = array();

	public function __construct() {
		parent::__construct();

		$this->load->library('session');
        if(!$this->session->userdata('logeado')) redirect();

		$this->load->model('Docentes_model');
		$this->load->model('Escuelas_model');
		$this->load->model('Fotos_model');
		$this->load->model('TiposUsuario_model');
		$this->load->model('Login_model');

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $config['encrypt_name']			= TRUE;
        $this->load->library('upload', $config);

		$this->data['municipios'] = $this->Municipios_model->findAll_Dropdown();
		$this->data['grupos'] = $this->Grupos_model->findAll_Dropdown();
		$this->data['colonias'] = $this->Colonias_model->findAll_Dropdown();
		$this->data['grados'] = $this->Grados_model->findAll_Dropdown();
		$this->data['escuelas'] = $this->Escuelas_model->findAll_Dropdown();
		$this->data['tipos_usuario'] = $this->TiposUsuario_model->findAll_Dropdown();
		$this->data['page_header'] = 'Docentes';
		$this->data['page_url'] = 'docentes';
		$this->data['page_icon'] = 'fa-graduation-cap';
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
		if($id == NULL || $this->Docentes_model->findById($id) == FALSE) {
			redirect($this->url_redirect);
		} else {
			$data = $this->data;
			$data['breadcrumb'] = 'Editar docente';
			$data['docente'] = $this->Docentes_model->findById($id);

			$this->load->view('templates/header_view', $data);
			$this->load->view('docentes/docentes_editar_view');
			$this->load->view('templates/footer_view');			
		}
	}

	public function eliminar($id = NULL) {
		if($id == NULL || $this->Docentes_model->findById($id) == FALSE) {
			redirect($this->url_redirect);
		} else {
			$data = $this->data;
			$data['breadcrumb'] = 'Eliminar docente';
			$data['docente'] = $this->Docentes_model->findById($id);

			$this->load->view('templates/header_view', $data);
			$this->load->view('docentes/docentes_eliminar_view');
			$this->load->view('templates/footer_view');			
		}
	}

	public function agregar_s() {

			$config = array(
		        array('field' => 'nombre', 'label' => 'Nombre', 'rules' => 'required'),
		        array('field' => 'apellidoPa', 'label' => 'Apellido Paterno', 'rules' => 'required'),
		        array('field' => 'apellidoMa', 'label' => 'Apellido Materno', 'rules' => 'required'),
		        array('field' => 'calle', 'label' => 'Calle', 'rules' => 'required'),
		        array('field' => 'numeroInt', 'label' => 'Int.', 'rules' => 'required|integer'),
		        array('field' => 'numeroExt', 'label' => 'Ext.', 'rules' => 'required|integer'),
		        array('field' => 'municipio', 'label' => 'Municipio', 'rules' => 'required|integer'),
		        array('field' => 'colonia', 'label' => 'Colonia', 'rules' => 'required|integer'),
		        array('field' => 'ine', 'label' => 'INE', 'rules' => 'required|is_unique[docente.ine]', 'errors' => array(
                        'is_unique' => 'El valor de %s ya existe.',
                ),),
		        array('field' => 'telefono', 'label' => 'Téléfono', 'rules' => 'required'),
		        array('field' => 'escuela', 'label' => 'Escuela', 'rules' => 'required|integer'),
		        array('field' => 'contrasena', 'label' => 'Contraseña', 'rules' => 'required|min_length[4]'),
		        array('field' => 'tipo_usuario', 'label' => 'Tipo de usuario', 'rules' => 'required|integer')
			);
			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE) {
	            $this->agregar();
	        } else {
	        	
	        	$login_id = $this->Login_model->add();
	        	
	        	$data_docente['nombre'] = $this->input->post('nombre');
				$data_docente['apellidoPa'] = $this->input->post('apellidoPa');
				$data_docente['apellidoMa'] = $this->input->post('apellidoMa');
				$data_docente['calle'] = $this->input->post('calle');
				$data_docente['numeroInt'] = $this->input->post('numeroInt');
				$data_docente['numeroExt'] = $this->input->post('numeroExt');
				$data_docente['municipio'] = $this->input->post('municipio');
				$data_docente['colonia'] = $this->input->post('colonia');
				$data_docente['telefono'] = $this->input->post('telefono');
				$data_docente['ine'] = $this->input->post('ine');
				// $data_docente['tutor'] = $this->input->post('tutor');
				$data_docente['escuela'] = $this->input->post('escuela');
				$data_docente['usuario'] = $login_id;
				$data_docente['estado'] = 1;

				$data_foto['foto'] = 'user_profile.jpg';
		  		$data_foto['nombre'] = $this->input->post('nombre') . ' ' . $this->input->post('apellidoPa') . ' ' . $this->input->post('apellidoMa');

	  			$this->Fotos_model->add($data_foto);
	  			$foto_id = $this->db->insert_id();
	  			$data_docente['foto'] = $foto_id;

				$this->Docentes_model->add($data_docente);

				$flash_resp = 'Se ha agregado al docente satisfactoriamente.';

	            $this->session->set_flashdata('agregar_docente', $flash_resp);

	            redirect('docentes/agregar');
	        }

	}

	public function editar_s($id = NULL) {

		if($id == NULL || $this->Docentes_model->findById($id) == FALSE) redirect('docentes');

		$config = array(
		        array('field' => 'nombre', 'label' => 'Nombre', 'rules' => 'required'),
		        array('field' => 'apellidoPa', 'label' => 'Apellido Paterno', 'rules' => 'required'),
		        array('field' => 'apellidoMa', 'label' => 'Apellido Materno', 'rules' => 'required'),
		        array('field' => 'calle', 'label' => 'Calle', 'rules' => 'required'),
		        array('field' => 'numeroInt', 'label' => 'Int.', 'rules' => 'required|integer'),
		        array('field' => 'numeroExt', 'label' => 'Ext.', 'rules' => 'required|integer'),
		        array('field' => 'municipio', 'label' => 'Municipio', 'rules' => 'required|integer'),
		        array('field' => 'colonia', 'label' => 'Colonia', 'rules' => 'required|integer'),
		        array('field' => 'telefono', 'label' => 'Téléfono', 'rules' => 'required'),
		        array('field' => 'escuela', 'label' => 'Escuela', 'rules' => 'required|integer')
			);
			$this->form_validation->set_rules($config);

        //Si hace envio de datos desde formulario
    	if ($this->form_validation->run() == FALSE) { 

			$this->editar($id);
		} else { 

			// Si la validación es aceptada.
			$data_docente['nombre'] = $this->input->post('nombre');
			$data_docente['apellidoPa'] = $this->input->post('apellidoPa');
			$data_docente['apellidoMa'] = $this->input->post('apellidoMa');
			$data_docente['calle'] = $this->input->post('calle');
			$data_docente['numeroInt'] = $this->input->post('numeroInt');
			$data_docente['numeroExt'] = $this->input->post('numeroExt');
			$data_docente['municipio'] = $this->input->post('municipio');
			$data_docente['colonia'] = $this->input->post('colonia');
			$data_docente['telefono'] = $this->input->post('telefono');
			$data_docente['escuela'] = $this->input->post('escuela');
            $this->Docentes_model->upd($id, $data_docente);

            $flash_resp = 'Se actualizó al docente satisfactoriamente.';

            $this->session->set_flashdata('editar_docente', $flash_resp);

            redirect('docentes/' . $id . '/editar');
		}
	}

	public function editar_photo_s($id = NULL) {

		if($id == NULL || $this->Docentes_model->findById($id) == FALSE) redirect('docentes');
		
		$foto_id = $this->input->post('foto_id');

		if ( ! $this->upload->do_upload('foto')) { 

            $flash_resp = $this->upload->display_errors();

            $this->session->set_flashdata('editar_foto_docente_error', $flash_resp);

            $this->editar($id);
        } else {

            $flash_resp = 'Foto actualizada.';

            $this->session->set_flashdata('editar_foto_docente_success', $flash_resp);

            $data_foto['foto'] = $this->upload->data('file_name');

            $this->Fotos_model->upd($foto_id, $data_foto);

            redirect('docentes/' . $id . '/editar');
        }

	}

	public function editar_contrasena_s($id = NULL) {

		if($id == NULL || $this->Docentes_model->findById($id) == FALSE) redirect('docentes');

		$config = array(
	        array('field' => 'nueva_contrasena', 'label' => 'Nueva contraseña', 'rules' => 'required|min_length[6]'),
	        array('field' => 'repetir_contrasena', 'label' => 'Repetir nueva contraseña', 'rules' => 'required|matches[nueva_contrasena]')
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE) { 

			$this->editar($id);
		} else { 
			$docente = $this->Docentes_model->findById($id);

			$options = ['cost' => 12];
    		$encripted_pass = password_hash($this->input->post('nueva_contrasena'), PASSWORD_BCRYPT, $options);

			$data_docente['contrasena'] = $encripted_pass;

			$this->Login_model->upd($docente->usuario, $data_docente);

			$flash_resp = 'Se actualizó la contraseña satisfactoriamente.';

            $this->session->set_flashdata('editar_contrasena_docente_success', $flash_resp);
			redirect('docentes/' . $id . '/editar');
		}

	}

	public function eliminar_s($id = NULL) {
		if($id == NULL || $this->Docentes_model->findById($id) == FALSE) redirect('docentes');

		$flash_resp = 'Elimminado correctamente.';
		$this->session->set_flashdata('eliminar_docente_success', $flash_resp);

		$this->Docentes_model->del($id);

		redirect('docentes');
	}
}
