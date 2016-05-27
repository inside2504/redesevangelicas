<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kidsview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('kids_model','my_model');
		$this->load->library('pagination');
	}

	public function index(){
		$this->load->view('templates/navegacion');
		$this->load->view('kids');
		$this->load->view('templates/footer');
	}

	public function serieskids()
	{
		$pagination = 3;
	    $config['base_url'] = base_url().'index.php/kidsview/serieskids/';
	    $config['total_rows'] = $this->db->get('kids')->num_rows();
	    $config['per_page'] = $pagination;
	    $config['num_links'] = 4;
	    $config['uri_segment']  = 3;
	    $config['first_link'] = 'Primero';
	    $config['next_link'] = 'Siguiente »';
	    $config['prev_link'] = '« Anterior';
	    $config['last_link'] = 'Último';

	    $this->pagination->initialize($config);

	    $data['results'] = $this->my_model->get_contenido($pagination, $this->uri->segment(3));

		$this->load->view('templates/navegacion');
		$this->load->view('serieskids',$data);
		$this->load->view('templates/footer');
	}

	public function mostrar($id){
		$this->data['item'] = $this->my_model->find($id);
		echo $this->render->view('path/to/view/mostrar.html');
	}

	public function buscar(){
		$q=$_GET['buscar'];
		$this->dato['total'] = $this->my_model->get();
		$this->data['item'] = $this->my_model->get_like($q);
		$this->load->view('templates/navegacion');
		echo $this->load->view('buscserie.php', $this->data, $this->dato); 
		$this->load->view('templates/footer');
	}

	public function tvkids(){
		$this->load->view('templates/navegacion');
		echo $this->load->view('tvkids.php'); 
		$this->load->view('templates/footer');
	}

	public function musikids(){
		$this->load->view('templates/navegacion');
		echo $this->load->view('musikids.php'); 
		$this->load->view('templates/footer');
	}

}