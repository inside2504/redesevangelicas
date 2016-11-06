<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Bolsa extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('bolsa_model','my_model');
			$this->load->model('localidad_model','index');
			$grupos = array('admin');
			if (!$this->ion_auth->in_group($grupos)){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/bolsaadmin', $this->data);
	}

	public function bolsaadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('bolsa/bolsaadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regoferta(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('bolsa/regoferta');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editoferta(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('bolsa/editoferta');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regoferta.php', $this->data);
	}

	//Funcion para guardar bolsas
	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('bolsa/regoferta');
		} else{
			$data['iglesiaVendedor'] 	= $this->input->post('iglesia');
			$data['tituloOferta'] 		= $this->input->post('titulo');
			$data['ubicacionOferta'] 	= $this->input->post('ubicacion');
			$data['solicitanteOferta'] 	= $this->input->post('solicitante');
			$data['salarioOferta'] 		= $this->input->post('sueldo');
			$data['descripOferta'] 		= $this->input->post('descripcion');
			$data['fechaPublicacion']	= $this->input->post('publicacion');
			$data['vigenciaOferta'] 	= $this->input->post('expiracion');
			$data['horarioTrabajo'] 	= $this->input->post('horario');
			$data['diasLaborales'] 		= $this->input->post('dias');
			$data['experienciaOferta'] 	= $this->input->post('experiencia');
			$data['telefonoVendedor'] 	= $this->input->post('telef');
			$data['correoContacto'] 	= $this->input->post('correo');
			$data['localidad'] 	= $this->input->post('localidad');
			$this->my_model->create($data);
			redirect('bolsa/bolsaadmin');
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
		echo $this->load->view('bolsa/editoferta.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('bolsa/editoferta/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'iglesiaVendedor'		=> $this->input->post('iglesia'),
				'tituloOferta' 			=> $this->input->post('titulo'),
				'ubicacionOferta' 		=> $this->input->post('ubicacion'),
				'solicitanteOferta' 	=> $this->input->post('solicitante'),
				'salarioOferta' 		=> $this->input->post('sueldo'),
				'descripOferta' 		=> $this->input->post('descripcion'),
				'fechaPublicacion'		=> $this->input->post('publicacion'),
				'vigenciaOferta' 		=> $this->input->post('expiracion'),
				'horarioTrabajo' 		=> $this->input->post('horario'),
				'diasLaborales' 		=> $this->input->post('dias'),
				'experienciaOferta' 	=> $this->input->post('experiencia'),
				'telefonoVendedor'	 	=> $this->input->post('telef'),
				'correoContacto'		=> $this->input->post('correo'),
				'localidad'		=> $this->input->post('localidad')
			);
			$this->my_model->update($id,$data);
			redirect('bolsa/bolsaadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('bolsa/bolsaadmin');
	}

	public function dele($id){
		echo $this->my_model->eliminar($id);
		redirect('bolsa/bolsaadmin');
	}
}