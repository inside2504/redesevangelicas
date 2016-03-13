<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tianguisview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('tianguis_model','my_model');
	}

	public function index()
	{
		$this->load->view('templates/navegacion');
		
		$this->load->view('tianguis');
		$this->load->view('templates/footer');
	}

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}
}