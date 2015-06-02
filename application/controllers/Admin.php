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
        array_push($menu, array("url" => "admin/inicioSlider", "label" => "Inicio slider", "icon" => "icon-home"));
        array_push($menu, array("url" => "admin/inicioAccesos", "label" => "Inicio accesos", "icon" => "icon-home"));
        return $menu;
    }

    /* no modificar */

    public function getMenuAdmin() {
        $menu = array();
        array_push($menu, array("url" => "admin/usuario", "label" => "Usuarios", "icon" => "icon-user"));
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


    public function inicioProveedor(){
        $crud = new grocery_CRUD();
        $crud->set_table("Proveedor");
        $crud->set_subject('Proveedor');

        $crud->display_as('nombre','Nombre de Proveedor');
        /*$crud->display_as('foto','Imagen de Producto');*/ /*@Ady*/
        $crud->display_as('idCategoria','Nombre de Categoría');
        $crud->display_as('texto_descriptivo','Descripción');
        $crud->display_as('link','Archivo');
        $crud->display_as('fecha','Fecha');
        $crud->display_as('estado','Estado');

        $crud->columns('nombre', /*'foto',*/'idCategoria','texto_descriptivo','link', 'fecha', 'estado');
        $crud->fields('nombre', /*'foto',*/'idCategoria','texto_descriptivo','link', 'fecha', 'estado');
        $crud->required_fields('nombre', /*'foto',*/ 'idCategoria','texto_descriptivo', 'fecha', 'estado');
        $crud->set_field_upload('link', 'assets/diversquim/docs');
        
        $crud->field_type('texto_descriptivo', 'text');
        $crud->field_type('estado', 'dropdown', array(
            '1' => 'Activo',
            '2' => 'Inactivo'
        ));
        $crud->set_relation('idCategoria', 'Categoria', 'nombre');
        $output = $crud->render();
        $this->showPage($output);
    }

}