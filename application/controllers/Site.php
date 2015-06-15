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
		$dataContent['servicios'] = $dataMenu['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;
		$dataContent['neumolab'] = $this->db->get_where('contenido', array('id' => 1, 'estado' => 1))->row();
		$dataContent['neumolabslider'] = $this->db->get_where('contenidoslider', array('idcontenido' => $dataContent['neumolab']->id, 'estado' => 1))->result_array();

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/inicio', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function quienesSomos()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Quiénes Somos';
		$dataContent['debug'] = $debug;
		$dataMenu['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;
		
		$dataContent['institucion'] = $this->db->get_where('quienessomos', array('id' => 1, 'estado' => 1))->row() ;
		$dataContent['mision'] = $this->db->get_where('quienessomos', array('id' => 2, 'estado' => 1))->row() ;
		$dataContent['vision'] = $this->db->get_where('quienessomos', array('id' => 3, 'estado' => 1))->row() ;
		$dataContent['valores'] = $this->db->get_where('quienessomos', array('id' => 4, 'estado' => 1))->row() ;


		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/quienesSomos', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function infoPacientes()
	{
		$debug = false;

		$dataContent['debug'] = $debug;
		$dataMenu['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;

		$dataContent['infoPaciente'] = $this->db->get_where('contenido', array('id' => 2, 'estado' => 1))->row();
		$dataContent['infoPacienteSlider'] = $this->db->get_where('contenidoslider', array('idcontenido' => $dataContent['infoPaciente']->id, 'estado' => 1))->result_array();
		$dataTitle['titlePage'] = $dataContent['infoPaciente']->nombre;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/infoPacientes', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function infoMedicos()
	{
		$debug = false;

		$dataContent['debug'] = $debug;
		$dataMenu['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;

		$dataContent['infoMedico'] = $this->db->get_where('contenido', array('id' => 3, 'estado' => 1))->row();
		$dataContent['infoMedicoSlider'] = $this->db->get_where('contenidoslider', array('idcontenido' => $dataContent['infoMedico']->id, 'estado' => 1))->result_array();
		$dataTitle['titlePage'] = $dataContent['infoMedico']->nombre;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/infoMedicos', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function servicios()
	{
		$debug = false;

		$dataContent['debug'] = $debug;
		$dataMenu['servicios'] = $dataContent['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;

		$dataContent['infoServicio'] = $this->db->get_where('contenido', array('id' => 5, 'estado' => 1))->row();
		$dataContent['infoServicioSlider'] = $this->db->get_where('contenidoslider', array('idcontenido' => $dataContent['infoServicio']->id, 'estado' => 1))->result_array();
		$dataTitle['titlePage'] = $dataContent['infoServicio']->nombre;


		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/servicios', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function servicioDetalle()
	{
		$debug = false;
		$idServicio = $this->uri->segment(3);
		$dataContent['servicio'] = $this->db->get_where('servicio', array('id' => $idServicio, 'estado' => 1))->row() ;
		

		$dataTitle['titlePage'] = $dataContent['servicio']->nombre;
		$dataMenu['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;
		$dataContent['debug'] = $debug;


		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/servicioDetalle', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function galeria()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Galeria';
		$dataContent['debug'] = $debug;
		$dataMenu['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/galeria', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function noticias()
	{
		$debug = false;

		$dataTitle['titlePage'] = 'Noticias';
		$dataContent['debug'] = $debug;
		$dataMenu['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/noticias', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}

	public function contacto()
	{
		$debug = false;

		$dataContent['debug'] = $debug;
		$dataMenu['servicios'] = $this->db->get_where('servicio', array('estado' => 1))->result_array() ;

		$dataContent['infoContacto'] = $this->db->get_where('contenido', array('id' => 4, 'estado' => 1))->row();
		$dataContent['infoContactoSlider'] = $this->db->get_where('contenidoslider', array('idcontenido' => $dataContent['infoContacto']->id, 'estado' => 1))->result_array();
		$dataTitle['titlePage'] = $dataContent['infoContacto']->nombre;

		$data['header'] = $this->load->view('neumolab/blocks/header', $dataTitle);
		$data['menu'] = $this->load->view('neumolab/blocks/menu', $dataMenu );
		$data['content'] = $this->load->view('neumolab/templates/contacto', $dataContent);
		$data['footer'] = $this->load->view('neumolab/blocks/footer', array());
	}
	
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */