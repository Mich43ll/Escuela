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
        $primerParcial = $_POST["primerParcial"];
        $segundoParcial = $_POST["segundoParcial"];
        $tercerParcial = $_POST["tercerParcial"];
        //$Promedio = $_POST["Promedio"];
        $idClase = $_POST["idClase"];
        $idAlumno = $_POST["idAlumno"];
        $idEmpleado = $_POST["idEmpleado"];
        $this->notas_model->save($_POST);
        redirect(base_url("notas/show"));

      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('notas/save');
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
        $this->load->view('notas/edit', compact("nota"));
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
      }
      else{
        redirect(base_url("notas/show"));
      }
    }
    public function update(){
      $this->load->model('notas_model');
      if($this->input->post()){
        $idNotas=$this->db->escape((int)$_POST["idNotas"]);
        $primerParcial=$this->db->escape((int)$_POST["primerParcial"]);
        $segundoParcial=$this->db->escape((int)$_POST["segundoParcial"]);
        $tercerParcial=$this->db->escape((int)$_POST["segundoParcial"]);
        //$Promedio=$this->db->escape((int)($primerParcial+$segundoParcial+$tercerParcial)/3);
        $idClase=$this->db->escape((int)$_POST["idClase"]);
        $idAlumno=$this->db->escape((int)$_POST["idAlumno"]);
        $idEmpleado=$this->db->escape((int)$_POST["idEmpleado"]);
        if($this->notas_model->update($idNotas, $primerParcial, $segundoParcial, $tercerParcial, $idClase,$idAlumno, $idEmpleado)){
          redirect(base_url("notas/show"));
        }

      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('notas/update');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }

    public function delete(int $id){
      $this->load->model('notas_model');
        if($this->notas_model->delete($id)){
          redirect(base_url("notas/show"));
        }
      
    }
}


?>