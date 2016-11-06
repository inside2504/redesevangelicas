<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Regionesview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('regiones_model','my_model');
		$this->load->model('localidad_model','localidad');
		$this->load->library('pagination');
	}

	public function index()
	{	
		$pagination = 12;
	    $config['base_url'] = base_url().'regionesview/index/';
	    $config['total_rows'] = $this->db->get('regiones')->num_rows();
	    $config['per_page'] = $pagination;
	    $config['num_links'] = 4;
	    $config['uri_segment']  = 3;
	    $config['next_link'] = 'Siguiente »';
	    $config['prev_link'] = '« Anterior';
	    $config['last_link'] = 'Último';

	    $this->pagination->initialize($config);

	    //Obtener la cookie
		$localidad = isset($_COOKIE['localidad']) ? $_COOKIE['localidad'] : 'Xalapa';

	    $data['results'] = $this->my_model->get_regiones($pagination, $this->uri->segment(3),$localidad);

		$this->load->view('templates/navegacion');
		$this->load->view('regiones',$data);
		$this->load->view('templates/footer');
	}

	public function buscar(){
		$q=$_GET['buscar'];
		$this->dato['total'] = $this->my_model->get();
		$this->data['item'] = $this->my_model->get_like($q);
		$this->load->view('templates/navegacion');
		echo $this->load->view('buscigle.php', $this->data, $this->dato); 
		$this->load->view('templates/footer');
	}
}