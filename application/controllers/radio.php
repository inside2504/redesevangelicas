<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Radio extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('radio_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/servadmin', $this->data);
	}

	public function radioadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('radio/radioadmin');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regradio(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('radio/regradio');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editradio(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('radio/editradio');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regradio.php', $this->data);
	}

	public function guardar(){
		$imagen = $this->input->post('fotoservi');
		$filename = uniqid().$imagen;
		$config['file_name'] =$filename;
		$img = 'fotoservi';
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
        }elseif($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('radio/regradio');
		} else{
			$data['IglePert'] = $this->input->post('iglesia');
			$data['PastRec'] = $this->input->post('pastor');
			$data['NamePrestServ'] = $this->input->post('nombre');
			$data['ApePatPrestServ'] = $this->input->post('apepat');
			$data['ApeMatPrestServ'] = $this->input->post('apemat');
			$data['ServOfrecido'] = $this->input->post('servofrece');
			$data['DescServi'] = $this->input->post('descripbreve');
			$data['CalleServ'] = $this->input->post('calle');
			$data['NumExtSer'] = $this->input->post('numexterior');
			$data['NumIntServ'] = $this->input->post('numinterior');
			$data['ColServ'] = $this->input->post('colonia');
			$data['CodPostServ'] = $this->input->post('codigo');
			$data['CiudadServ'] = $this->input->post('ciudad');
			$data['EdoServ'] = $this->input->post('edo');
			$data['TelefServ'] = $this->input->post('telefono');
			$data['telCelServ'] = $this->input->post('celular');
			$data['CorreElectServ'] = $this->input->post('correo');
			$data['DescDetServ'] = $this->input->post('descripserv');
			$data['FbServ'] = $this->input->post('fb');
			$data['TwServ'] = $this->input->post('tw');
			$data['OtrasRedesServ'] = $this->input->post('otrasred');
			$data['EslogServ'] = $this->input->post('eslogan');
			$data['ImgPrestServ'] = $filename;
			$this->upload->do_upload($img);
			$this->my_model->create($data);
			redirect('radio/servadmin');
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
		echo $this->load->view('radio/editradio.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$logo = $this->input->post('fotoservi');
		$filename = uniqid().$logo;
		$config['file_name'] =$filename;
		$img = 'fotoservi';
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
			redirect('radio/editradio/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'IglePert'			 => $this->input->post('iglesia'),
				'PastRec'			 => $this->input->post('pastor'),
				'NamePrestServ'		 => $this->input->post('nombre'),
				'ApePatPrestServ'	 => $this->input->post('apepat'),
				'ApeMatPrestServ'	 => $this->input->post('apemat'),
				'ServOfrecido'		 => $this->input->post('servofrece'),
				'DescServi'			 => $this->input->post('descripbreve'),
				'CalleServ'			 => $this->input->post('calle'),
				'NumExtSer'			 => $this->input->post('numexterior'),
				'NumIntServ'		 => $this->input->post('numinterior'),
				'ColServ'			 => $this->input->post('colonia'),
				'CodPostServ'		 => $this->input->post('codigo'),
				'CiudadServ'		 => $this->input->post('ciudad'),
				'EdoServ'			 => $this->input->post('edo'),
				'TelefServ'			 => $this->input->post('telefono'),
				'telCelServ'		 => $this->input->post('celular'),
				'CorreElectServ'	 => $this->input->post('correo'),
				'DescDetServ'		 => $this->input->post('descripserv'),
				'FbServ'			 => $this->input->post('fb'),
				'TwServ'			 => $this->input->post('tw'),
				'OtrasRedesServ'	 => $this->input->post('otrasred'),
				'EslogServ'			 => $this->input->post('eslogan'),
				'ImgPrestServ'		 => $filename
			);
			var_dump($data);
			$this->upload->do_upload($img);
			$this->my_model->update($id,$data);
			redirect('radio/servadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('radio/servadmin');
	}
}