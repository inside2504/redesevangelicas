<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empresasview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('empresa_model','my_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		$pagination = 3;
	    $config['base_url'] = base_url().'empresasview/index/';
	    $config['total_rows'] = $this->db->get('empresa')->num_rows();
	    $config['per_page'] = $pagination;
	    $config['num_links'] = 4;
	    $config['uri_segment']  = 3;
	    $config['next_link'] = 'Siguiente »';
	    $config['prev_link'] = '« Anterior';
	    $config['last_link'] = 'Último »';

	    $this->pagination->initialize($config);
	   
	    $data['results'] = $this->my_model->get_empresas($pagination, $this->uri->segment(3));
		$this->load->view('templates/navegacion');
		$this->load->view('empresas',$data);
		$this->load->view('templates/footer');
	}

	public function datos($id){
		$this->data['item'] 	= $this->my_model->find($id);
		$this->load->view('templates/navegacion');
		echo $this->load->view('datosempresa.php', $this->data); 
		$this->load->view('templates/footer');
	}

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}
}