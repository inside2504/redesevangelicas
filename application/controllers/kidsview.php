<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kidsview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('kids_model','my_model');
	}

	public function index()
	{
		$this->load->view('templates/navegacion');
		
		$this->load->view('kids');
		$this->load->view('templates/footer');
	}

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}
}