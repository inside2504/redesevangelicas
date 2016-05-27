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

	//Controladores de todas las vistas para dar de alta
	public function regiglesia(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/regiglesia');
		$this->load->view('templates/footadmin');
	}

	public function regservicio(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/regservicio');
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

	public function regmaterial(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/regmaterial');
		$this->load->view('templates/footadmin');
	}

	public function regevento(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/regevento');
		$this->load->view('templates/footadmin');
	}

	public function regproducto(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/regproducto');
		$this->load->view('templates/footadmin');
	}

	//Controladores de todas las vistas para editar
	public function editiglesia(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/editiglesia');
		$this->load->view('templates/footadmin');
	}

	public function editservicio(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/editservicio');
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

	public function editmaterial(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/editmaterial');
		$this->load->view('templates/footadmin');
	}

	public function editevento(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/editevento');
		$this->load->view('templates/footadmin');
	}

	public function editproducto(){
		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('administracion/editproducto');
		$this->load->view('templates/footadmin');
	}
}