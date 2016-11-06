<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Libreriaview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('libreria_model','my_model');
		$this->load->model('localidad_model', 'localidad');
		$this->load->library('pagination');
	}

	public function index()
	{
		$pagination = 12;
	    $config['base_url'] = base_url().'libreriaview/index/';
	    $config['total_rows'] = $this->db->get('producto')->num_rows();
	    $config['per_page'] = $pagination;
	    $config['num_links'] = 4;
	    $config['uri_segment']  = 3;
	    $config['next_link'] = 'Siguiente »';
	    $config['prev_link'] = '« Anterior';
	    $config['last_link'] = 'Último';

	    $this->pagination->initialize($config);

	    //Obtener la cookie
		$localidad = isset($_COOKIE['localidad']) ? $_COOKIE['localidad'] : 'Xalapa';

	    $data['results'] = $this->my_model->get_all($pagination, $this->uri->segment(3), $localidad);
	    
		$this->load->view('templates/navegacion');
		$this->load->view('libreria',$data);
		$this->load->view('templates/footer');
	}

	public function datos($id){
		$this->data['item'] = $this->my_model->findAll($id);
		$this->load->view('templates/navegacion');
		echo $this->load->view('datoslibreria.php', $this->data); 
		$this->load->view('templates/footer');
	}

	public function buscar(){
		$q=$_GET['buscar'];
		$this->dato['total'] = $this->my_model->getAll();
		$this->data['item'] = $this->my_model->get_like($q);
		$this->load->view('templates/navegacion');
		echo $this->load->view('busclib.php', $this->data, $this->dato); 
		$this->load->view('templates/footer');
	}
}