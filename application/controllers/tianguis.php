<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Tianguis extends CI_controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->library(array('ion_auth','form_validation'));
			$this->load->model('tianguis_model','my_model');
			$grupos = array('admin','Tianguis');
			if (!$this->ion_auth->in_group($grupos)){
				redirect('/');
			}
		}

	public function index(){
		$this->data['items'] = $this->my_model->all();
		echo $this->render->view('path/to/view/tianadmin', $this->data);
	}

	public function tianadmin(){	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->in_group('admin')) {
			$this->load->view('templates/naveadmin');
			$this->load->view('tianguis/tianadmin');
			$this->load->view('templates/footadmin');
			}
		elseif ($this->ion_auth->in_group('Tianguis')) {
			$this->load->view('templates/navelib');
			$this->load->view('tianguis/prodadmin');
			$this->load->view('templates/footlib');
		}
		else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function regproducto(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('tianguis/regproducto');
			$this->load->view('templates/footadmin');
		}
		elseif ($this->ion_auth->in_group('Tianguis')) {
			$this->load->view('templates/navelib');
			$this->load->view('tianguis/regproducto');
			$this->load->view('templates/footlib');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	//Funcion para guardar productos
	public function guardarProd(){
		$config['upload_path'] = "assets/tianguis/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('tianguis/regproducto', $error);
            $this->load->view('templates/footadmin');
        } else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            $data = array('upload_data' => $this->upload->data());
            $imagen = $file_info['file_name'];
            $nomigle = $this->input->post('nombreigle');
            $nompas = $this->input->post('nombrepas');
            $nomven = $this->input->post('nombrevend');
            $nomprod = $this->input->post('nombreprod');
			$desc = $this->input->post('descripcionprod');
			$tel = $this->input->post('telefono');
			$prec= $this->input->post('precioprod');
			$stat = $this->input->post('status');
			$localidad = $this->input->post('localidad');
            $subir = $this->my_model->subir($imagen,$nomigle,$nompas,$nomven,$nomprod,$desc,$tel,$prec,$stat,$localidad);

            $data['imgProducto'] = $imagen;
            $data['nombreIglesia'] = $nomigle;
            $data['nombrePastor'] = $nompas;
            $data['nombreVendedor'] = $nomven;
            $data['nombreProducto'] = $nomprod;
			$data['descripcionProducto'] = $desc;
			$data['telefVendedor'] = $tel;
			$data['precioProducto'] = $prec;
			$data['status'] = $stat;
			$data['localidad'] = $localidad;
            redirect('tianguis/regvendedor');
		}
	}

	public function regvendedor(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		} elseif ($this->ion_auth->in_group('admin')){
			$this->load->view('templates/naveadmin');
			$this->load->view('tianguis/regvendedor');
			$this->load->view('templates/footadmin');
		}
		elseif ($this->ion_auth->in_group('Tianguis')) {
			$this->load->view('templates/navelib');
			$this->load->view('tianguis/regvendedor');
			$this->load->view('templates/footlib');
		} else{
			return show_error('You must be an administrator to view this page.');
		}
	}

	public function guardarVend(){
		$config['upload_path'] = "assets/tianguis/";
        $config['allowed_types'] = "jpg|jpeg|png|bmp";
        $config['max_size'] = '5000';
        $config['max_width'] = '5000';
        $config['max_height'] = '5000';

        $this->load->library('upload', $config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('templates/naveadmin');
            $this->load->view('tianguis/regvendedor', $error);
            $this->load->view('templates/footadmin');
        } else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS 
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            $data = array('upload_data' => $this->upload->data());
            $imagen = $file_info['file_name'];
            $id = $this->input->post('id');
            $subir = $this->my_model->subirimg($id,$imagen);

            $data['imgVendedor'] = $imagen;
            $data['id'] = $id;
            redirect('tianguis/tianadmin');
		}
	}

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}

	public function eliminar($id){
		echo $this->my_model->delete($id);
		redirect('tianguis/tianadmin');
	}

	public function delete($id){
		echo $this->my_model->eliminar($id);
		redirect('tianguis/tianadmin');
	}
}