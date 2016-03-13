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
		$nombremate = $this->input->post('logo');
		$filename = uniqid();
		$config['file_name'] =$filename;
		$img = 'logo';
	    $config['upload_path'] = "assets/uploads/";
	    $config['allowed_types'] = "jpg|jpeg|png|bmp";
	    $config['max_size'] = "50000";
	    $config['max_width'] = "2000";
	    $config['max_height'] = "2000";

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($img)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }elseif($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('iglesia/regiglesia');
		} else{
			$data['nomIgle'] = $this->input->post('iglesia');
			$data['pasIgle'] = $this->input->post('pastor');
			$data['descIgle'] = $this->input->post('descripcion');
			$data['eslogIgle'] = $this->input->post('eslogan');
			$data['logo'] = $filename;
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
			$this->upload->do_upload($img);
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
		$this->load->view('templates/naveadmin');
		echo $this->load->view('iglesia/editiglesia.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$logo = $this->input->post('logo');
		$filename = uniqid();
		$config['file_name'] =$filename;
		$img = 'logo';
	    $config['upload_path'] = "assets/uploads/";
	    $config['allowed_types'] = "jpg|jpeg|png|bmp";
	    $config['max_size'] = "50000";
	    $config['max_width'] = "2000";
	    $config['max_height'] = "2000";
	    $this->form_validation->set_rules('');
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($img)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }elseif($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('iglesia/editiglesia/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'nomIgle' 			=> $this->input->post('iglesia'),
				'pasIgle' 			=> $this->input->post('pastor'),
				'descIgle' 			=> $this->input->post('descripcion'),
				'eslogIgle'			=> $this->input->post('eslogan'),
				'logo' 				=> $filename,
				'calleIgle' 		=> $this->input->post('calle'),
				'numExtIgle' 		=> $this->input->post('numexterior'),
				'numInteIgle' 		=> $this->input->post('numinterior'),
				'coloIgle' 			=> $this->input->post('colonia'),
				'codPostIgle' 		=> $this->input->post('codigo'),
				'ciudadIgle' 		=> $this->input->post('ciudad'),
				'edoIgle' 			=> $this->input->post('edo'),
				'telIgle' 			=> $this->input->post('telefono'),
				'correEleIgle' 		=> $this->input->post('correo'),
				'fbIgle' 			=> $this->input->post('fb'),
				'twIgle' 			=> $this->input->post('tw'),
				'otrasRedesIgle' 	=> $this->input->post('otrasred'),
			);
			var_dump($data);
			$this->upload->do_upload($img);
			$this->my_model->update($id,$data);
			redirect('iglesia/igleadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('iglesia/igleadmin');
	}
}