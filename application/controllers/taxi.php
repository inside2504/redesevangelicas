<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Taxi extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('taxi_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/taxiadmin', $this->data);
	}

	public function taxiadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('taxi/taxiadmin');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regtaxi(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('taxi/regtaxi');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function edittaxi(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('taxi/edittaxi');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regtaxi.php', $this->data);
	}

	public function guardar(){
		$nombremate = $this->input->post('fotoTax');
		$path = $_FILES['logo']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$filename = uniqid().".{$ext}";
		$config['file_name'] =$filename;
		$img = 'fotoTax';
	    $config['upload_path'] = "assets/taxi/";
	    $config['allowed_types'] = "jpg|jpeg|png|bmp";
	    $config['max_size'] = "5000";
	    $config['max_width'] = "500";
	    $config['max_height'] = "500";

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
			redirect('taxi/regtaxi');
		} else{
			$data['IglePerTaxi'] = $this->input->post('iglesia');
			$data['PastIgleTaxi'] = $this->input->post('pastor');
			$data['NombTaxista'] = $this->input->post('nombre');
			$data['ApePatTaxista'] = $this->input->post('apepaterno');
			$data['ApeMatTaxista'] = $this->input->post('apematerno');
			$data['NumEcoTaxi'] = $this->input->post('numeco');
			$data['PlacaNumTaxi'] = $this->input->post('placa');
			$data['HorarioTaxi'] = $this->input->post('horario');
			$data['TelefTaxi'] = $this->input->post('telefono');
			$data['FotoTaxista'] = $filename;
			$this->upload->do_upload($img);
			$this->my_model->create($data);
			redirect('taxi/Taxiadmin');
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
		echo $this->load->view('taxi/edittaxi.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$logo = $this->input->post('fotoTax');
		$filename = uniqid();
		$config['file_name'] =$filename;
		$img = 'fotoTax';
	    $config['upload_path'] = "assets/taxi/";
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
			redirect('taxi/edittaxi/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'IglePerTaxi'		=> $this->input->post('iglesia'),
				'PastIgleTaxi'		=> $this->input->post('pastor'),
				'NombTaxista'	 	=> $this->input->post('nombre'),
				'ApePatTaxista' 	=> $this->input->post('apepaterno'),
				'ApeMatTaxista' 	=> $this->input->post('apematerno'),
				'NumEcoTaxi' 		=> $this->input->post('numeco'),
				'PlacaNumTaxi'	 	=> $this->input->post('placa'),
				'HorarioTaxi' 		=> $this->input->post('horario'),
				'TelefTaxi' 		=> $this->input->post('telefono'),
				'FotoTaxista' 		=> $filename
			);
			var_dump($data);
			$this->upload->do_upload($img);
			$this->my_model->update($id,$data);
			redirect('taxi/Taxiadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('taxi/Taxiadmin');
	}
}