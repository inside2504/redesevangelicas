<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Empresa extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('empresa_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/empreadmin', $this->data);
	}

	public function empreadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('empresa/empreadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regempresa(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('empresa/regempresa');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editempresa(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('empresa/editempresa');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regempresa.php', $this->data);
	}

	public function guardar(){
	    $logo = $this->input->post('logo');
		$path = $_FILES['logo']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$filename = uniqid().".{$ext}";
		$config['file_name'] =$filename;
		$logo = 'logo';
		$foto = 'foto';
	    $config['upload_path'] = "assets/empresa/";
	    $config['allowed_types'] = "jpg|jpeg|png|bmp";
	    $config['max_size'] = "5000";
	    $config['max_width'] = "500";
	    $config['max_height'] = "500";
		$this->load->library('upload', $config);
		if ((!$this->upload->do_upload($logo)) & (!$this->upload->do_upload($foto))) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
		}elseif($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('empresa/regempresa');
		} else{
			$data['IglePertEmpr'] 		= $this->input->post('iglesia');
			$data['PastRecEmpr'] 		= $this->input->post('pastor');
			$data['NameEmpr'] 			= $this->input->post('empresa');
			$data['GiroEmpres'] 		= $this->input->post('giro');
			$data['DescrEmpr'] 			= $this->input->post('descripcion');
			$data['CalleEmpr'] 			= $this->input->post('calle');
			$data['NumExtEmpr'] 		= $this->input->post('numexterior');
			$data['NumIntEmpr'] 		= $this->input->post('numinterior');
			$data['ColEmpr'] 			= $this->input->post('colonia');
			$data['CodPostEmpr'] 		= $this->input->post('codigo');
			$data['CiudadEmpr'] 		= $this->input->post('ciudad');
			$data['EdoEmpr'] 			= $this->input->post('edo');
			$data['TelefEmpr'] 			= $this->input->post('telefono');
			$data['CorreElectEmpr'] 	= $this->input->post('correo');
			$data['DescServEmpr'] 		= $this->input->post('descripserv');
			$data['FbEmpr'] 			= $this->input->post('fb');
			$data['TwEmpr'] 			= $this->input->post('tw');
			$data['EslogEmpr'] 			= $this->input->post('eslogan');
			$data['LogoEmpr'] 			= $filename;
			$data['NombRespEmpr'] 		= $this->input->post('nombre');
			$data['ApePatRespEmpr'] 	= $this->input->post('apepat');
			$data['ApeMatRespEmpr'] 	= $this->input->post('apemat');
			$data['TelefRespEmpr'] 		= $this->input->post('teleres');
			$data['FotoRespEmpr'] 		= $filename;
			$this->upload->do_upload($logo);
			$this->upload->do_upload($foto);
			var_dump($data);
			$this->my_model->create($data);
			redirect('empresa/empreadmin');
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
		echo $this->load->view('empresa/editempresa.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$logo = $this->input->post('logo');
		$path = $_FILES['logo']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$filename = uniqid().".{$ext}";
		$config['file_name'] =$filename;
		$logo = 'logo';
		$foto = 'foto';
	    $config['upload_path'] = "assets/empresa/";
	    $config['allowed_types'] = "jpg|jpeg|png|bmp";
	    $config['max_size'] = "5000";
	    $config['max_width'] = "500";
	    $config['max_height'] = "500";

		$this->load->library('upload', $config);
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('empresa/editempresa/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'IglePertEmpr'	 		=> $this->input->post('iglesia'),
				'PastRecEmpr' 			=> $this->input->post('pastor'),
				'NameEmpr'	 			=> $this->input->post('empresa'),
				'GiroEmpres' 			=> $this->input->post('giro'),
				'DescrEmpr' 			=> $this->input->post('descripcion'),
				'CalleEmpr' 			=> $this->input->post('calle'),
				'NumExtEmpr' 			=> $this->input->post('numexterior'),
				'NumIntEmpr' 			=> $this->input->post('numinterior'),
				'ColEmpr' 				=> $this->input->post('colonia'),
				'CodPostEmpr' 			=> $this->input->post('codigo'),
				'CiudadEmpr' 			=> $this->input->post('ciudad'),
				'EdoEmpr' 				=> $this->input->post('edo'),
				'TelefEmpr' 			=> $this->input->post('telefono'),
				'CorreElectEmpr' 		=> $this->input->post('correo'),
				'DescServEmpr'	 		=> $this->input->post('descripserv'),
				'FbEmpr' 				=> $this->input->post('fb'),
				'TwEmpr' 				=> $this->input->post('tw'),
				'EslogEmpr' 			=> $this->input->post('eslogan'),
				'LogoEmpr'	 			=> $this->input->post('logo'),
				'NombRespEmpr'	 		=> $this->input->post('nombre'),
				'ApePatRespEmpr' 		=> $this->input->post('apepat'),
				'ApeMatRespEmpr' 		=> $this->input->post('apemat'),
				'TelefRespEmpr' 		=> $this->input->post('teleres'),
				'FotoRespEmpr'	 		=> $this->input->post('foto')
			);
			var_dump($data);
			$this->upload->do_upload($logo);
			$this->upload->do_upload($foto);
			$this->my_model->update($id,$data);
			redirect('empresa/empreadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('empresa/empreadmin');
	}
}