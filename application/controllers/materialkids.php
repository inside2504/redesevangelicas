<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Materialkids extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('materialkids_model','my_model');
			if (!$this->ion_auth->in_group('admin')){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/matekidsadmin', $this->data);
	}

	public function matekidsadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('materialkids/matekidsadmin');
			$this->load->view('templates/footadmin');
			}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regmatekids(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('materialkids/regmatekids');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function editmatekids(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('materialkids/editmatekids');
			$this->load->view('templates/footadmin');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function registrar(){
		$this->data['errors'] = $this->session->flashdata('errors');
		echo $this->render->view('path/to/view/regmatekids.php', $this->data);
	}

	public function guardar(){
		if($this->form_validation->run('controller_validation') != false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			var_dump('errors');
			redirect('materialkids/regmatekids');
		} else{
			$data['nombreMateKids'] 				= $this->input->post('nombre');
			$data['descripcionMateKids'] 			= $this->input->post('descripcion');
			$data['linkDescarga'] 					= $this->input->post('link');
			$this->my_model->create($data);
			redirect('materialkids/matekidsadmin');
		}
	}

	public function regimg(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('materialkids/regimg');
			$this->load->view('templates/footadmin');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function subimg() {
        
        $config['upload_path'] = "assets/materialkids/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '10000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('materialkids/regimg', $error);
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
            redirect('materialkids/matekidsadmin');
        }
    }

    public function editarImg($id){
		$this->data['cols'] 	= $this->my_model->findImg($id);
		$this->data['errors'] 	= $this->session->flashdata('errors');
		$this->load->view('templates/naveadmin');
		echo $this->load->view('materialkids/editimg.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

    public function editimg($id) {
        
        $config['upload_path'] = "assets/materialkids/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '10000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';
        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('materialkids', $error);
            $this->load->view('templates/footadmin');
        } else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            $data = array('upload_data' => $this->upload->data());
            $idi = $this->input->post('idi');
            $id = $this->input->post('id');
            $imagen = $file_info['file_name'];
            $subir = $this->my_model->updateImg($idi,$id,$imagen);
            $data['id'] = $id;
            $data['imagen'] = $imagen;
            redirect('materialkids/matekidsadmin');
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
		echo $this->load->view('materialkids/editmatekids.php', $this->data); 
		$this->load->view('templates/footadmin');
	}

	public function actualizar($id){
		
		$this->form_validation->set_rules('');
		if($this->form_validation->run('controller_validation')!=false){
			$errors = validation_errors();
			$this->session->set_flashdata('errors',$errors);
			redirect('materialkids/matekidsadmin/'.$id);

		} else {
			$id = $this->input->post('id');
			$data = array(
				'nombreMateKids'			=> $this->input->post('nombre'),
				'descripcionMateKids' 		=> $this->input->post('descripcion'),
				'linkDescarga'	 			=> $this->input->post('link'),			
			);
			$this->my_model->update($id,$data);
			redirect('materialkids/matekidsadmin');
		}
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('materialkids/matekidsadmin');
	}

}