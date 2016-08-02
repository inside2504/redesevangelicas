<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Evento extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('evento_model','my_model');
			$grupos = array('admin','Poster');
			if (!$this->ion_auth->in_group($grupos)){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/eventoadmin', $this->data);
	}

	public function eventoadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('evento/eventoadmin');
			$this->load->view('templates/footadmin');
		} elseif ($this->ion_auth->in_group('Poster')) {
			$this->load->view('templates/naveedit');
			$this->load->view('evento/eventoadmin');
			$this->load->view('templates/footedit');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regevento(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('evento/regevento');
			$this->load->view('templates/footadmin');
		} elseif ($this->ion_auth->in_group('Poster')) {
			$this->load->view('templates/naveedit');
			$this->load->view('evento/regevento');
			$this->load->view('templates/footedit');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regimg(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('evento/regimg');
			$this->load->view('templates/footadmin');
		}elseif ($this->ion_auth->in_group('Poster')) {
			$this->load->view('templates/naveedit');
			$this->load->view('evento/regimg');
			$this->load->view('templates/footedit');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function subimg() {
        
        $config['upload_path'] = "assets/eventos/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_view', $error);
        } else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            $data = array('upload_data' => $this->upload->data());
            $id = $this->input->post('id');
            $imagen = $file_info['file_name'];
            $subir = $this->my_model->subir($id,$imagen);
            $data['id'] = $id;
            $data['imagen'] = $imagen;
            redirect('evento/eventoadmin');
        }
    }

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regevento.php', $this->data);
	}

	public function guardar(){
	    if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('evento/regevento');
		} else{
			$data['title']	=$this->input->post('title');
			$data['body']	=$this->input->post('event');
			$data['class']	=$this->input->post('class');
			$data['start']	=$this->input->post('from');
			$data['end']	=$this->input->post('to');

        	$this->my_model->create($data);

			redirect('evento/eventoadmin');
		}
	}

	public function getAll()
	{
		if($this->input->is_ajax_request())
		{
			$this->load->model('evento_model');
			$events = $this->evento_model->getAll();
			echo json_encode(
				array(
					"success" => 1,
					"result" => $events
				)
			);
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
		echo $this->load->view('evento/editevento.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('evento/editevento/'.$id);

		} else {
        	$this->evento_model->update($id);
			redirect('evento/eventoadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('evento/eventoadmin');
	}
}