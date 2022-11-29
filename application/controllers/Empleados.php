<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
    

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
      $this->load->view('empleados/inicio');
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
    //Mostrar los datos de los empleados
    public function show(){
      $this->load->model('empleados_model');
      $data['titulo']='Lista de Empleados';
      $data['lista']= $this->empleados_model->show();
      $this->load->view('plantilla/head');
      $this->load->view('plantilla/nav');
      $this->load->view('empleados/show', $data);
      $this->load->view('plantilla/footer');
      $this->load->view('plantilla/scripts');
      $this->load->view('plantilla/end');
    }
    //Guardar los datos de los empleados
    public function save(){
      $this->load->model('empleados_model');
      if($this->input->post()){
        $NombreCompleto = $_POST["NombreCompleto"];
        $idCargo = $_POST["idCargo"];
        $Direccion = $_POST["Direccion"];
        $Telefono = $_POST["Telefono"];
        $Estado = $_POST["Estado"];
        $this->empleados_model->save($_POST);
        redirect(base_url("empleados/show"));

      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('empleados/save');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }
    //editar los datos de los empleados
    public function edit($id = null){
      $this->load->model('empleados_model');
      if(!$id == null){
        $id = $this->db->escape((int)$id);
        $empleado = $this->empleados_model->getdata($id);
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('empleados/edit', compact("empleado"));
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
      }
      else{
        redirect(base_url("empleados/show"));
      }
    }
    public function update(){
      $this->load->model('empleados_model');
      if($this->input->post()){
        $idAlumno=$this->db->escape((int)$_POST["idEmpleado"]);
        $NombreCompleto=$this->db->escape($_POST["NombreCompleto"]);
        $idCargo=$this->db->escape($_POST["idCargo"]);
        $Direccion=$this->db->escape($_POST["Direccion"]);
        $Telefono=$this->db->escape((int)$_POST["Telefono"]);
        $Estado=$this->db->escape((int)$_POST["Estado"]);
        if($this->empleados_model->update($idAlumno, $NombreCompleto, $idCargo, $Direccion, $Telefono, $Estado)){
          redirect(base_url("empleados/show"));
        }

      }
        $this->load->view('plantilla/head');
        $this->load->view('plantilla/nav');
        $this->load->view('empleados/update');
        $this->load->view('plantilla/footer');
        $this->load->view('plantilla/scripts');
        $this->load->view('plantilla/end');
    }
}


?>