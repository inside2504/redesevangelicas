<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Localidad extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('localidad_model','my_model');
			$grupos = array('admin');
			if (!$this->ion_auth->in_group($grupos)){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/localadmin', $this->data);
	}

	public function localadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('localidad/localadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function reglocal(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('localidad/reglocal');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editlocal(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('localidad/editlocal');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/reglocal.php', $this->data);
	}

	//Funcion para guardar locals
	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('localidad/reglocal');
		} else{
			$data['nombreLocalidad'] 	= $this->input->post('nombre');
			$this->my_model->create($data);
			redirect('localidad/localadmin');
		}
    }

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}

	public function editar($id){
		$this->data['item'] 	= $this->my_model->find($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('localidad/editlocal.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('localidad/editlocal/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'nombreLocalidad'		=> $this->input->post('nombre')
			);
			$this->my_model->update($id,$data);
			redirect('localidad/localadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('localidad/localadmin');
	}

	public function dele($id){
		echo $this->my_model->eliminar($id);
		redirect('localidad/localadmin');
	}
}