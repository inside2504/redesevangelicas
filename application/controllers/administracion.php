<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administracion extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
	}

	//Realizar la comprobacion de usuario, si es administrador, poster o tianguero para que se cargue bien el menu en la vista
	//eso se debe hacer listando los grupos existentes y comparando. Revisas abogados para tener una idea.
	public function igleadmin()
	{	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/igleadmin');
		$this->load->view('templates/footadmin');
	}

	public function servadmin()
	{	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/servadmin');
		$this->load->view('templates/footadmin');
	}

	public function empreadmin()
	{	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/empreadmin');
		$this->load->view('templates/footadmin');
	}

	public function mateadmin()
	{	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/mateadmin');
		$this->load->view('templates/footadmin');
	}

	public function evenadmin()
	{	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/evenadmin');
		$this->load->view('templates/footadmin');
	}

	public function tianadmin()
	{	
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/tianadmin');
		$this->load->view('templates/footadmin');
	}

	public function regempresas(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/regempresas');
		$this->load->view('templates/footadmin');
	}

	public function editempresas(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/editempresas');
		$this->load->view('templates/footadmin');
	}
}