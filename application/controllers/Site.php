<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Inicio';
		$dataContent['debug'] = $debug;
		//$dataContent['sedes'] = $this->db->get_where('sede', array('estado' => 1))->result_array() ;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/inicio', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function quienesSomos()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Quiénes Somos';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/quienesSomos', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function infoPacientes()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Información Pacientes';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/infoPacientes', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function infoMedicos()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Información Médicos';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/infoMedicos', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function servicios()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Servicios';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/servicios', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function galeria()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Galeria';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/galeria', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function noticias()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Noticias';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/noticias', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function contacto()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Contáctenos';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/contacto', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function consultas()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Consultas';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/consultas', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function pulmonar()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Pruebas de Función Pulmonar';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/pulmonar', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function suenio()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Estudios de Sueño';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/suenio', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function respiratorio()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Terapia y Cuidado Respiratorio';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/respiratorio', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function especiales()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Programas Especiales';
		$dataContent['debug'] = $debug;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', array() );
		$data['content'] = $this->load->view('neumolab/templates/especiales', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}
	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */