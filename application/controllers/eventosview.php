<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventosview extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('evento_model','my_model');
		$this->load->library('pagination');
	}

	public function index()
	{
		$this->load->view('templates/navegacion');
		$this->load->view('eventos');
		$this->load->view('templates/footer');
	}

	public function anuncio()
	{
		$pagination = 5;
	    $config['base_url'] = base_url().'index.php/eventosview/anuncio/';
	    $config['total_rows'] = $this->db->get('evento')->num_rows();
	    $config['per_page'] = $pagination;
	    $config['num_links'] = 4;
	    $config['uri_segment']  = 3;
	    $config['next_link'] = 'Siguiente »';
	    $config['prev_link'] = '« Anterior';
	    $config['last_link'] = 'Último';

	    $this->pagination->initialize($config);

	    $data['results'] = $this->my_model->get_eventos($pagination, $this->uri->segment(3));

		$this->load->view('templates/navegacion');
		$this->load->view('anuncio',$data);
		$this->load->view('templates/footer');
	}

	public function getAll()
	{
		if($this->input->is_ajax_request())
		{
			$this->load->model('evento_model');
			$events = $this->evento_model->getAll();
			echo json_encode(
				array(
					"success" => 1,
					"result" => $events
				)
			);
		}
	}
}