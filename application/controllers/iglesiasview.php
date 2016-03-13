<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Iglesiasview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('iglesia_model','my_model');
	}

	public function index()
	{
		$this->load->view('templates/navegacion');
		
		$this->load->view('iglesias');
		$this->load->view('templates/footer');
	}

	public function datos($id){
		$this->data['item'] 	= $this->my_model->find($id);
		$this->load->view('templates/navegacion');
		echo $this->load->view('datosiglesia.php', $this->data); 
		$this->load->view('templates/footer');
	}

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}
}