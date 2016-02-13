<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Iglesia extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('iglesia_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/igleadmin', $this->data);
	}

	public function igleadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('iglesia/igleadmin');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regiglesia(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('iglesia/regiglesia');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editiglesia(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('iglesia/editiglesia');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regiglesia.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('iglesia/regiglesia');
		} else{
			$data['nomIgle'] = $this->input->post('iglesia');
			$data['pasIgle'] = $this->input->post('pastor');
			$data['descIgle'] = $this->input->post('descripcion');
			$data['eslogIgle'] = $this->input->post('eslogan');
			$data['logo'] = $this->input->post('logo');
			$data['calleIgle'] = $this->input->post('calle');
			$data['numExtIgle'] = $this->input->post('numexterior');
			$data['numInteIgle'] = $this->input->post('numinterior');
			$data['coloIgle'] = $this->input->post('colonia');
			$data['codPostIgle'] = $this->input->post('codigo');
			$data['ciudadIgle'] = $this->input->post('ciudad');
			$data['edoIgle'] = $this->input->post('edo');
			$data['telIgle'] = $this->input->post('telefono');
			$data['correEleIgle'] = $this->input->post('correo');
			$data['fbIgle'] = $this->input->post('fb');
			$data['twIgle'] = $this->input->post('tw');
			$data['otrasRedesIgle'] = $this->input->post('otrasred');
			$this->my_model->create($data);
			redirect('iglesia/igleadmin');
		}
	}

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}

	public function editar($id){
		$this->data['item'] 	= $this->my_model->find($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/editiglesia.php', $this->data); 
	}

	public function actualizar($id){
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('iglesia/editiglesia/'.$id);

		} else {
			$data['nomIgle'] = $this->input->post('iglesia');
			$data['pasIgle'] = $this->input->post('pastor');
			$data['descIgle'] = $this->input->post('descripcion');
			$data['eslogIgle'] = $this->input->post('eslogan');
			$data['logo'] = $this->input->post('logo');
			$data['calleIgle'] = $this->input->post('calle');
			$data['numExtIgle'] = $this->input->post('numexterior');
			$data['numInteIgle'] = $this->input->post('numinterior');
			$data['coloIgle'] = $this->input->post('colonia');
			$data['codPostIgle'] = $this->input->post('codigo');
			$data['ciudadIgle'] = $this->input->post('ciudad');
			$data['edoIgle'] = $this->input->post('edo');
			$data['telIgle'] = $this->input->post('telefono');
			$data['correEleIgle'] = $this->input->post('correo');
			$data['fbIgle'] = $this->input->post('fb');
			$data['twIgle'] = $this->input->post('tw');
			$data['otrasRedesIgle'] = $this->input->post('otrasred');
			$this->my_model->update($id,$data);
			redirect('iglesia/igleadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
	}
}