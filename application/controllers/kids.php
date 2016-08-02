<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Kids extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('kids_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/kidsadmin', $this->data);
	}

	public function kidsadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/kidsadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function musiadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/musiadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regkids(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/regkids');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editkids(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/editkids');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regkids.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('kids/regkids');
		} else{
			$data['TituloKids'] 					= $this->input->post('titulo');
			$data['TituloSerie_idTituloSerie'] 		= $this->input->post('serie');
			$data['TextKids'] 						= $this->input->post('texto');
			$data['FechaCreacion'] 					= $this->input->post('fecha');
			$data['LinkKids'] 						= $this->input->post('link');
			$this->my_model->create($data);
			redirect('kids/kidsadmin');
		}
	}

	public function regtitulo(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/regtitulo');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function guardartitulo(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('kids/regtitulo');
		} else{
			$data['NombreSerie'] 		= $this->input->post('nombre');
			$this->my_model->createtitulo($data);
			redirect('kids/kidsadmin');
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
		echo $this->load->view('kids/editkids.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			redirect('kids/kidsadmin/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'TituloKids'						=> $this->input->post('titulo'),
				'TituloSerie_idTituloSerie' 		=> $this->input->post('serie'),
				'TextKids'	 						=> $this->input->post('texto'),
				'FechaCreacion'	 					=> $this->input->post('fecha'),
				'LinkKids' 							=> $this->input->post('link')				
			);
			$this->my_model->update($id,$data);
			redirect('kids/kidsadmin');
		}
	}

	public function editartitulo($id){
		$this->data['item'] 	= $this->my_model->findtit($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('kids/edittitulo.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizartitulo($id){
		
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			redirect('kids/kidsadmin/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'NombreSerie' 		=> $this->input->post('nombre')			
			);
			var_dump($data);
			$this->my_model->updatetitulo($id,$data);
			redirect('kids/kidsadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('kids/kidsadmin');
	}

	public function eliminartitulo($id){
		echo $this->my_model->deletetitulo($id);
		redirect('kids/kidsadmin');
	}

	/* //////////////// Controladores para MusiKids /////////////////////*/

	public function regmusic(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/regmusikids');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editmusic(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('kids/editmusikids');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrarMusica(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regmusikids.php', $this->data);
	}

	public function guardarMusica(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('kids/regmusikids');
		} else{
			$data['nombreMusic'] 	= $this->input->post('nombre');
			$data['autorMusic']		= $this->input->post('autor');
			$data['linkMusic'] 		= $this->input->post('link');
			$this->my_model->createMusic($data);
			redirect('kids/musiadmin');
		}
	}

	public function editarMusica($id){
		$this->data['item'] 	= $this->my_model->findMus($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('kids/editmusikids.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizarMusica($id){
		
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			redirect('kids/musiadmin/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'nombreMusic'		=> $this->input->post('nombre'),
				'autorMusic'		=> $this->input->post('autor'),
				'linkMusic' 		=> $this->input->post('link'),			
			);
			$this->my_model->updateMusic($id,$data);
			redirect('kids/musiadmin');
		}
	}

	public function eliminarMusica($id){
		echo $this->my_model->deleteMusic($id);
		redirect('kids/musiadmin');
	}

}