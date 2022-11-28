<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {
    

    function _construct()
    {
          parent::__construct();
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
      $this->load->view('plantilla/end');
    }
    //Mostrar los datos de los alumnos
    public function show(){
      $this->load->model('alumnos_model');
      $data['titulo']='Lista de Alumnos';
      $data['lista']= $this->alumnos_model->show();
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('alumnos/show', $data);
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
    //Guardar los datos de los alumnos
    public function save(){
      $this->load->model('alumnos_model');
      if($this->input->post()){
        $NombreCompleto = $_POST["NombreCompleto"];
        $Genero = $_POST["Genero"];
        $Edad = $_POST["Edad"];
        $Estado = $_POST["Estado"];
        $idGrado = $_POST["idGrado"];
        $this->alumnos_model->save($_POST);
        redirect(base_url("alumnos/show"));

      }
      $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
      $this->load->view('alumnos/save');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
    //editar los datos de los alumnos
    public function edit(){
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('alumnos/edit');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
}


?>