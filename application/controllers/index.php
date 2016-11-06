<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->model('index_model','my_model');
		$this->load->model('localidad_model','localidad');
		$this->load->helper('cookie');
	}

	public function index()
	{
		//Obtener la cookie
		$localidad = isset($_COOKIE['localidad']) ? $_COOKIE['localidad'] : 'Xalapa';

		//Establecer cookie
		setcookie('localidad', $_GET['localidad'], time() + (60 * 60 * 24 * 30), '/');

		$this->data['results'] = $this->localidad->get();

		$this->load->view('templates/navegacion');
		if ($this->ion_auth->logged_in())
		{
			$this->load->view('templates/naveadmin');
		}
		$this->load->view('index',$this->data);
		$this->load->view('templates/footer');
	}

	public function setLocalidad(){
		$localidad = $this->input->post('localidad');
		setcookie('localidad', $localidad, time() + (60 * 60 * 24 * 30), '/');
		redirect('#','refresh');
	}

	public function buscar(){
		$q=$_GET['buscar'];
		$this->dato['total'] = $this->my_model->get();
		$this->data['item'] = $this->my_model->get_like($q);
		$this->load->view('templates/navegacion');
		echo $this->load->view('index', $this->data, $this->dato); 
		$this->load->view('templates/footer');
	}
}