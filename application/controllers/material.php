<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Material extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('material_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/mateadmin', $this->data);
	}

	public function mateadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('material/mateadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regmaterial(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('material/regmaterial');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editmaterial(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('material/editmaterial');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regmaterial.php', $this->data);
	}

	public function guardar(){
			$nombremate = $this->input->post('nombremate');
			$filename = uniqid();
			$config['file_name'] =$filename;
			$img = 'imagen';
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
			redirect('material/regmaterial');
		} else{
			$data['cateMate'] 	= $this->input->post('categoria');
			$data['nombMate'] 	= $this->input->post('nombremate');
			$data['autMate'] 	= $this->input->post('autor');
			$data['descMate'] 	= $this->input->post('descripcion');
			$data['imgMate'] 	= $filename;
			$this->upload->do_upload($img);
			$this->my_model->create($data);
			redirect('material/mateadmin');
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
		echo $this->load->view('material/editmaterial.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$nombremate = $this->input->post('nombremate');
		$filename = uniqid();
		$config['file_name'] =$filename;
		$img = 'imagen';
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
			redirect('material/editmaterial/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'cateMate'	 => $this->input->post('categoria'),
				'nombMate'	 => $this->input->post('nombremate'),
				'autMate'	 => $this->input->post('autor'),
				'descMate'	 => $this->input->post('descripcion'),
				'imgMate' 	 => $filename				
			);
			var_dump($data);
			$this->upload->do_upload($img);
			$this->my_model->update($id,$data);
			redirect('material/mateadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('material/mateadmin');
	}
}