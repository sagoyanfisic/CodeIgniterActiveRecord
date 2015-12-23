<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends  CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('myhelper');
        $this->load->helper('form');
    }
    function index(){
        $this->load->library('menu',array('Inicio','Conctacto'));
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('codigofacilito/bienvenido',$data);

    }
    function  nuevo(){
        $this->load->view('codigofacilito/headers');
        $this->load->view('codigofacilito/formulario');
    }
}
?>