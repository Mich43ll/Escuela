<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {
    

    function _construct()
    {
          parent::_construct();
          $this->load->helper('form');
          $this->load->helper('html');
          $this->load->helper('url');

    }
    
    public function inicio(){
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('alumnos/inicio');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
    }
    public function show(){
      $this->load->model('alumnos_model');
      $data['titulo']='Lista de Alumnos';
      $data['lista']= $this->alumnos_model->listar();
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('alumnos/show', $data);
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
    }
    
}


?>