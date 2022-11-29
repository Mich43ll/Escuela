<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Notas extends CI_Controller {
    

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
      $this->load->view('notas/inicio');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
    //Mostrar los datos de los alumnos
    public function show(){
      $this->load->model('notas_model');
      $data['titulo']='Lista de Notas';
      $data['lista']= $this->notas_model->show();
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('notas/show', $data);
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
    //Guardar los datos de los alumnos
    public function save(){
      $this->load->model('notas_model');
      if($this->input->post()){
        $NombreCompleto = $_POST["NombreCompleto"];
        $Direccion = $_POST["Direccion"];
        $Genero = $_POST["Genero"];
        $Edad = $_POST["Edad"];
        $Estado = $_POST["Estado"];
        $idGrado = $_POST["idGrado"];
        $this->notas_model->save($_POST);
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
    public function edit($id = null){
      $this->load->model('notas_model');
      if(!$id == null){
        $id = $this->db->escape((int)$id);
        $alumno = $this->notas_model->getdata($id);
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('alumnos/edit', compact("alumno"));
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
      }
      else{
        redirect(base_url("alumnos/show"));
      }
    }
    public function update(){
      $this->load->model('notas_model');
      if($this->input->post()){
        $idAlumno=$this->db->escape((int)$_POST["idAlumno"]);
        $NombreCompleto=$this->db->escape($_POST["NombreCompleto"]);
        $Direccion=$this->db->escape($_POST["Direccion"]);
        $Genero=$this->db->escape($_POST["Genero"]);
        $Edad=$this->db->escape((int)$_POST["Edad"]);
        $Estado=$this->db->escape((int)$_POST["Estado"]);
        $idGrado=$this->db->escape((int)$_POST["idGrado"]);
        if($this->notas_model->update($idAlumno, $NombreCompleto, $Direccion, $Genero, $Edad, $Estado, $idGrado)){
          redirect(base_url("alumnos/show"));
        }

      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('alumnos/update');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }
}


?>