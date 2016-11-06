<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Regiones extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('regiones_model','my_model');
			$this->load->model('localidad_model','index');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/regionesadmin', $this->data);
	}

	public function regionesadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('regiones/regionesadmin');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regregiones(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('regiones/regregiones');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editregiones(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('regiones/editregiones');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regregiones.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('regiones/regregiones');
		} else{
			$data['linkMapa'] = $this->input->post('linkmapa');
			$data['localidad'] = $this->input->post('localidad');
			$this->my_model->create($data);
			redirect('regiones/regionesadmin');
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
		echo $this->load->view('regiones/editregiones.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
	    $this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('regiones/editregiones/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'linkMapa' 			=> $this->input->post('linkmapa'),
				'localidad'			=> $this->input->post('localidad')
			);
			$this->my_model->update($id,$data);
			redirect('regiones/regionesadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('regiones/regionesadmin');
	}
}