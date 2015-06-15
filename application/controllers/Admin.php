<?php
    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('securityuser');
        $this->load->library('grocery_CRUD');
    }

    ///// iconos 
    ///http://getbootstrap.com/2.3.2/base-css.html#icons
    public function getMenu() {
        $menu = array();
        array_push($menu, array("url" => "admin/servicio", "label" => "Servicio"));
        array_push($menu, array("url" => "admin/quienesSomos", "label" => "Quienes Somos"));
        array_push($menu, array("url" => "admin/contenido", "label" => "Contenido"));
        array_push($menu, array("url" => "admin/contenidoSlider", "label" => "Contenido Slider"));
        return $menu;
    }

    /* no modificar */

    public function getMenuAdmin() {
        $menu = array();
        array_push($menu, array("url" => "admin/usuario", "label" => "Usuarios"));
        return $menu;
    }

    public function showPage($output = null) {
        if ($this->securityCheck()) {
            $output->data['menu'] = $this->getMenu();
            $output->data['menuAdmin'] = $this->getMenuAdmin();
            $this->load->view('../../template/index.php', $output);
        } else {
            redirect("admin/login");
        }
    }

    public function index() {

        $this->showPage((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function usuario() {
        $crud = new grocery_CRUD();
        $crud->set_table("securityuser");

        $crud->columns('usuario', 'fecha_creacion');
        // $crud->fields('usuario','password','nombre','correo');


        $crud->field_type('password', 'password');

        $crud->change_field_type('fecha_creacion', 'invisible');
        $crud->change_field_type('fecha_modificacion', 'invisible');
        $crud->change_field_type('password_anterior', 'invisible');
        $crud->change_field_type('estado', 'invisible');

        $crud->callback_before_insert(array($this, 'usuario_insert_callback'));

        $output = $crud->render();
        $this->showPage($output);
    }

    public function login() {

        $this->load->view('../../template/login.php');
    }

    public function logout() {

        $securityUser = new SecurityUser();
        $securityUser->logout();
        $this->load->view('../../template/login.php');
    }

    public function autentificar() {

        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $securityUser = new SecurityUser();
        $securityUser->login($username, $password);

        redirect("admin/index");

        //  $this->load->view('../../template/login.php');
    }

    function usuario_insert_callback($post_array) {

        $post_array['fecha_creacion'] = date("d.m.Y h:i:s");
        $post_array['fecha_modificacion'] = date("d.m.Y h:i:s");
        $post_array['estado'] = 'A';
        $post_array['fecha_modificacion'] = date("d.m.Y h:i:s");
        $post_array['password_anterior'] = $post_array['password'];

        return $post_array;
    }

    function securityCheck() {

        $usuario = $this->session->userdata('user_login');
        if ($usuario == "") {
            return false;
        } else {
            return true;
        }
    }

    //////////////////////////////////////////////////////    
    function _add_default_date_value(){
            $value = !empty($value) ? $value : date("d/m/Y");
            $return = '<input type="text" name="date" value="'.$value.'" class="datepicker-input" /> ';
            $return .= '<a class="datepicker-input-clear" tabindex="-1">Clear</a> (dd/mm/yyyy)';
            return $return;
    }
    //////////////////////////////////////////////////////


    public function servicio(){
        $crud = new grocery_CRUD();
        $crud->set_table("servicio");
        $crud->set_subject('Servicio');

        $crud->display_as('nombre','Nombre de servicio');
        $crud->display_as('descripcion','Descripción');
        $crud->display_as('imagen','Imagen principal');
        $crud->display_as('detalle','Detalle');
        $crud->display_as('foto1','Imagen footer IZQ');
        $crud->display_as('foto2','Imagen footer DER');
        $crud->display_as('fecha','Fecha');
        $crud->display_as('estado','Estado');
        $crud->display_as('lista','Lista descripción');

        $crud->columns('nombre', 'descripcion', 'imagen', 'fecha', 'estado');
        $crud->fields('nombre', 'descripcion', 'imagen', 'detalle', 'foto1', 'foto2','lista', 'fecha', 'estado');
        $crud->required_fields('nombre', 'descripcion', 'imagen', 'detalle', 'fecha', 'estado');
        $crud->set_field_upload('imagen', 'assets/neumos/servicio');
        $crud->set_field_upload('foto1', 'assets/neumos/servicio');
        $crud->set_field_upload('foto2', 'assets/neumos/servicio');

        $crud->field_type('descripcion', 'text');
        $crud->field_type('estado', 'dropdown', array(
            '1' => 'Activo',
            '2' => 'Inactivo'
            ));

        $output = $crud->render();
        $this->showPage($output);
    }

    public function quienesSomos(){
        $crud = new grocery_CRUD();
        $crud->set_table("quienessomos");
        $crud->set_subject('Quienes Somos');

        $crud->display_as('nombre','Atributo');
        $crud->display_as('descripcion','Descripción');
        $crud->display_as('imagen','Imagen');
        $crud->display_as('estado','Estado');

        $crud->columns('nombre', 'descripcion', 'fecha', 'estado');
        $crud->fields('nombre', 'descripcion', 'imagen', 'fecha', 'estado');
        $crud->required_fields('nombre', 'descripcion', 'fecha', 'estado');
        $crud->set_field_upload('imagen', 'assets/neumos/quienessomos');

        $crud->field_type('estado', 'dropdown', array(
            '1' => 'Activo',
            '2' => 'Inactivo'
            ));

        $output = $crud->render();
        $this->showPage($output);
    }

    public function contenido(){
        $crud = new grocery_CRUD();
        $crud->set_table("contenido");
        $crud->set_subject('Contenido');

        $crud->display_as('nombre','Nombre');
        $crud->display_as('descripcion','Descripción');
        $crud->display_as('estado','Estado');

        $crud->columns('nombre', 'descripcion', 'fecha', 'estado');
        $crud->fields('nombre', 'descripcion', 'fecha', 'estado');
        $crud->required_fields('nombre', 'fecha', 'estado');
        $crud->set_field_upload('imagen', 'assets/neumos/contenido');

        $crud->field_type('estado', 'dropdown', array(
            '1' => 'Activo',
            '2' => 'Inactivo'
            ));

        $output = $crud->render();
        $this->showPage($output);
    }

    public function contenidoSlider(){
        $crud = new grocery_CRUD();
        $crud->set_table("contenidoslider");
        $crud->set_subject('Contenido Slider');

        $crud->display_as('imagen','Imagen');
        $crud->display_as('descripcion','Descripción');
        $crud->display_as('estado','Estado');
        $crud->display_as('idcontenido','Contenido de origen');

        $crud->columns('idcontenido', 'imagen', 'descripcion', 'fecha', 'estado');
        $crud->fields('idcontenido', 'imagen', 'descripcion', 'fecha', 'estado');
        $crud->required_fields('idcontenido', 'imagen', 'fecha', 'estado');
        $crud->set_relation('idcontenido', 'contenido', 'nombre');
        $crud->set_field_upload('imagen', 'assets/neumos/contenido');

        $crud->field_type('estado', 'dropdown', array(
            '1' => 'Activo',
            '2' => 'Inactivo'
            ));

        $output = $crud->render();
        $this->showPage($output);
    }

}