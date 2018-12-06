<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Padres extends CI_Controller {
	private $url_redirect = 'padres';
	private $data = array();

	public function __construct() {
		parent::__construct();

        $this->load->library('session');
        if(!$this->session->userdata('logeado')) redirect();

		$this->load->model('Padres_model');
		$this->load->model('Parentescos_model');
		$this->load->model('Fotos_model');

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
		$this->data['parentescos'] = $this->Parentescos_model->findAll_Dropdown();
		$this->data['page_header'] = 'Padres';
		$this->data['page_url'] = 'padres';
		$this->data['page_icon'] = 'fa-user';
		$this->data['optional_description'] = 'Panel de administración de padres';
	}
	/* VISTAS */
	public function index() {
		$data = $this->data;

		$data['padres'] = $this->Padres_model->findAll();
		
		$this->load->view('templates/header_view', $data);
		$this->load->view('padres/padres_view');
		$this->load->view('templates/footer_view');
	}

	public function agregar() {
		$data = $this->data;
		//Breadcrumb (Nombre general, url general, Nombre del módulo, icono de fontAwesome)
		$data['breadcrumb'] = 'Agregar padre';

		$this->load->view('templates/header_view', $data);
		$this->load->view('padres/padres_agregar_view');
		$this->load->view('templates/footer_view');
	}

	public function editar($id = NULL) {
		if($id == NULL || $this->Padres_model->findById($id) == FALSE) {
			redirect('padres');
		} else {
			$data = $this->data;
			$data['breadcrumb'] = 'Editar padre';
			$data['padre'] = $this->Padres_model->findById($id);			

			$this->load->view('templates/header_view', $data);
			$this->load->view('padres/padres_editar_view');
			$this->load->view('templates/footer_view');			
		}
	}

	public function eliminar($id = NULL) {
		if($id == NULL || $this->Padres_model->findById($id) == FALSE) {
			redirect($this->url_redirect);
		} else {
			$data = $this->data;
			$data['breadcrumb'] = 'Eliminar alumno';
			$data['padre'] = $this->Padres_model->findById($id);

			$this->load->view('templates/header_view', $data);
			$this->load->view('padres/padres_eliminar_view');
			$this->load->view('templates/footer_view');			
		}
	}

	/* FUNCIONES EVENTOS */
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
		        array('field' => 'telefono', 'label' => 'Teléfono', 'rules' => 'required|numeric|max_length[10]'),
		        array('field' => 'ine', 'label' => 'INE', 'rules' => 'required|is_unique[padre.ine]', 'errors' => array(
                        'is_unique' => 'El valor de %s ya existe.')),
		        array('field' => 'parentesco', 'label' => 'Grupo', 'rules' => 'required|integer')
			);
			$this->form_validation->set_rules($config);

	        if ($this->form_validation->run() == FALSE) {
	            $this->agregar();
	        } else {
				$data_padre['nombre'] = $this->input->post('nombre');
				$data_padre['apellidoPa'] = $this->input->post('apellidoPa');
				$data_padre['apellidoMa'] = $this->input->post('apellidoMa');
				$data_padre['calle'] = $this->input->post('calle');
				$data_padre['numeroInt'] = $this->input->post('numeroInt');
				$data_padre['numeroExt'] = $this->input->post('numeroExt');
				$data_padre['municipio'] = $this->input->post('municipio');
				$data_padre['colonia'] = $this->input->post('colonia');
				$data_padre['telefono'] = $this->input->post('telefono');
				$data_padre['ine'] = $this->input->post('ine');
				$data_padre['parentesco'] = $this->input->post('parentesco');
				$data_padre['estado'] = 1;
				$data_padre['huella'] = 1;

				$data_foto['foto'] = 'user_profile.jpg';
		  		$data_foto['nombre'] = $this->input->post('nombre') . ' ' . $this->input->post('apellidoPa') . ' ' . $this->input->post('apellidoMa');
	  			$this->Fotos_model->add($data_foto); // Agregamos los datos de la foto

	  			$foto_id = $this->db->insert_id(); // Obtenemos el id de la foto agregada
	            $data_padre['foto'] = $foto_id; // Lo asignamos a una variable para que se agrege el id a tabla alumnos
	            $this->Padres_model->add($data_padre);

	            $flash_resp = 'Se ha agregado al padre satisfactoriamente.';

	            $this->session->set_flashdata('agregar_padre', $flash_resp);

	            redirect('padres/agregar');
	        }

	}

	public function editar_s($id = NULL) {

		if($id == NULL || $this->Padres_model->findById($id) == FALSE) redirect('padres');

		$config = array(
	        array('field' => 'nombre', 'label' => 'Nombre', 'rules' => 'required'),
	        array('field' => 'apellidoPa', 'label' => 'Apellido Paterno', 'rules' => 'required'),
	        array('field' => 'apellidoMa', 'label' => 'Apellido Materno', 'rules' => 'required'),
	        array('field' => 'calle', 'label' => 'Calle', 'rules' => 'required'),
	        array('field' => 'numeroInt', 'label' => 'Int.', 'rules' => 'required|integer'),
	        array('field' => 'numeroExt', 'label' => 'Ext.', 'rules' => 'required|integer'),
	        array('field' => 'municipio', 'label' => 'Municipio', 'rules' => 'required|integer'),
	        array('field' => 'colonia', 'label' => 'Colonia', 'rules' => 'required|integer'),
	        array('field' => 'telefono', 'label' => 'Teléfono', 'rules' => 'required|numeric|max_length[10]'),
	        // array('field' => 'ine', 'label' => 'INE', 'rules' => 'required|is_unique[padre.ine]', 'errors' => array(
         //            'is_unique' => 'El valor de %s ya existe.')),
	        array('field' => 'parentesco', 'label' => 'Grupo', 'rules' => 'required|integer')
		);
		$this->form_validation->set_rules($config);

        //Si hace envio de datos desde formulario
    	if ($this->form_validation->run() == FALSE) { 

			$this->editar($id);
		} else { 

			// Si la validación es aceptada.
			$data_padre['nombre'] = $this->input->post('nombre');
			$data_padre['apellidoPa'] = $this->input->post('apellidoPa');
			$data_padre['apellidoMa'] = $this->input->post('apellidoMa');
			$data_padre['calle'] = $this->input->post('calle');
			$data_padre['numeroInt'] = $this->input->post('numeroInt');
			$data_padre['numeroExt'] = $this->input->post('numeroExt');
			$data_padre['municipio'] = $this->input->post('municipio');
			$data_padre['colonia'] = $this->input->post('colonia');
			$data_padre['telefono'] = $this->input->post('telefono');
			//$data_padre['ine'] = $this->input->post('ine');
			$data_padre['parentesco'] = $this->input->post('parentesco');
            $this->Padres_model->upd($id, $data_padre);

            $flash_resp = 'Se actualizó al padre satisfactoriamente.';

            $this->session->set_flashdata('editar_padre', $flash_resp);

            redirect('padres/' . $id . '/editar');
		}
	}

	public function editar_photo_s($id = NULL) {

		if($id == NULL || $this->Padres_model->findById($id) == FALSE) redirect('padres');
		
		$foto_id = $this->input->post('foto_id');

		if ( ! $this->upload->do_upload('foto')) { 

            $flash_resp = $this->upload->display_errors();

            $this->session->set_flashdata('editar_foto_padre_error', $flash_resp);

            $this->editar($id);
        } else {

            $flash_resp = 'Foto actualizada.';

            $this->session->set_flashdata('editar_foto_padre_success', $flash_resp);

            $data_foto['foto'] = $this->upload->data('file_name');

            $this->Fotos_model->upd($foto_id, $data_foto);

            redirect('padres/' . $id . '/editar');
        }

	}

	public function eliminar_s($id = NULL) {
		if($id == NULL || $this->Padres_model->findById($id) == FALSE) redirect('padres');

		$flash_resp = 'Eliminado correctamente.';
		$this->session->set_flashdata('eliminar_padre_success', $flash_resp);

		$this->Padres_model->del($id);

		redirect('padres');
	}
}
