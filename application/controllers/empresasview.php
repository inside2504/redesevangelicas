<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresasview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('templates/navegacion');
		
		$this->load->view('empresas');
		$this->load->view('templates/footer');
	}
}